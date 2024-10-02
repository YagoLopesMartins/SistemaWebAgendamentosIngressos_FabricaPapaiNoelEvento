<?php

namespace Database\Factories;


use App\Models\HorariosVisitacao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;


class HorariosVisitacaoFactory extends  Factory
{
    protected $model = HorariosVisitacao::class;
    public function definition(): array
    {
        // Define uma data de visitação
        $dataVisitacao = $this->faker->dateTimeBetween('now', '+1 year')->format('d/m/Y');

        // Define a hora de início da visitação (exemplo: 19:30)
        $horaInicio = Carbon::createFromFormat('H:i', $this->faker->time('H:i'));

        // Define a hora de chegada à estação, 20 minutos antes da hora de início
        $horaChegadaEstacao = $horaInicio->copy()->subMinutes(20)->format('H:i');

        // Define a hora de fim da visitação, 15 minutos após a hora de início
        $horaFim = $horaInicio->copy()->addMinutes(15)->format('H:i');
        return [
            'horario_visitacao_data' => $dataVisitacao,  // Exemplo: 28/09/2024
            'horario_visitacao_hora_chegada_estacao' => $horaChegadaEstacao,  // Exemplo: 19:10
            'horario_visitacao_hora_inicio' => $horaInicio->format('H:i'),  // Exemplo: 19:30
            'horario_visitacao_hora_fim' => $horaFim,  // Exemplo: 19:45
            'horario_visitacao_numero_vagas' => $this->faker->numberBetween(1, 100),
            'horario_visitacao_espacos_observacoes' => $this->faker->sentence(),
        ];
    }
}
