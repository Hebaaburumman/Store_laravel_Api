<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;

class DashboardController extends Controller
{
    

public function dashboard()
{
    $data = Category::select('name')
        ->withCount('products')
        ->get();

    $userCount = User::count();
    $categoryCount = Category::count();
    $productCount = Product::count();

    return response()->json([
        'user_count' => $userCount,
        'category_count' => $categoryCount,
        'product_count' => $productCount,
        'data' => CategoryResource::collection($data),
    ], 200);
}

// public function productsByCategory()
// {
//     $data = Category::select('name')
//         ->withCount('products')
//         ->get();

//     return response()->json(['data' => CategoryResource::collection($data)], 200);
// }

}
