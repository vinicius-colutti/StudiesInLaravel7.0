<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
  </head>
  <body>
      @section('barralateral')
          Essa é a parte da seção do pai
      @show
      <div>
        @yield('conteudo')
      </div>
  </body>
</html>
