<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function getNome(){
      return "Vinicius Colutti";
    }

    public function getIdade(){
      return "18 anos";
    }

    public function multiplicar($n1, $n2){
      return $n1*$n2;
    }

    public function getNomeById($id){
      $v = ['Mario', 'Vinicius', 'Edson', 'Jean'];
      if ($id >= 0 && $id < count($v)) {
        return $v[$id];
      }else{
        return 'nao encontrado';
      }
    }
}
