@extends('layouts.meulayout')

@section('minha-secao-produtos')
<h1>Loop foreach - Arrays associativos</h1>

@foreach($produtos as $p)
  <p>{{$p['id']}}: {{$p['nome']}}</p>
@endforeach
<hr>
@foreach($produtos as $p)
  <p>

    {{$p['id']}}: {{$p['nome']}}
    @if($loop->first)
      (primeiro)
    @endif
    @if($loop->last)
      (último)
    @endif
    <span class="badge badge-secondary">{{$loop->index}} / {{$loop->count-1}} / {{$loop->remaining}}</span>
    <span class="badge badge-warning">{{$loop->iteration}}</span>
  </p>
@endforeach
<hr>
@foreach($produtos as $p)
  <p>{{$p['id']}}: {{$p['nome']}}</p>
@endforeach
@endsection
