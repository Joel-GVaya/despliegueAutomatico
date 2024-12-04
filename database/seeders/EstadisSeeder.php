<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('estadis')->insert([
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
        ]);
    }
}
