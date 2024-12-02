<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadi;

class EstadiController extends Controller
{

    protected $estadiosFutbolFemeni = [
        [
        'nom' => 'Estadi Johan Cruyff',
        'ciutat' => 'Sant Joan Despí',
        'capacitat' => 6000,
        'equip' => 'FC Barcelona Femení'
        ],
        [
        'nom' => 'Centro Deportivo Wanda Alcalá de Henares',
        'ciutat' => 'Alcalá de Henares',
        'capacitat' => 2800,
        'equip' => 'Atlètic de Madrid Femení'
        ],
        [
        'nom' => 'Estadio Alfredo Di Stéfano',
        'ciutat' => 'Madrid',
        'capacitat' => 6000,
        'equip' => 'Real Madrid Femení'
        ]
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estadiosFutbolFemeni = $this->estadiosFutbolFemeni;
        return view('estadis.index', compact('estadiosFutbolFemeni'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('equips.create');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id) {
        $estadiosFutbolFemeni = $this->estadiosFutbolFemeni;
        $estadi = $this->estadiosFutbolFemeni[$id];
        return view('estadis.show', compact('estadi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
   
    public function edit(Estadi $estadi) {
        return view('equips.edit', compact('estadi'));
    }
   
    public function destroy(Estadi $estadi) {
        $estadi->delete();
        return redirect()->route('equips.index')->with('success', 'Equip esborrat correctament!');
    } 

    public function store(Request $request) {
        $validated = $request->validate([
            'nom' => 'required|unique:equips',
            'estadi_id' => 'required|exists:estadis,id',
            'titols' => 'integer|min:0',
        ]);
        /*$equip = new Equip();
        $equip->nom = $request->nom;
        $equip->estadi_id = $request->estadi_id;
        $equip->titols = $request->titols;
        $equip->save();*/
        Estadi::create($validated);
        return redirect()->route('equips.index')->with('success', 'Equip creat correctament!');
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nom' => 'required|unique:equips,nom,'.$id,
            'estadi_id' => 'required|exists:estadis,id',
            'titols' => 'integer|min:0',
        ]);
        $estadi = Estadi::findOrFail($id);
        $estadi->update($validated);
        return redirect()->route('equips.index')->with('success', 'Equip actualitzat correctament!');
    }
}
