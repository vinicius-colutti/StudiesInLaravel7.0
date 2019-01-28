@extends('layouts.meulayout')

@section('minha-secao-produtos')
  Você escolheu a opção:

  @if(isset($opcao))

    @switch($opcao)
      @case(1):
        <span class="badge badge-primary">Azul</span>
        @break;
      @case(2):
      <span class="badge badge-danger">Vermelho</span>
      @break;
      @case(3):
      <span class="badge badge-success">Verde</span>
      @break;
      @case(4):
      <span class="badge badge-warning">Amarelo</span>
      @break;
      @default:
      <span class="badge badge-primary">Nenhum</span>
   
    @endswitch

  @endif
@endsection
