<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index()
    {
       $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function Annonce()
    {
       
        return view('products.annonce');
    }

    public function Reussite()
    {
       
        return view('products.reussite');
    }

    public function show(Request $request, $id)
    {
       $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }
    //
}
