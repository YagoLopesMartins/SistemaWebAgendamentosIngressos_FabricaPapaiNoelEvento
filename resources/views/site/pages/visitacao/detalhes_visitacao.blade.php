@extends('adminlte::page')

@section('title', 'Visitação')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="visitacoes" class="active">Visitação</a></li>
    </ol>
   
@stop

@section('content')

<div class="card">
    <div class="card-header">
        <h5>LISTA DE AGENDADOS</h5>
        <strong>ESPAÇO:</strong> {{ $horario_espaco_agendado_visitacao->espaco_id }} <br/>
        <strong>DATA:</strong>{{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_data }}<br/>
        <strong>HORÁRIO:</strong>
            {{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_hora_inicio }} 
            às {{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_hora_fim }}<br/>
        <strong>VAGAS CADASTRADAS:</strong> {{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_numero_vagas }}<br/>
        <strong>VAGAS OCUPADAS:</strong>{{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_numero_vagas }}<br/>
        <strong>VAGAS DISPONÍVEIS:</strong> {{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_numero_vagas }}<br/>
        <strong>OBSERVAÇÃO:</strong> {{ $horario_espaco_agendado_visitacao->horario_visitacao_espacos_observacoes }}<br/>
    </div>
    <div class="card-header">
        <form action="visitacoes/search" method="POST" class="form form-inline">
            @csrf
            <input type="text" name="filter" 
                    placeholder="" class="form-control" 
                    value="{{ $filters['filter'] ?? '' }}">
            <button type="submit" 
                    class="btn btn-dark">Pesquisar
            </button>
            <a href="#" >
                <i class="fas fa-plus-square"></i> 
                Imprimir
            </a>
        </form>
    </div>
        
        <div class="card-body">
            @include('admin.includes.alerts')
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Documento</th>
                        <th>Contato</th>
                        <th>Deficiencia</th>
                        <th>Presença</th>
                        <th width="270">Ações</th>
                    </tr>
                </thead>
                <tbody>
             
                    @foreach ($visitacao as $visita)
                        <tr>
                            <td>
                                {{ $visita->nome_completo }}
                            </td>
                            <td>
                                {{ $visita->cpf }}
                            </td>
                            <td>
                                {{ $visita->contato }}
                            </td>
                            <td>
                                {{ $visita->deficiente }}
                            </td>
                            <td>
                                {{ $visita->presenca }}
                            </td>
                            
                            <td style="width: 10px;">
                                {{-- <a href="/visitacoes/{{$visitacoes->visitante_espaco_id }}/edit" class="btn btn-info" title="Editar">Editar</a> --}}
                                {{-- <a href="visitacoes/{{$visitacoes->visitante_espaco_id }}" class="btn btn-warning" title="Visualizar">Visualizar</a> --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
                {{-- {!! $visitacoes->links("pagination::bootstrap-4") !!} --}}
        </div>
    </div>
@stop
