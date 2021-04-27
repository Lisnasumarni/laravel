<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\product_skus;
use App\Models\sku_values;

use Illuminate\Http\Request;

class Product_skusController extends Controller
{
    public function create()
    {
        $product = Product::all();
        $skuvalue = sku_values::all();
        return view('product_skus.p_skus_create', compact('product', 'skuvalue'));
    } //untuk masuk kehhalaman create
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'price' => ['required'],

            'sku' => ['required'],


        ]);

        $productskus = new product_skus();
        $productskus->product_id = $request->product_id;
        $productskus->sku = $request->sku;
        $productskus->price = $request->price;
        $productskus->save();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk menyimpan data inputan
    public function edit($id)
    {
        $product = Product::all();
        $productskus = product_skus::findOrfail($id);
        return view('product_skus.p_skus_edit', compact('productskus', 'product'));
    }
    public function update(Request $request, $id)
    {
        $productskus = product_skus::find($id);
        $productskus->product_id = $request->product_id;
        $productskus->sku = $request->sku;
        $productskus->price = $request->price;
        $productskus->update();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    }
    public function destroy($id)
    {
        product_skus::destroy($id);
        return redirect('/');
    }
}
