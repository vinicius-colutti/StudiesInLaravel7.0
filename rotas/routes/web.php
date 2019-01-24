<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/hello', 'hello', ['nome'=>'Vinicius', 'sobrenome'=>'Colutti']);

Route::get('/hello/{nome}/{sobrenome}', function($nome, $sobrenome){
  return view('hello', ['nome'=>$nome, 'sobrenome'=>$sobrenome]);
});

Route::get('/repetir/{nome}/{n}', function($nome, $n){

      for($i=0;$i<$n;$i++){
        echo "<h1>Olá, $nome: $i</h1>";
      }
})->where('n', '[0-9]+')->where('nome','[A-Za-z]+');

Route::get('/repetirsemregra/{nome?}', function($nome=null){
        if (isset($nome)) {
          echo "<h1>Olá, $nome</h1>";
        }else{
          echo "Sem nome";
        }
});

Route::prefix('app')->group(function(){

    Route::get('/', function(){
      echo "Página inicial do app";
    });

    Route::get('profile', function(){
      echo "Perfil";
    });

    Route::get('about', function(){
      echo "Sobre";
    });

});

Route::redirect('/aqui', '/hello', 301);

Route::get('/rest/hello', function(){
  return 'Hello (GET)';
});

Route::post('/rest/hello', function(){
  return 'Hello (POST)';
});

Route::delete('/rest/hello', function(){
  return 'Hello (DELETE)';
});

Route::put('/rest/hello', function(){
  return 'Hello (PUT)';
});

Route::patch('/rest/hello', function(){
  return 'Hello (PATCH)';
});

Route::options('/rest/hello', function(){
  return 'Hello (OPTIONS)';
});

Route::post('/rest/imprimir', function(Request $req){
  $nome = $req->input('nome');
  $idade = $req->input('idade');
  echo 'Olá, '.$nome.'<br>';
  echo 'Você tem:'.$idade.' anos';
});

Route::match(['get','post'], 'rest/hello2', function(){
  return  "Hello world 2";
});

Route::any('rest/hello3', function(){
  return  "Hello world 3";
});

Route::get('/produtos', function(){

  echo "<h1>Produtos</h1>";
  echo "<ol>";
  echo "<li>Notebooks</li>";
  echo "<li>Impressoras</li>";
  echo "<li>Mouse</li>";
  echo "</ol>";

})->name('meusprodutos');

Route::get('/linkprodutos', function(){
  $url = route('meusprodutos');
  echo "<a href=\"" .$url. "\">Meus produtos</a>";
});

Route::get("/redirecionarprodutos", function(){

    return redirect()->route('meusprodutos');

});
