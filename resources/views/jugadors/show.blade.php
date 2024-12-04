@extends('layouts.app')
@section('title', "Pagina equip Femeni" )
@section('content')
<x-jugador
    :nom="$jugadora['nom']"
    :equip="$jugadora['equip']"
    :posicio="$jugadora['posicio']" />
@endsection