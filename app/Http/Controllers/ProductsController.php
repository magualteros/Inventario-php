<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = products::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.createProduct');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new products;
        $product->productName = $request->productName;
        $product->productPrice = intval($request->productPrice);
        $product->productDescription = $request->productDes;
        $product->productStock = intval($request->productStock);
        $product->save();
        return redirect('/products');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = products::find($id);
        return view('products.detail',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(products $products)
    {
        //
    }
}
