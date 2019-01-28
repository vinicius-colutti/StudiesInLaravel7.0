<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>pagina</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--<link rel="stylesheet" href="{{URL::to('css/app.css')}}">-->
  </head>
  <body>
    @alert(['tipo'=>'danger', 'titulo'=>'Erro fatal'])
      <strong>Erro: </strong> Sua mensagem de erro.
    @endalert
    @alert(['tipo'=>'primary', 'titulo'=>'Erro fatal'])
      <strong>Erro: </strong> Sua mensagem de erro.
    @endalert
    @alert(['tipo'=>'success', 'titulo'=>'Erro fatal'])
      <strong>Erro: </strong> Sua mensagem de erro.
    @endalert
    <!--<script type="text/javascript" src="{{asset('js/app.js')}}">
    </script>-->
    <script type="text/javascript" src="{{URL::to('js/app.js')}}">
    </script>
  </body>
</html>
