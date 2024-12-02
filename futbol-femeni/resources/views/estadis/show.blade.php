@extends('layouts.app')
@section('title', "Pagina equip Femeni" )
@section('content')
<x-estadi
    :nom="$estadi['nom']"
    :ciutat="$estadi['ciutat']"
    :capacitat="$estadi['capacitat']"
    :equip="$estadi['equip']" />
@endsection