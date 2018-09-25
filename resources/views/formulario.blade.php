@extends('layout.principal')

@section('conteudo')

<div class="alert alert-danger">
@foreach($errors->all() as $error)
    <ul>
        <li>
            {{$error}}
        </li>
    </ul>
@endforeach
</div>

</br>
    <form action="/produtos/adiciona" method="post">

        <input value="{{ csrf_token() }}" name="_token" type="hidden">

        <div class="form-group">
            <label>Nome:</label>
            <input name="nome" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Tamanho:</label>
            <input name="tamanho" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Valor:</label>
            <input name="valor" type="number" class="form-control">
        </div>
        <div class="form-group">
            <label>Quantidade:</label>
            <input name="quantidade" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label>Descrição:</label>
            <textarea name="descricao" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label>Categoria:</label>
            <select name="categoria_id" class="form-control">
                @foreach($categorias as $c)
                <option value="{{$c->id}}">{{$c->nome}}</option>
                    @endforeach
            </select>
        </div>
        <button class="btn-primary">Adicionar</button>
    </form>

@stop
