<div class="card">
    <div class="card-body">
        {{-- <form action="/visitacoes/create/horario" class="form" method="POST">
            @csrf --}}
            <div class="row">
                <div class="form-group">
                    <label>Data</label>
                    <input type="date" name="horario_visitacao_espacos_data" 
                        class="form-control" placeholder="Informe a data" 
                    value="{{  old('horario_visitacao_espacos_data') }}" required>
                </div>
                <div class="form-group">
                    <label>Hora Inicio:</label>
                    <input type="text" name="horario_visitacao_espacos_hora_inicio" 
                    class="form-control" placeholder="Ex.: 10:00" 
                    value="{{ old('horario_visitacao_espacos_hora_inicio') }}" required>
                </div>
                <div class="form-group">
                    <label>Hora Fim:</label>
                    <input type="text" name="horario_visitacao_espacos_hora_fim" 
                    class="form-control" placeholder="Ex.: 10:00" 
                    value="{{ old('horario_visitacao_espacos_hora_fim') }}" required>
                </div>
                <div class="form-group">
                    <label>Vagas:</label>
                    <input type="number" name="horario_visitacao_espacos_numero_vagas" 
                    class="form-control" placeholder="Ex.: 25" 
                    value="{{ old('horario_visitacao_espacos_numero_vagas') }}" required>
                </div>
            </div>
            
            <div class="row">
                <div class="form-group">
                    <label>Observacoes:</label>
                    <textarea type="text" name="horario_visitacao_espacos_observacoes" 
                        class="form-control" placeholder="Nome:" cols="8" rows="4">
                        {{ old('horario_visitacao_espacos_observacoes') }}
                </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Inserir Horário</button>
                </div>
            </div>
        </form>
    </div>
</div>
