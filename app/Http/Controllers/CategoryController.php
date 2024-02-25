<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category; 
use App\Models\Product; 

class CategoryController extends Controller
{
    public function list()
    {
        $categories = Category::with('products')->paginate(10);

        return view('categories.index', compact('categories'));
    }

    public function create()

    {
        
       
        return view('categories.create');
    }
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Create a new category
        $category = new Category();
        $category->name = $request->input('name');
        $category->save();
        // Redirect back or wherever you need to go
        return redirect()->route('categories.list')->with('success', 'Category created successfully');
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        // Validate the request data as needed
        $request->validate([
            'name' => 'required|string|max:255',
            // Add more validation rules if necessary
        ]);

        // Update category data
        $category->update([
            'name' => $request->input('name'),
            // Add more fields as needed
        ]);

        return redirect()->route('categories.list')->with('success', 'Category created successfully');

    }

    /**
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
{
    try {
        $category = Category::findOrFail($id);

        // Check if the category has associated products
        $hasProducts = $category->products()->exists();

        if ($hasProducts) {
            return redirect()->route('categories.list')
                ->with('error', 'Cannot delete category with associated products');
        }

        // No associated products, delete the category
        $category->delete();

        return redirect()->route('categories.list')
            ->with('success', 'Category deleted successfully');
    } catch (ModelNotFoundException $e) {
        return redirect()->route('categories.list')
            ->with('error', 'Category not found');
    }
}}
