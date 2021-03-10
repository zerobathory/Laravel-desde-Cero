<?php

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
	public function index() {

		$products = Product::all();

		//$products = DB::table('products')->get();

		dd($products);

		return view('products.index');
	}

	public function create() {
		return 'This is the form to create a product from CONTROLLER';
	}

	public function store() {
		//
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
		return "Showing the form to edit the product with ID {$product} from CONTROLLER";
	}

	public function update($product) {
		//
	}

	public function destroy($product) {

	}
}
