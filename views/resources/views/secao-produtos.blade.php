@extends('layouts.meulayout')

@section('minha-secao-produtos')
@if(isset($palavra))
Palavra: {{$palavra}}
@endif
@endsection
