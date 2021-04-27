<?php

namespace App\Http\Controllers;

use App\Models\Options;
use App\Models\Product;
use App\Models\sku_values;
use App\Models\product_skus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Sku_ValuesController extends Controller
{
    public function create()
    {
        $product = Product::all();
        $option = Options::all();
        $productskus = product_skus::all();

        return view('sku_values.s_values_create', compact('product', 'option', 'productskus'));
    } //untuk masuk kehhalaman create
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'sku_id' => ['required'],
            'option_id' => ['required'],
        ]);

        $skuvalues = new sku_values();
        $skuvalues->product_id = $request->product_id;
        $skuvalues->sku_id = $request->sku_id;
        $skuvalues->option_id = $request->option_id;
        $skuvalues->save();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk menyimpan data inputan

    public function edit($id)
    {
        $product = Product::all();
        $option = Options::all();
        $productskus = product_skus::all();
        $skuvalue = sku_values::findOrfail($id);
        return view('sku_values.s_values_edit',  compact('skuvalue', 'product', 'option', 'productskus'));
    }
    public function update(Request $request, $id)
    {
        $skuvalue = sku_values::find($id);

        if ($request->product_id != '') {
            $skuvalue->product_id = $request->product_id;
            $skuvalue->update();
        } else if ($request->sku_id != '') {
            $skuvalue->sku_id = $request->sku_id;
            $skuvalue->update();
        } else {
            $skuvalue->option_id = $request->option_id;
            $skuvalue->update();
        }
        // $skuvalue->product_id = $request->product_id;
        // $skuvalue->sku_id = $request->sku_id;
        // $skuvalue->option_id = $request->option_id;
        // $skuvalue->update();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk melakukan update
    public function destroy($id)
    {
        sku_values::destroy($id);
        return redirect('/');
    } //menghapusa data

}
