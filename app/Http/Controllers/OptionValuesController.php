<?php

namespace App\Http\Controllers;

use App\Models\sku_values;
use App\Models\Options;
use App\Models\Product;
use Illuminate\Http\Request;

use App\Models\option_values;

class OptionValuesController extends Controller
{
    public function create()
    {
        $product = Product::all();
        $option = Options::all();
        $sku_values = sku_values::all();
        $optionvalues = option_values::all();

        return view('options_values.o_values_create', compact('product', 'option', 'sku_values', 'optionvalues'));
    } //untuk masuk kehhalaman create
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['required'],
            'option_id' => ['required'],
            'value_id' => ['required'],
            'value_name' => ['required'],

        ]);

        $options = new option_values();
        $options->product_id = $request->product_id;
        $options->option_id = $request->option_id;
        $options->value_id = $request->value_id;
        $options->value_name = $request->value_name;
        $options->save();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk menyimpan data inputan
    public function edit($id)
    {
        $product = Product::all();
        $option = Options::all();
        $skuvalue = sku_values::all();
        $optionvalues = option_values::findOrfail($id);


        return view('options_values.o_values_edit', compact('skuvalue', 'product', 'option', 'optionvalues'));
    }
    public function update(Request $request, $id)
    {
        $optionvalue = option_values::find($id);
        $optionvalue->product_id = $request->product_id;
        $optionvalue->value_id = $request->value_id;
        $optionvalue->option_id = $request->option_id;
        $optionvalue->value_name = $request->vale_name;
        $optionvalue->update();

        return redirect('/')->with('statis', 'Data Berhasil Ditambahkan');
    } //untuk melakukan update

    public function destroy($value_name)
    {
        option_values::destroy($value_name);
        return redirect('/');
    } //menghapusa data
}
