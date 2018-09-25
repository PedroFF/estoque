<?php

namespace estoque\Http\Controllers;
use estoque\Http\Requests\ProdutoRequest;
use Request;
use estoque\Produto;
use Validator;
use Auth;
class LoginController extends Controller
{


    public function form(){
        return view('form_login');
    }

    public function login(Request $request)
    {

        $credenciais = $request->only('email', 'password');
        if (Auth::attempt($credenciais)){

        }

        return view('');

    }
}
