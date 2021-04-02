<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application shopaway</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.css') }}">
</head>
<body>
@if(session('message'))
<div class="alert alert-danger">
{{ session('message') }}
	
</div>
@endif
	<div class="container">
		<div class="row m-5">
			<div class="col-lg-3">
				<div class="list-group">
					@foreach($categories as $categorie)
					<a href="#" class="list-group-item">{{ $categorie->nom }}</a>
					@endforeach
				</div>
			</div>
			<div class="col-lg-9">
				<img src="{{ asset('images/slide.gif') }}" alt="" class="img img-fluid">
			</div>
		</div>
		<div class="row">
			@foreach($produits as $produit)
			<div class="col-lg-3 mt-4">
				<div class="card">
					<img src="{{ $produit->imagePrincipale() }}" alt="" class="img img-fluid">
					<div class="card-body">
						<strong>{{ $produit->nom }}</strong>
						<p>{{  Str::limit($produit->description,50) }}</p>
						<span class="float-right">{{ $produit->prix }} Fcfa</span>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</body>
</html>
