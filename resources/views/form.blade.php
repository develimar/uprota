<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario :: Teste de Rotas</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body>

<div class="container mt-3">
    <form action="{{url('/users/1')}}" autocomplete="off" method="post">

        @csrf
        @method('DELETE')

        <div class="form-group">
            <label for="first_name">Primeiro Nome</label>
            <input type="text" name="first_name" id="first_name" class="form-control" value="Elimar">
        </div>

        <div class="form-group">
            <label for="last_name">Segundo Nome</label>
            <input type="text" name="last_name" id="last_name" class="form-control" value="Santos">
        </div>

        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" class="form-control" value="elimar.pc@gmail.com">
        </div>

        <button class="btn btn-primary">Enviar</button>
    </form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>
</html>
