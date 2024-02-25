<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(8);


        // Pass the products to the view
        return view('index.viewproduct', compact('products'));
    }
    public function search(Request $request)
{
    // Validate the input
    $request->validate([
        'search' => 'required|string|max:255',
    ]);

    // Retrieve the search input
    $search = $request->input('search');

    // Perform the search using Eloquent
    $results = Product::where('name', 'like', "%$search%")->paginate(10); // Adjust the pagination size as needed

    // Return the results to the view
    return view('index.viewproduct', ['results' => $results, 'products' => $products]);
}
    
   
    public function create()
    {

        $categories = Category::all();

         // Assuming Category is your Eloquent model for categories
        return view('products.create', compact('categories'));
    }

    
    public function store(Request $request)
{
    $user = Auth::user();

    if ($user) {
        $imagePath = null;

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $imagePath = 'img/' . $imageName;
        }

        // Create a new product
        $product = new Product();
        $product->name = $request->input('name');
        $product->image = $imagePath;
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');

        // Save the product and associate it with the user
        $user->products()->save($product);

        // Retrieve selected categories from the request
        $selectedCategories = $request->input('categories', []);

        // Attach selected categories to the product
        $product->categories()->attach($selectedCategories);

        // Redirect to a success page or wherever you want
        return redirect()->route('products.show', $product->id)->with('success', 'Product created successfully');
    } else {
        // Handle the case where the user is not authenticated
        return redirect()->route('login')->with('error', 'You must be logged in to create a product.');
    }
}

    public function edit($id)
    {
        $categories = Category::all();

        $product = Product::findOrFail($id);
        return view('products.edit', compact('categories','product'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required|string',
        'quantity' => 'required|integer',
        'price' => 'required|numeric',
        'categories' => 'required|array',  // Use 'array' instead of 'in'
        // Add more validation rules for categories if needed
    ], [
        'categories.required' => 'Please select at least one category.',
    ]);

    $product = Product::findOrFail($id);
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->quantity = $request->input('quantity');
    $product->price = $request->input('price');

    // Handle file upload if an image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->store('images', 'public'); // You can customize the storage path
        $product->image = $imagePath;
    }

    $product->categories()->sync($request->input('categories', []));

    $product->save();

    return redirect()->route('products.show', ['product' => $product->id])->with('success', 'Product updated successfully');
}

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.show')->with('success', 'Product deleted successfully');
    }
 public function show()
{
    $products = Product::orderBy('created_at', 'desc')->get();

    return view('products.index', compact('products'));
}
public function removeOneQuantity($id)
{
    $product = Product::find($id);

    if ($product) {
        $product->quantity -= 1;
        $product->save();
    }

    // Redirect back or to wherever you need
    return back();
}
}

