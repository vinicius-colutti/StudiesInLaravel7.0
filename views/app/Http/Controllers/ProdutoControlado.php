<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControlado extends Controller
{
    public function listar(){
      $produtos = ['Notebook', 'Mouse', 'Monitor', 'Impressora', 'SSD'];
      return view('produtos', compact('produtos'));
    }

    public function secaoProdutos($palavra){
      return view('secao-produtos', compact('palavra'));
    }

    public function mostrarOpcoes(){
      return view('mostrar-opc');
    }

    public function opcoes($opcao){
      return view('opcoes', compact('opcao'));
    }

    public function loopFor($n){
      return view('loop-for', compact('n'));
    }

    public function loopForeach(){
      $produtos = [
        ['id'=>1, 'nome'=>'computador'],
        ['id'=>2, 'nome'=>'mouse'],
        ['id'=>3, 'nome'=>'fone'],
        ['id'=>4, 'nome'=>'teclado'],
        ['id'=>5, 'nome'=>'impressora'],
      ];

      return view('foreach', compact('produtos'));
    }
}
