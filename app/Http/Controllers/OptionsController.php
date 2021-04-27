<?php

namespace App\Http\Controllers;

use App\Models\Options;
use App\Models\Product;
use App\Models\sku_values;
use Illuminate\Http\Request;


class OptionsController extends Controller
{
    public function create()
    {
        $product = Product::all();
        $skuvalue = sku_values::all();

        return view('options.o_create', compact('product', 'skuvalue'));
    } //untuk masuk kehhalaman create
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'option_name' => ['required'],

        ]);

        $options = new Options();
        $options->product_id = $request->product_id;
        $options->option_name = $request->option_name;
        $options->save();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk menyimpan data inputan
    public function edit($id)
    {
        $product = Product::all();
        $options = options::findOrfail($id);
        return view('options.o_edit', compact('options', 'product'));
    }
    public function update(Request $request, $id)
    {
        $options = options::find($id);
        $options->product_id = $request->product_id;
        $options->option_name = $request->option_name;
        $options->update();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk melakukan update
    public function destroy($id)
    {
        options::destroy($id);
        return redirect('/');
    } //menghapusa data

}
