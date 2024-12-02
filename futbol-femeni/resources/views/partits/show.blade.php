@extends('layouts.app')
@section('title', "Pagina equip Femeni" )
@section('content')
<x-partit
    :local="$partit['local']"
    :visitant="$partit['visitant']"
    :data="$partit['data']"
    :resultat="$partit['resultat']" />
@endsection