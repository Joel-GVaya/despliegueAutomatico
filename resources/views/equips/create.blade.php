@extends('layouts.app')
@section('title', "Pagina equip Femeni" )
@section('content')
<form action="{{ route('equips.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
    @csrf
    <div class="mb-4">
        <label for="nom" class="block text-sm font-medium text-gray-700 mb-1">Nom:</label>
        <input type="text" name="nom" id="nom" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="titols" class="block text-sm font-medium text-gray-700 mb-1">Títols:</label>
        <input type="number" name="titols" id="titols" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <div class="mb-4">
        <label for="estadi_id" class="block text-sm font-medium text-gray-700 mb-1">Estadi:</label>
        <select name="estadi_id" id="estadi_id" required
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
            @foreach ($estadis as $estadi)
            <option value="{{ $estadi->id }}">{{ $estadi->nom }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-4">
        <label for="escut" class="block text-sm font-medium text-gray-700 mb-1">Escut:</label>
        <input type="file" name="escut" id="escut"
            class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
    </div>

    <button type="submit"
        class="w-full bg-blue-500 text-white font-medium py-2 px-4 rounded-lg shadow hover:bg-blue-600 focus:ring focus:ring-blue-300">
        Crear Equip
    </button>
</form>
@endsection