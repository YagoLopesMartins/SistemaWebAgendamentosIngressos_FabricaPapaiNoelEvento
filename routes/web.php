<?php

use App\Http\Controllers\AgendamentoVisitacaoController;
use App\Http\Controllers\HorariosVisitacaoController;
use Illuminate\Support\Facades\Route;

Route::get('agendamento/fabrica/qrcode',  [AgendamentoVisitacaoController::class, 'qrcode'  ]);
Route::post('agendamento/fabrica/create', [AgendamentoVisitacaoController::class, 'store'  ]);
Route::get('agendamento/fabrica',         [AgendamentoVisitacaoController::class, 'index'  ]);

Route::get('horarios',                    [HorariosVisitacaoController::class, 'index'  ]);

Route::get('listagem',                    [AgendamentoVisitacaoController::class, 'listagem']);
Route::get('listagem/inscritos/{id}',     [AgendamentoVisitacaoController::class, 'listagemInscritos']);
Route::get('pdf/{id}',                    [AgendamentoVisitacaoController::class, 'listagemPDF']);

Route::get('/', function () {
    return 'Hello World';
});

