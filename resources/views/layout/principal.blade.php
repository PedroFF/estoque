<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet">
<!--<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">-->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <div class="container">

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos/novo">Adicionar produto</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos">Listagem</a></li>
                </ul>

            </div>
        </nav>

        @yield('conteudo')

        <footer class="footer">
            <p>© Curso de Laravel do Alura.</p>
        </footer>

    </div>



</html>
