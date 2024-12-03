@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<h1 class="text-3xl font-bold text-blue-800 mb-6">Llista d'Estadis</h1>
<table class="w-full border-collapse border border-gray-300">
    <thead class="bg-gray-200">
    <tr>
        <th class="border border-gray-300 p-2">Nom</th>
        <th class="border border-gray-300 p-2">Ciutat</th>
        <th class="border border-gray-300 p-2">Capacitat</th>
        <th class="border border-gray-300 p-2">Equip principal</th>
    </tr>
    </thead>
    <tbody>
    @foreach($estadiosFutbolFemeni as $key => $estadi)
    <tr class="hover:bg-gray-100">
        <td class="border border-gray-300 p-2">
            <a href="{{ route('estadis.show', $estadi) }}" class="text-blue-700 hover:underline">{{ $estadi->nom }}</a>
        </td>
        <td class="border border-gray-300 p-2">{{ $estadi['ciutat'] }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi['capacitat'] }}</td>
        <td class="border border-gray-300 p-2">{{ $estadi['equip'] }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection