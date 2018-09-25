@extends('layout.principal')

@section('conteudo')
    <br/>
    <form action="/login" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input name="password" type="password" class="form-control">
        </div>
        <button class="btn btn-primary">Login</button>
    </form>

@stop
