<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

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

    return view('index.dashboard', compact('userCount', 'categoryCount', 'productCount','data'));
}

public function productsByCategory()
{
    $data = Category::select('name')
        ->withCount('products')
        ->get();
    return view('index.dashboard', compact('data'));
}

    



}