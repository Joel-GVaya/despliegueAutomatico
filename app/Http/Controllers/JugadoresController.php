<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JugadoresController extends Controller
{

    protected $jugadores = [
        ['nom' => 'Alexia Putellas', 'equip' => 'Barça Femení', 'posicio' => 'Migcampista'],
        ['nom' => 'Esther González', 'equip' => 'Atlètic de Madrid', 'posicio' => 'Davantera'],
        ['nom' => 'Misa Rodríguez', 'equip' => 'Real Madrid Femení', 'posicio' => 'Portera'],
    ];
    public function index() {
        $jugadores = $this->jugadores;
        return view('jugadors.index', compact('jugadores'));
    }

    public function show(string $id) {
        $jugadores = $this->jugadores;
        $jugadora = $this->jugadores[$id];
        return view('jugadors.show', compact('jugadora'));
    }
}
