<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $products = Product::all();
//        dd($data);

        $products = Product::with('Categories')->get();

        return view('product.index', compact('products'));
    }

    public function add()
    {
        return view('product.add');
    }

    public function save(Request $request)
    {
//        dd($request->all());
       $request->validate([
           'name' => 'required',
           'description' => 'required'
       ]);

        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function edit( $id)
    {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = product::find($id);
        $product -> update($request->all());
        return redirect()->route('product.index')
        ->with('success','Update data successfully.');
    }

    public function delete(Request $request, $id)
    {
        $product = product::find($id);
        $product -> delete($product);
        return redirect()->route('product.index')
        ->with('success','Delete data successfully.');
    }


}