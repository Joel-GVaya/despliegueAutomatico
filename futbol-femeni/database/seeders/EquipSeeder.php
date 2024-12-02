<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Estadi;

class EquipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $estadi = Estadi::where('nom', 'Camp Nou')->first();
        $estadi->equips()->create([
            'nom' => 'Barça Femení',
            'titols' => 30,
        ]);
        $estadi = Estadi::where('nom', 'Wanda Metropolitano')->first();
        $estadi->equips()->create([
            'nom' => 'Atlètic de Madrid',
            'titols' => 10,
        ]);
        $estadi = Estadi::where('nom', 'Santiago Bernabéu')->first();
        $estadi->equips()->create([
            'nom' => 'Real Madrid Femení',
            'titols' => 5,
        ]);
    }
}
