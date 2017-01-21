	@extends('layout.principal')
	@section('conteudo')

	@if(empty($produtos))
		<div class="alert alert-danger">
			Você não tem nenhum produto cadastrado
		</div>
	@else
	<h1 class="jumbotron">Listagem de Produtos</h1>
	<table class="table table-bordered table-striped table-hover">
		@foreach($produtos as $produto)
		<tr class="{{$produto->quantidade<=1 ? 'danger': ''}}">
			<td>{{$produto->nome}}</td>
			<td>{{$produto->descricao}}</td>
			<td>{{$produto->valor}}</td>
			<td>{{$produto->quantidade}}</td>
			<td>
				<a href="/produtos/mostra/{{$produto->id}}">
					<span class="glyphicon glyphicon-search"></span>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
	@endif
	<h4>
		<span class="label label-danger pull-right">
			Um ou menos itens no estoque
		</span>
	</h4>
	@if(old('nome'))
	<div class="alert alert-success">
		<p>Produto {{old('nome')}} adicionado com sucesso</p>	
	</div>
	@endif
	@stop