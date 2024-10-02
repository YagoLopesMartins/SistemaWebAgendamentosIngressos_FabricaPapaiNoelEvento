
@extends('adminlte::page')

@section('title', 'Fábrica do Papai Noel 2021')

@section('content_header')
<h1>Inscritos para a Fabrica do Papai Noel -
  Dia:  <b>{{$horario->horario_visitacao_data}}</b>  -
    Hora: <b>{{$horario->horario_visitacao_hora_inicio}}</b> </h1>
@stop

@section('content')

<button>
    <a href="/pdf/{{$horario->id}}" target="_blank" rel="noopener noreferrer">
        <i class="fas fa-plus-square"></i>
        Imprimir
    </a>
</button>
<h1>Inscritos</h1>
    <!---->
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>INSCRITO</th>
                <th>DEPENDENTE</th>
                <th>DEPENDENTE</th>
                <th>VISITOU</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($visitantes_inscritos_horario as $inscritos)
                <tr>
                    <td>{{ $inscritos->id }}</td>
                    <td>{{ $inscritos->nome_completo }}</td>
                    <td><b>{{ $inscritos->dependente_nome ?? '-' }}</b></td>
                    <td>{{ $inscritos->dependente2_nome ?? '-' }}</td>
                    <td><b>{{ $inscritos->visitou ?? '-'}}</b></td>
                </tr>
            @empty
                <li>Nenhum Inscrito Cadastrado.</li>
            @endforelse
        </tbody>
    </table>
</div>
@stop
