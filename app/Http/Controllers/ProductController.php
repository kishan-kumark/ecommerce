<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Sub_Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('admin-panal.products.index', compact('products'));
    }
    public function create(){
        $categories = Category::all();
        $subCategories = Sub_Category::all();
        return view('admin-panal.products.create', compact('categories', 'subCategories'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'discount_price' => 'required|numeric|min:0',
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub__categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product = new Product();
        $product->title = $validated['title'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];
        $product->discount_price = $validated['discount_price'];
        $product->category_id = $validated['category_id'];
        $product->sub_category_id = $validated['subcategory_id'];
        $product->image = $request->file('image')->store('products', 'public');

        $product->save();

        return redirect()->route('admin.products')->with('success', 'Product created successfully.');
    }
}
