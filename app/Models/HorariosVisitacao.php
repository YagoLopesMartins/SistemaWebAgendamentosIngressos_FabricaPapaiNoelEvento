<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class HorariosVisitacao extends Model
{
    use HasFactory, Notifiable;

//    protected $table = 'horarios_visitacaos';
    protected $primaryKey = 'id';
    protected $guarded = [];
    public $timestamps = true;
    public function agendamento(){
        return $this->hashOne(AgendamentoVisitacao::class, 'id');
    }

    protected $fillable = [
             'horario_visitacao_data',
             'horario_visitacao_hora_chegada_estacao',
             'horario_visitacao_hora_inicio',
             'horario_visitacao_hora_fim',
             'horario_visitacao_numero_vagas',
             'horario_visitacao_observacoes'
    ];
}
