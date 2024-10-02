<?php

namespace Database\Seeders;

use App\Models\HorariosVisitacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HorarioVisitacaoSeeder extends Seeder
{
    public function run(): void
    {
        HorariosVisitacao::factory()->count(10)->create();
    }

}
