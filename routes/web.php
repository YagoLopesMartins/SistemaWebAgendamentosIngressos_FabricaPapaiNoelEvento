<?php

use App\Http\Controllers\AgendamentoVisitacaoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('agendamento/fabrica/create/visitante',   [AgendamentoVisitacaoController::class, 'create' ]);
// Route::put('agendamento/fabrica/{id}',               [AgendamentoVisitacaoController::class, 'update' ]);
// Route::get('agendamento/fabrica/{id}/edit',          [AgendamentoVisitacaoController::class, 'edit'   ]);
// Route::any('agendamento/fabrica',                    [AgendamentoVisitacaoController::class, 'search' ]);
// Route::delete('agendamento/fabrica/{id}',            [AgendamentoVisitacaoController::class, 'destroy']);
// Route::get('agendamento/fabrica/{id}',               [AgendamentoVisitacaoController::class, 'show'   ]);
Route::post('agendamento/fabrica/create',            [AgendamentoVisitacaoController::class, 'store'  ]);
Route::get('agendamento/fabrica',                    [AgendamentoVisitacaoController::class, 'index'  ]);
// Route::put('agendamento/fabrica/editar/{idHorario}',     [AgendamentoVisitacaoController::class, 'updateHorario' ]);
// Route::delete('agendamento/fabrica/excluir/{idHorario}', [AgendamentoVisitacaoController::class, 'destroyHorario']);
// Route::post('agendamento/fabrica/create/horario',        [AgendamentoVisitacaoController::class, 'storeHorario']);
// Route::get('agendamento/fabrica/listar/{idHorario}',     [AgendamentoVisitacaoController::class, 'detalhesVisitacao']);
// Route::get('agendamento/fabrica/editar/{idHorario}',     [AgendamentoVisitacaoController::class, 'editar']);

Route::get('/', function () {
    return view('welcome');
});
