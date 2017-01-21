<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Controle de Estoque</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/custom.css">
</head>
<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="/produtos" class="navbar-brand">Estoque Laravel</a>
				</div>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{action('ProdutoController@lista')}}">Listagem</a></li>
					<li><a href="{{action('ProdutoController@produtoNovo')}}">Novo Produto</a></li>
				</ul>
			</div>
		</nav>
	<div class="container">

		@yield('conteudo')
		
	</div>
	<footer class="footer">
			<p>Estoque Laravel</p>
		</footer>
</body>
</html>