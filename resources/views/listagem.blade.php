@extends('layout.principal')

@section('conteudo')

    <title>Controle de Estoque</title>
</head>
<body>
<div class="container-fluid">
    @if(empty($produtos))
        <div class="alert alert-danger"><h3 class="text-center"> Você não tem produtos cadastrados</h3> </div>
    @else

    @if(old('nome'))
            <h4 class="text-center text-success"> Produto {{old('nome')}} adicionado/alterado com sucesso. </h4>
    @endif

<h1 align="center">Listagem de produtos com Laravel</h1>
</br>
<table class="table">
    <thead class="text-center">
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
        <th>Tamanho</th>
        <th>Categoria</th>
        <th colspan="3">Ações</th>
    </thead>
    @foreach ($produtos as $p)
    <tbody>
        <tr class="{{ $p->quantidade <= 1 ? 'alert alert-danger' : ''}} text-center">
            <td>{{$p->nome }}</td>
            <td>{{$p->valor }}</td>
            <td>{{$p->descricao }}</td>
            <td>{{$p->quantidade }}</td>
            <td>{{$p->tamanho == '' ? 'Não possui dimensões':$p->tamanho}}</td>
            <td>{{$p->categoria->nome}}</td>
            <td><a href="/produtos/mostra/{{$p->id}}"><i class="fas fa-search"></i></a></td>
            <td><a href="/produtos/exclui/{{$p->id}}"><i class="fas fa-trash"></i></a></td>
            <td><a href="/produtos/atualiza/{{$p->id}}"><i class="fas fa-update"></i></a></td>
        </tr>
    </tbody>
    @endforeach
</table>
    @endif
</div>
</body>

@stop
