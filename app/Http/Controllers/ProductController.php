<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        return view('admin-panal.products.index');
    }
    public function create(){
        $categories = Category::all();
        $subCategories = Sub_Category::all();
        return view('admin-panal.products.create', compact('categories', 'subCategories'));
    }
}
