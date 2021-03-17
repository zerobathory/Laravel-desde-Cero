<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
	public function index() {

		$products = Product::all();

		//$products = DB::table('products')->get();

		//dd($products);

		return view('products.index')->with([
			'products' => Product::all(),
		]);
	}

	public function create() {
		return view('products.create');
	}

	public function store() {
		/*$product = Product::create([
			'title' => request()->title,
			'description' => request()->description,
			'price' => request()->price,
			'stock' => request()->stock,
			'status' => request()->status,
		]);*/

		$product = Product::create(request()->all());
		return $product;
	}

	public function show($product) {
		$product = Product::findOrFail($product);
		//$product = DB::table('products')->where('id', $product)->first();
		//$product = DB::table('products')->find($product);

		return view('products.show')->with([
			'product' => $product,
			//'html' => "<h2>Subtitle</h2>",
		]);
	}

	public function edit($product) {
		return view('products.edit')->with([
			'product' => Product::findOrFail($product),
		]);
	}

	public function update($product) {
		$product = Product::findOrFail($product);
		$product->update(request()->all());
		return $product;
	}

	public function destroy($product) {
		$product = Product::findOrFail($product);
		$product->delete();

		return $product;
	}
}
