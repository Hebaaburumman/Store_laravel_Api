<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\User;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;




class ProductController extends Controller
{
    public function index()
{
    $products = Product::with('categories:name')->orderBy('created_at', 'desc')->paginate(8);

    return response()->json(['products' => $products], 200);
}

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $search = $request->input('search');

        $results = Product::where('name', 'like', "%$search%")->paginate(10);

        return response()->json(['results' => $results], 200);
    }

    public function create(Request $request)
    {
        $categories = Category::all();

        return response()->json(['categories' => $categories], 200);
    }



    public function store(Request $request)
    {
        // Get the user ID from the request
        $userId = $request->input('user_id');
    
        if ($userId) {
            $user = User::find($userId);
    
            if (!$user) {
                return response()->json(['error' => 'Invalid user ID'], 404);
            }
    
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
            $product->name = $request->name;
            $product->image = $imagePath;
            $product->description = $request->description;
            $product->quantity = $request->quantity;
            $product->price = $request->price;
    
            // Save the product and associate it with the user
            $user->products()->save($product);
    
            // Retrieve selected categories from the request
            $selectedCategories = $request->input('categories', []);
    
            // Attach selected categories to the product
            $product->categories()->attach($selectedCategories);
    
            // Return a JSON response with the created product
            return response()->json(['product' => $product, 'message' => 'Product created successfully'], 201);
        } else {
            // Handle the case where the user_id is missing or invalid
            return response()->json(['error' => 'Invalid or missing user ID'], 400);
        }
    }
    
    
    
     

    public function edit($id)
    {
        $categories = Category::all();
        $product = Product::findOrFail($id);

        return response()->json(['categories' => $categories, 'product' => $product], 200);
    }


public function update(Request $request, $id)
{
    // Validate the request data
    $validator = Validator::make($request->all(), [
        'name' => 'required|string|max:255',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'description' => 'required|string',
        'quantity' => 'required|integer',
        'price' => 'required|numeric',
        'categories' => 'required|array', 
        // Use 'array' instead of 'in'
        // Add more validation rules for categories if needed
    ], [
        'categories.required' => 'Please select at least one category.',
    ]);

    // Check for validation errors
    if ($validator->fails()) {
        return response()->json(['error' => $validator->errors()], 400);
    }

    // Find the product or return a 404 response
    $product = Product::findOrFail($id);
    // Update product fields
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->quantity = $request->input('quantity');
    $product->price = $request->input('price');

    // Handle file upload if an image is provided
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        
        // Check if the file exists before updating
        if ($image->exists()) {
            $imagePath = $image->store('images', 'public'); // You can customize the storage path
            $product->image = $imagePath;
        }
    }


    // Sync categories
    $product->categories()->sync($request->input('categories', []));

    // Save the updated product
    $product->save();

    // Return a JSON response for the API
    return response()->json(['message' => 'Product updated successfully', 'data' => $product], 200);
}

    

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted successfully'], 200);
    }

    public function show()
    {
        $products = Product::orderBy('created_at', 'desc')->get();

        return response()->json(['products' => $products], 200);
    }

    public function removeOneQuantity($id)
    {
        $product = Product::find($id);

        if ($product) {
            $product->quantity -= 1;
            $product->save();
        }

        return response()->json(['message' => 'Quantity removed successfully'], 200);
    }
}

