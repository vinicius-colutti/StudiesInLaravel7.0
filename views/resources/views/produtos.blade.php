<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="{{URL::to('css/app.css')}}">-->
  </head>
  <body>
    @if(isset($produtos))
      @if(count($produtos) == 0)
      <h1>Nenhum produto</h1>
      @elseif(count($produtos) >= 1)
      <h1>Temos produtos maior que um</h1>
      @else
      <h1>Algum erro</h1>
      @endif
      <h1>Temos produtos</h1>
      @else
      <h1>NAO TEM PRODUTOS</h1>
    @endif

    @foreach($produtos as $p)
      <p>Nome: {{$p}}</p>
    @endforeach

    @empty($produtos)
    <h2>Nada em produtos</h2>
    @endempty
    <!--<script type="text/javascript" src="{{asset('js/app.js')}}">
    </script>-->
    <script type="text/javascript" src="{{URL::to('js/app.js')}}">
    </script>
  </body>
</html>
