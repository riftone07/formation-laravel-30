<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Application shopaway</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('dist/css/bootstrap.css') }}">
</head>
<body>

	<div class="container">
		<div class="row ">
			<h1 class="text-center">{{ $categorie->nom }}</h1>
			
			@foreach($categorie->produits as $produit)

		<div class="col-lg-3 mt-4 mx-0">
				<a href="{{ route('detailproduit',$produit->id) }}" class="mx-0">
				<div class="card">
					<img src="{{ $produit->imagePrincipale() }}" alt="" class="img img-fluid">
					<div class="card-body">
						<strong>{{ $produit->nom }}</strong>
						<p>{{  Str::limit($produit->description,50) }}</p>
						<span class="float-right">{{ $produit->prix }} Fcfa</span>
					</div>
				</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</body>
</html>