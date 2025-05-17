@extends('layouts.app')

@section('content')
<h1 style="font-size: 24px; margin-bottom: 20px;">Lista de Alimentos</h1>

@if(session('sucesso'))
    <p style="color: green; font-weight: bold;">{{ session('sucesso') }}</p>
@endif

<div style="margin-bottom: 20px;">
    <a href="{{ route('alimentos.create') }}"
       style="padding: 8px 12px; background-color: #28a745; color: white; text-decoration: none; border-radius: 4px; margin-right: 10px;">
       ➕ Adicionar Novo Alimento
    </a>
    
    <a href="{{ route('alimentos.proximos') }}"
       style="padding: 8px 12px; background-color: #ffc107; color: black; text-decoration: none; border-radius: 4px;">
       🕒 Ver Validade Próxima (7 dias)
    </a>
</div>

<ul style="list-style-type: none; padding: 0;">
@foreach($alimentos as $alimento)
    <li style="background: #f9f9f9; padding: 15px; border: 1px solid #ddd; border-radius: 6px; margin-bottom: 10px;">
        <strong>{{ $alimento->nome }}</strong><br>
        Quantidade: {{ $alimento->quantidade }}
        @if($alimento->quantidade <= 3)
            <span style="color: red;">(Estoque baixo!)</span>
        @endif
        <br>
        Validade: {{ $alimento->validade ?? 'Sem validade' }}<br>
        Categoria: {{ $alimento->categoria ?? 'Sem categoria' }}

        <div style="margin-top: 10px;">
            <a href="{{ route('alimentos.edit', $alimento) }}"
               style="padding: 6px 10px; background-color: #007bff; color: white; text-decoration: none; border-radius: 4px;">
                ✏️ Editar
            </a>

            <form action="{{ route('alimentos.destroy', $alimento) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit"
                        style="padding: 6px 10px; background-color: #dc3545; color: white; border: none; border-radius: 4px; cursor: pointer;">
                    🗑️ Excluir
                </button>
            </form>
        </div>
    </li>
@endforeach
</ul>
@endsection
