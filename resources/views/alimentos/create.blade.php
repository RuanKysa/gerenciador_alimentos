@extends('layouts.app')

@section('content')
<h1 style="font-size: 24px; margin-bottom: 20px;">Adicionar Alimento</h1>

<form action="{{ route('alimentos.store') }}" method="POST" style="max-width: 400px; margin: 0 auto; background: #f8f8f8; padding: 20px; border-radius: 8px; box-shadow: 0 2px 6px rgba(0,0,0,0.1);">
    @csrf

    <label for="nome" style="display: block; margin-bottom: 5px;">Nome:</label>
    <input type="text" name="nome" placeholder="Ex: Maçã" required
           style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="quantidade" style="display: block; margin-bottom: 5px;">Quantidade:</label>
    <input type="number" name="quantidade" placeholder="Ex: 10" required
           style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="validade" style="display: block; margin-bottom: 5px;">Validade:</label>
    <input type="date" name="validade"
           style="width: 100%; padding: 8px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="categoria" style="display: block; margin-bottom: 5px;">Categoria:</label>
    <select name="categoria"
            style="width: 100%; padding: 8px; margin-bottom: 20px; border: 1px solid #ccc; border-radius: 4px;">
        <option value="">Selecione uma categoria</option>
        <option value="Frutas">Frutas</option>
        <option value="Legumes">Legumes</option>
        <option value="Carnes">Carnes</option>
        <option value="Outros">Outros</option>
    </select>

    <button type="submit"
            style="width: 100%; background-color: #28a745; color: white; padding: 10px; border: none; border-radius: 4px; font-weight: bold; cursor: pointer;">
        Salvar
    </button>
</form>
@endsection
