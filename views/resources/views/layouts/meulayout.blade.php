<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="{{URL::to('css/app.css')}}">-->
  </head>
  <body>
    @hasSection('minha-secao-produtos')
    <div class="card"style="width:500px; margin-top:10px;">
      <div class="card-body">
          <h5 class="card-title">Produtos</h5>
          <p class="card-text">@yield('minha-secao-produtos')</p>
          <a href="#" class="card-link">Informações</a>
          <a href="#" class="card-link">Ajuda</a>
      </div>
    </div>
    @endif

    <!--<script type="text/javascript" src="{{asset('js/app.js')}}">
    </script>-->
    <script type="text/javascript" src="{{URL::to('js/app.js')}}">
    </script>
  </body>
</html>
