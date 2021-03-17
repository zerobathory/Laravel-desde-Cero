@extends('layouts.master')
@section('content')
	<h1>Edit a product</h1>
	<form method="POST" action="{{ route('products.update', ['product' => $product->id]) }}">
		@csrf
		@method('PUT')
		<div class="form-row">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="{{ $product->title }}" required>
		</div>
		<div class="form-row">
			<label>Description</label>
			<input type="text" name="description" class="form-control" value="{{ $product->description }}" required>
		</div>
		<div class="form-row">
			<label>Price</label>
			<input type="number" min="1.00" step="0.01" name="price" value="{{ $product->price }}" class="form-control" required>
		</div>
		<div class="form-row">
			<label>Stock</label>
			<input type="number" min="0" name="stock" class="form-control" value="{{ $product->stock }}" required>
		</div>
		<div class="form-row">
			<label>Status</label>
			<select class="custom-select" name="status" required>
				<option {{ $product->status == 'avaliable' ? 'selected' : '' }} value="available">Available</option>
				<option {{ $product->status == 'unavaliable' ? 'selected' : '' }} value="unavailable">Unvailable</option>
			</select>
		</div>
		<div class="form-row">
			<button type="submit" class="btn btn-primary btn-lg">Edit product</button>
		</div>
	</form>
@endsection