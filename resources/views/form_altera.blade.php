@extends('layout.principal')

@section('conteudo')


    </br>
    <form action="/produtos/altera/{{$p->id}}" method="post">

        <input value="{{ csrf_token() }}" name="_token" type="hidden">

        <div class="form-group">
            <label>Nome:</label>
            <input name="nome" type="text" class="form-control" value="{{$p->nome}}">
        </div>
        <div class="form-group">
            <label>Tamanho:</label>
            <input name="tamanho" type="text" class="form-control" value="{{$p->tamanho}}">
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <input name="valor" type="number" class="form-control" value="{{$p->valor}}">
        </div>
        <div class="form-group">
            <label>Quantidade:</label>
            <input name="quantidade" type="text" class="form-control" value="{{$p->quantidade}}">
        </div>
        <div class="form-group">
            <label>Descrição:</label>
            <textarea name="descricao" id="" cols="30" rows="10" class="form-control" >{{$p->descricao}}</textarea>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $c)
                    <option value="{{$c->id}}" onload="{{$p->categoria->nome}}">{{$c->nome}}</option>
                @endforeach
            </select>
        </div>
        <button class="btn-primary">Alterar</button>
    </form>

@stop
