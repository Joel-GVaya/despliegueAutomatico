<?php

namespace App\Http\Controllers;

use App\Models\Estadi;
use Illuminate\Http\Request;
use App\Models\Equip;
class EquipController extends Controller
{

    public function index() {
        $equips = Equip::all();
        return view('equips.index', compact('equips'));
    }
   
    public function show(Equip $equip) {
        return view('equips.show', compact('equip'));
    }
   
    public function create() {
        $estadis = Estadi::all();
        return view('equips.create', compact('estadis'));
    }
   
    public function edit(Equip $equip) {
        $estadis = Estadi::all();
        return view('equips.edit', compact('equip', 'estadis'));
    }
   
    public function destroy(Equip $equip) {
        $equip->delete();
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
        Equip::create($validated);
        return redirect()->route('equips.index')->with('success', 'Equip creat correctament!');
    }

    public function update(Request $request, $id) {
        $validated = $request->validate([
            'nom' => 'required|unique:equips,nom,'.$id,
            'estadi_id' => 'required|exists:estadis,id',
            'titols' => 'integer|min:0',
        ]);
        $equip = Equip::findOrFail($id);
        $equip->update($validated);
        return redirect()->route('equips.index')->with('success', 'Equip actualitzat correctament!');
    }
}
