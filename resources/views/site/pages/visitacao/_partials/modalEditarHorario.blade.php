<div class="modal fade modal-slide-in-right" aria-hidden="true"
    role="dialog" tabindex="-1" id="modal-edit-{{$heav->id}}">

    <form action="/visitacoes/editar/{{$heav->id}}" method="POST">
        @csrf
        @method('PUT')
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Editar Horário</h4>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group">
                                    <label>Data</label>
                                    <input type="date" name="horario_visitacao_espacos_data" 
                                    class="form-control" placeholder="Nome:" 
                                    value="{{ $heav->horario_visitacao_espacos_data ?? old('horario_visitacao_espacos_data') }}">
                                </div>
                                <div class="form-group">
                                    <label>Hora Inicio:</label>
                                    <input type="text" name="horario_visitacao_espacos_hora_inicio" class="form-control" placeholder="Nome:" 
                                    value="{{ $heav->horario_visitacao_espacos_hora_inicio ?? old('horario_visitacao_espacos_hora_inicio') }}">
                                </div>
                                <div class="form-group">
                                    <label>Hora Fim:</label>
                                    <input type="text" name="horario_visitacao_espacos_hora_fim" class="form-control" placeholder="Nome:" 
                                    value="{{ $heav->horario_visitacao_espacos_hora_fim ?? old('horario_visitacao_espacos_hora_fim') }}">
                                </div>
                                <div class="form-group">
                                    <label>Vagas:</label>
                                    <input type="text" name="horario_visitacao_espacos_numero_vagas" class="form-control" placeholder="Nome:" 
                                    value="{{ $heav->horario_visitacao_espacos_numero_vagas ?? old('horario_visitacao_espacos_numero_vagas') }}">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-8">
                                    <label>Observacoes:</label>
                                    <textarea
                                        name="horario_visitacao_espacos_observacoes" rows="8" cols="3"
                                        class="form-control" placeholder="Nome:" 
                                        value="">
                                        {{ $heav->horario_visitacao_espacos_observacoes ?? old('horario_visitacao_espacos_observacoes') }}
                                    </textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">Confirmar</button>
                        </div>
                    </div>
                </div>
    </form>
</div>