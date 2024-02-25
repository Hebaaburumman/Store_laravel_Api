<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Category;

    class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'quantity',
        'price',
        'category_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
  


    // Many-to-Many relationship with Category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}


