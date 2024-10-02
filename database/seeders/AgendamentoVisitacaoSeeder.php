<?php

namespace Database\Seeders;

use App\Models\AgendamentoVisitacao;
use Illuminate\Database\Seeder;

class AgendamentoVisitacaoSeeder extends Seeder
{
    public function run(): void
    {
        AgendamentoVisitacao::factory()->count(10)->create();
    }
}
