@extends('layout.principal')

@section('conteudo')
<title>Detalhes de produto</title>
</head>
<body>
<div class="container-fluid">
    </br>
    <h1 align="center">Detalhes do produto {{$p->nome}}</h1>
    </br>

    <ul>
        <li>Valor: {{$p->valor}}</li>
        <li>Descrição: {{$p->descricao}}</li>
        <li>Quantidade em estoque: {{$p->quantidade}}</li>
        <li>Dimensões: {{$p->tamanho == '' ? 'Não possui dimensões':$p->tamanho}}</li>
    </ul>

</div>
</body>
@stop
