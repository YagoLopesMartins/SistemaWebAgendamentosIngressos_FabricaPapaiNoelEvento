<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendamentoVisitacao;
use App\Models\AgendamentoVisitacao;
use App\Models\HorariosVisitacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoVisitacaoController extends Controller
{
    private $repository, $horarios_visitacao;

    public function __construct(AgendamentoVisitacao $agendamentoVisitacao, 
                HorariosVisitacao $horarios_visitacao)
    {
        $this->repository = $agendamentoVisitacao;
        $this->horarios_visitacao = $horarios_visitacao;
    }
    public function index()
    {
        $horarios_visitacao = DB::table("horarios_visitacaos")
        ->where("horario_visitacao_numero_vagas", ">", 0)
        ->get();

       // $horarios_visitacao = $this->horarios_visitacao->all();
            return view('site.pages.visitacao.index', 
                 compact('horarios_visitacao'));    
    }
    // public function store(Request $request)
    public function store(StoreUpdateAgendamentoVisitacao $request)
    {
        dd($request->all());
        $this->repository->create($request->all());
        // gerar qr-code
        return redirect('visitacoes')
            ->withSuccess('Visitante cadastrado com sucesso!');
    }
}
