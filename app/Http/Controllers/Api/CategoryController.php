<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::with('products')->paginate(10);

        return response()->json(['categories' => $categories], 200);
    }

    public function create()
    {
        return response()->json(['message' => 'Create category endpoint'], 200);
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

        return response()->json(['message' => 'Category created successfully'], 201);
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return response()->json(['category' => $category], 200);
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

        return response()->json(['message' => 'Category updated successfully'], 200);
    }

    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);

            $hasProducts = $category->products()->exists();

            if ($hasProducts) {
                return response()->json(['error' => 'Cannot delete category with associated products'], 400);
            }

            $category->delete();

            return response()->json(['message' => 'Category deleted successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Category not found'], 404);
        }
    }
}

