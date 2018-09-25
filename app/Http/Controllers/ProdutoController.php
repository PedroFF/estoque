<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests\ProdutoRequest;
use Request;
use estoque\Produto;
use Validator;
use Auth;
use estoque\Categoria;

class ProdutoController extends Controller {

    public function __construct() {
        $this->middleware('autorizador');
    }


    public function lista(){

        $produtos = Produto::all();
        return view('listagem')->with('produtos', $produtos);
    }

    public function mostra($id){

        $produto = Produto::find($id);
        return view('detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request){

        Produto::create($request->all());
        return redirect('/produtos')->withInput($request->only('nome'));
    }

    public function exclui($id){
        $produto = Produto::find($id);
        $produto->delete();

        return redirect('/produtos');
    }

    public function info(){
        phpinfo();
    }
}
