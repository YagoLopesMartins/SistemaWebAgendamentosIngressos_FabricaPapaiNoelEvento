<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAgendamentoVisitacao;
use App\Models\AgendamentoVisitacao;
use App\Models\HorariosVisitacao;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgendamentoVisitacaoController extends Controller
{
    private $repository, $horarios_visitacao;

    public function __construct(
                AgendamentoVisitacao $agendamentoVisitacao, 
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
        $n = 1;
        if($request->dependente_nome){
            $n++;
        }
        if($request->dependente2_nome){
            $n++;
        }

        $data = [];
        $data = $request->all();
        //dd($data);
     
        $horario_id = $data["horario_visitacao_id"];
        //dd($horario_id);
        $nome = $data["nome_completo"];
        $cpf = $data["cpf"];
        
        $code = $horario_id.$cpf.$nome;
        // cadastro
        $visitante_cadastrato = $this->repository->create($data);

        // diminuir no banco coluna vagas
        $row = HorariosVisitacao::where('id', $horario_id)->first();
        HorariosVisitacao::where('id', $horario_id)->update([
            'horario_visitacao_numero_vagas' => $row->horario_visitacao_numero_vagas - $n
        ]);

        $lista_horarios = $this->repository->all();
    
        // gerar qr-code
        return view('site.pages.visitacao.qrcode', 
            compact('visitante_cadastrato', 'code', 'row'));
    }

    public function listagem(){

        $visitantes = $this->repository->all();
        $horarios = $this->horarios_visitacao->all();

        return view('site.pages.visitacao.listagem',
            compact('visitantes', 'horarios'));
    }

    public function listagemInscritos($id){

        // verifica se horario existe
        // $horario = $this->horarios_visitacao->where('id', $id)->first();
        // if (!$horario){
        //     return redirect()->back();
        // }
        // busca na tabela visitantes cujo campo horario_visitacao_id seja igual id do horario
        $visitantes_inscritos_horario = 
                DB::table("agendamento_visitacaos")
                ->join("horarios_visitacaos", function($join){
                    $join->on("agendamento_visitacaos.horario_visitacao_id", "=", "horarios_visitacaos.id");
                })
                ->where("agendamento_visitacaos.horario_visitacao_id", "=", $id)
                ->get();

        return view('site.pages.visitacao.listagemInscritos',
            compact('visitantes_inscritos_horario'));

        // view()->share('listagemPDF', $visitantes_inscritos_horario);
        // $pdf = PDF::loadView('pdf_view', $visitantes_inscritos_horario);
        // return $pdf->download('pdf_file.pdf');
    }
    public function listagemPDF(){
        return PDF::loadView('site.pages.visitacao.listagemPDF')
             // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
             ->download('listagem-visitantes-fabrica.pdf');
    }
}
