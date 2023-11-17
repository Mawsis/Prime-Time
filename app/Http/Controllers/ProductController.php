<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view("product.index");
    }
    public function show(Product $product)
    {
        return view("product.show", [
            "product"=> $product
        ]);
    }
}
