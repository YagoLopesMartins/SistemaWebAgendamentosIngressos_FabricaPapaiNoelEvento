<?php

use App\Http\Controllers\AgendamentoVisitacaoController;
use App\Http\Controllers\HorariosVisitacaoController;
use App\Models\HorariosVisitacao;
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

Route::get('agendamento/fabrica/qrcode',  [AgendamentoVisitacaoController::class, 'qrcode'  ]);
Route::post('agendamento/fabrica/create', [AgendamentoVisitacaoController::class, 'store'  ]);
Route::get('agendamento/fabrica',         [AgendamentoVisitacaoController::class, 'index'  ]);

Route::get('horarios',                    [HorariosVisitacaoController::class, 'index'  ]);

Route::get('listagem',                    [AgendamentoVisitacaoController::class, 'listagem']);
Route::get('listagem/inscritos/{id}',     [AgendamentoVisitacaoController::class, 'listagemInscritos']);
Route::get('pdf/{id}',                    [AgendamentoVisitacaoController::class, 'listagemPDF']);

