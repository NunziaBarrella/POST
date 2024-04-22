<?php

namespace App\Models;
use App\Models\Category;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_menu extends Model
{
    use HasFactory;

    public function index()
{
    $categories = Category::all();
    return view('homepage', compact('categories'));
}

}


