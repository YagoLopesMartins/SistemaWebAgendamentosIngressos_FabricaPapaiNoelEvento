<!---->
<div class="card-body">
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>#</th>
                <th>HORA INÍCIO</th>
                <th>HORA FIM</th>
                <th>VAGAS</th>
                <th>VAGAS DISPONÍVEIS</th>
                <th width="270">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($horario_espaco_agendado_visitacao as $heav)
                <tr>
                    <td>{{ $heav->id }}</td>
                    {{-- <td>{{ date('d-m-Y', strtotime($heav->horario_visitacao_espacos_data)) }}</td> --}}
                    <td>{{ $heav->horario_visitacao_espacos_hora_inicio }}</td>
                    <td>{{ $heav->horario_visitacao_espacos_hora_fim }}</td>
                    <td>{{ $heav->horario_visitacao_espacos_numero_vagas }}</td>
                    <td>{{ $heav->horario_visitacao_espacos_numero_vagas }}</td>
                    <td style="width=10px;">
                        <a href="/visitacoes/listar/{{$heav->id}}" class="btn btn-info" title="Listar">
                            <i class="fas fa-list"></i>
                        </a>
                        <a href="" data-target="#modal-edit-{{$heav->id}}" data-toggle="modal" class="btn btn-warning" title="Editar">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="" data-target="#modal-delete-{{$heav->id}}" data-toggle="modal" class="btn btn-warning" title="Excluir">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                    @include('site.pages.visitacao._partials.modalExcluirHorario')
                    @include('site.pages.visitacao._partials.modalEditarHorario')
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
<!---->
