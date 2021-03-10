<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
</head>
<body>
	<h1>{{$product->title}} ({{$product->id}})</h1>
	<p>{{$product->description}}</p>
	<p>{{$product->price}}</p>
	<p>{{$product->status}}</p>
	<p>{{$product->stock}}</p>

	{{--$html--}}
	@{{$var}}
</body>
</html>