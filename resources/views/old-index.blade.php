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
        <h5 class="card-title">Exibindo clientes de 0 a 20</h5>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
          </tbody>
        </table>
    
      </div>
      <div class="card-footer">
        
        <nav>
          <ul class="pagination">
            <li class="page-item disabled">
              <span class="page-link">Anterior</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <span class="page-link">
                2
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Próximo</a>
            </li>
          </ul>
        </nav>

      </div>
    </div>

  </div>

  <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>

</body>
</html>
