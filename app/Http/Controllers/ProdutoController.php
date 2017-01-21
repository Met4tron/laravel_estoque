<?php namespace estoque\Http\Controllers;
use DB;
use Request;

class ProdutoController extends Controller {
	public function lista(){
		$produtos = DB::select('select * from produtos');

		

		if(empty($produtos)){

			return view('errors.404');
		}
		return view('produto.listagem',['produtos' => $produtos]);

	}
	public function mostra($id){

		$produto = DB::select('select * from produtos where id=?', [$id]);



		if(empty($produto)){
			return view('errors.404');
		}

		return view('produto.detalhes', ['p' => $produto[0]]);
	}

	public function produtoNovo(){


		return view('produto.formulario');
	}

	public function adiciona(){

		$nome = Request::input('nome');
		$descricao = Request::input('descricao');
		$valor = Request::input('valor');
		$quantidade = Request::input('quantidade');

		DB::insert('insert into produtos values (null, ?,?,?,?)', array($nome, $valor, $descricao, $quantidade));

		return redirect('/produtos')
			->action('ProdutoController@lista')
			->withInput(Request::only('nome'));
	}

	public function listJson() {
		$produtos = DB::select('select * from produtos');

		return response()->json($produtos);
	}

}