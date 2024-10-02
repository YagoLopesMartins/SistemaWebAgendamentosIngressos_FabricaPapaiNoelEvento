<?php

namespace Database\Factories;


use App\Models\AgendamentoVisitacao;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AgendamentoVisitacaoFactory extends Factory
{
    protected $model = AgendamentoVisitacao::class;
    public function definition(): array
    {
        return [
            // Naturalidade pode ser 'Brasileiro' ou 'Sou Estrangeiro'
            'naturalidade' => $this->faker->randomElement(['Brasileiro', 'Sou Estrangeiro']),

            // CPF ou passaporte: se for brasileiro, usa CPF, se for estrangeiro, usa passaporte
            'cpf' => $this->faker->optional()->regexify('[A-Z0-9]{9}'), // Exemplo de passaporte
            'passaporte' => $this->faker->optional()->regexify('[A-Z0-9]{9}'), // Exemplo de passaporte

            // Informações pessoais
            'nome_completo' => $this->faker->name(),
            'data_nascimento' => $this->faker->date('Y-m-d'),
            'contato' => $this->faker->phoneNumber(),
            'email' => $this->faker->safeEmail(),

            // Deficiência: Sim ou Não
            'deficiente' => $this->faker->randomElement(['Sim', 'Não']),
            'nome_deficiencia' => $this->faker->optional()->word(), // Apenas se a pessoa for deficiente

            // Dependente 1
            'dependente_nome' => $this->faker->optional()->name(),
            'dependente_cpf' => $this->faker->optional()->regexify('[A-Z0-9]{9}'), // Exemplo de passaporte
            'dependente_data_nascimento' => $this->faker->optional()->date('Y-m-d'),

            // Dependente 2
            'dependente2_nome' => $this->faker->optional()->name(),
            'dependente2_cpf' => $this->faker->optional()->regexify('[A-Z0-9]{9}'), // Exemplo de passaporte
            'dependente2_data_nascimento' => $this->faker->optional()->date('Y-m-d'),

            // Horário da Visitação (deve referenciar um `horario_visitacao_id`)
            'horario_visitacao_id' => \App\Models\HorariosVisitacao::factory(),

            // QR Code e controle de entrada
            'qr_code' => Str::uuid()->toString(), // QR code simulado
            'estado' => 'Ativo', // Padrão como 'Ativo'
            'visitou' => $this->faker->optional()->randomElement(['Sim', 'Não']),
        ];
    }
}
