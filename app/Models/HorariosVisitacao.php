<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HorariosVisitacao extends Model
{
    protected $table = 'horarios_visitacaos';
    protected $primaryKey = 'id';
    protected $guarded = [];

    public $timestamps = true;

    protected $fillable = [
             'horario_visitacao_data', 
             'horario_visitacao_hora_chegada_estacao', 
             'horario_visitacao_hora_inicio', 
             'horario_visitacao_hora_fim',
             'horario_visitacao_numero_vagas',
             'horario_visitacao_observacoes'
    ];
}
