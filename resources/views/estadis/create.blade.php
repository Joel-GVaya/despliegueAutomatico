@extends('layouts.app')

@section('title', "Guia d'Equips")

@section('content')
<div class="container">
    <h1>Formulari: Afegir un Estadi</h1>

    <form action="">
        @csrf

        <div class="form-group">
            <label for="nom_estadi">Nom de l'Estadi</label>
            <input type="text" id="nom_estadi" name="nom_estadi" class="form-control" placeholder="Introdueix el nom de l'estadi" required>
        </div>

        <div class="form-group">
            <label for="ciutat">Ciutat</label>
            <input type="text" id="ciutat" name="ciutat" class="form-control" placeholder="Introdueix la ciutat" required>
        </div>


        <div class="form-group">
            <label for="capacitat">Capacitat</label>
            <input type="number" id="capacitat" name="capacitat" class="form-control" placeholder="Introdueix la capacitat" required>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Desar</button>
    </form>
</div>
@endsection