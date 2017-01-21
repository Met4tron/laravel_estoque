
	@extends('layout.principal')
	@section('conteudo')
	<h1 class="jumbotron">Detalhes do Produto: <?=$p->nome?></h1>
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<td>Valor</td>
				<td>Descrição</td>
				<td>Estoque</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>R$ {{$p->valor}}</td>
				<td>{{$p->descricao}}</td>
				<td>{{$p->quantidade}}</td>
			</tr>
		</tbody>
	</table>
	@stop