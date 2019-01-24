@extends('layouts.app')
@section('title', 'Página filho')

@section('barralateral')
  @parent
  <p>Essa parte é do filho</p>
@endsection

@section('conteudo')
  <h1>Este é o conteúdo do filho.</h1>
@endsection
