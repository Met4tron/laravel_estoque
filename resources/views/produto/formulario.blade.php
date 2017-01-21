@extends('layout.principal')
@section('conteudo')

	<h1>Novo Produto</h1>
	<form class="form-horizontal" action="/produtos/adiciona" method="post">
		
			
		<input type="hidden" name="_token" value ="{{{ csrf_token() }}}"/>
		<div class="form-group">
			<label class="control-label col-sm-2">Nome</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" name="nome">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Descrição</label>
			<div class="col-sm-10">
				<input type="text" name="descricao" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Valor</label>
			<div class="col-sm-10">
				<input type="number" name="valor" class="form-control">
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-2">Quantidade</label>
			<div class="col-sm-10">
				<input type="number" name="quantidade" class="form-control">
			</div>
		</div>
		<button type="submit" class="btn btn-primary btn-block">Enviar</button>

	</form>

@stop