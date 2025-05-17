@extends('layouts.app')

@section('content')
<h1>Alimentos com validade nos próximos 7 dias</h1>

<ul>
@foreach($alimentos as $alimento)
    <li>
        <strong>{{ $alimento->nome }}</strong> - Validade: {{ $alimento->validade }}
    </li>
@endforeach
</ul>

<a href="{{ route('alimentos.index') }}">Voltar</a>
@endsection
