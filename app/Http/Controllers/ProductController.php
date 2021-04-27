<?php

namespace App\Http\Controllers;

use App\Models\option_values;
use App\Models\Options;
use App\Models\Product;
use App\Models\product_skus;
use App\Models\sku_values;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
        $option = Options::all();
        $productskus = product_skus::all();
        $skuvalue = sku_values::all();
        $option_values = option_values::all();

        return view('index', compact('product', 'option', 'productskus', 'skuvalue', 'option_values'));
    }
    public function create()
    {
        return view('product.p_create');
    } //untuk masuk kehhalaman create
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => ['required']

        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->save();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk menyimpan data inputan
    public function edit($id)
    {
        $product = Product::findOrfail($id);
        return view('product.p_edit', compact('product'));
    } //untuk masuk ke halam edit
    public function update(Request $request, $id)
    {
        $data = Product::find($id);
        $data->product_name = $request->product_name;
        $data->update();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk melakukan update
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('/');
    } //menghapusa data
}
