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
		<div class="row">
			<h1>{{ $produit->nom }}</h1>
			<div class="col-lg-6">
				<img src="{{ $produit->imagePrincipale() }}" alt="{{ $produit->nom }}" class="img img-fluid">
				<p>
					{{ $produit->description }}
				</p>
				<p>
					{{ number_format($produit->prix, 0, ',', ' ')  }} Fcfa
				</p>
				<p>
					<a href="#" class="btn btn-success">Commander le produit</a>
				</p>
			</div>
		</div>
	</div>
</body>
</html>