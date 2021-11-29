<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendamentoVisitacao;
use App\Models\AgendamentoVisitacao;
use App\Models\HorariosVisitacao;
use Illuminate\Support\Str;
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

       // $lista_horarios = $this->repository->all();

       // $horarios_visitacao = $this->horarios_visitacao->all();
            return view('site.pages.visitacao.index', 
                 compact('horarios_visitacao'));    
    }
    // public function store(Request $request)
    public function store(StoreUpdateAgendamentoVisitacao $request)
    {
        $data = [];
        $data = $request->all();
     
        $horario_id = $data["horario_visitacao_id"];
        //dd($horario_id);
        $nome = $data["nome_completo"];
        $cpf = $data["cpf"];
        $passaporte = $data["passaporte"];

        $code = $horario_id.$cpf.$nome;
        
        // cadastro
        $visitante_cadastrato = $this->repository->create($data);

        // diminuir no banco coluna vagas
        $row = HorariosVisitacao::where('id', $horario_id)->first();
        HorariosVisitacao::where('id', $horario_id)->update([
            'horario_visitacao_numero_vagas' => $row->horario_visitacao_numero_vagas - 1
        ]);

        $lista_horarios = $this->repository->all();
    
        // gerar qr-code
        return view('site.pages.visitacao.qrcode', 
            compact('visitante_cadastrato', 'code', 'row'));
    }
}
