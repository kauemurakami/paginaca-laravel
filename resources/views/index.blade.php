<html>
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Pagina de Produtos</title>
    <style>
        body {
          padding: 20px;
        }
        .navbar {
          margin-bottom: 20px;
        }
    </style>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

  <div class="container">
    <div class="card text-center">
      <div class="card-header">
       	Tabela de Clientes 
      </div>
      <div class="card-body">
        <h5 class="card-title">Exibindo {{$clientes->count()}} clientes de {{$clientes->total()}} 
        ( {{$clientes->firstItem()}} a {{$clientes->lastItem()}} ) </h5>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Sobrenome</th>
              <th scope="col">Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($clientes as $cliente)
            <tr>
              <th scope="row">{{$cliente->id}}</th>
              <td>{{$cliente->nome}}</td>
              <td>{{$cliente->sobrenome}}Otto</td>
              <td>{{$cliente->email}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{ $clientes->links() }} 
      </div>
    </div>

  </div>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
