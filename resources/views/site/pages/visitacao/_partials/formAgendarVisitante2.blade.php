<div class="row">
    <div class="row">
        <div class="form-group">
            <label>Naturalidade:</label>
            <select class="form-control" 
                name="naturalidade" placeholder="Naturalidade"
                id="naturalidade" required>
                <option value="Brasileiro">Brasileiro</option>
                <option value="Sou Extrangeiro">Sou Estrangeiro</option>
            </select> 
        </div>
    </div>
    <div class="form-group">
        <label>Cpf:</label>
        <input type="text" name="cpf" 
                class="form-control" placeholder="CPF" required
            {{-- value="{{ $espacos->cpf ?? old('cpf') }}" --}}
              value="{{ old('cpf') }}"
            >
    </div>
    <div class="form-group">
        <label>Passaporte:</label>
        <input type="text" name="passaporte" 
                class="form-control" placeholder="Passaporte"
            {{-- value="{{ $espacos->passaporte ?? old('passaporte') }}" --}}
             value="{{ old('passaporte') }}"
            >
    </div>
</div>
<div class="row">
    <div class="form-group">
        <label>Nome Completo:</label>
        <input type="text" name="nome_completo" 
            class="form-control" placeholder="Nome completo" required
            {{-- value="{{ $espacos->nome_completo ?? old('nome_completo') }}" --}}
            value="{{ old('nome_completo') }}"
            >
    </div>
    <div class="form-group">
        <label>Data nascimento:</label>
        <input type="date" name="data_nascimento" 
            class="form-control" placeholder="Data Nascimento" required
            {{-- value="{{ $espacos->data_nascimento ?? old('data_nascimento') }}" --}}
            value="{{ old('data_nascimento') }}"
            >
    </div>
</div>
<div class="row">
    <div class="form-group">
        <label>Contato:</label>
        <input type="text" name="contato" 
            class="form-control" placeholder="Contato" required
            {{-- value="{{ $espacos->contato ?? old('contato') }}" --}}
             value="{{ old('contato') }}"
            >
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" name="email" 
            class="form-control" placeholder="E-mail" required
            {{-- value="{{ $espacos->email ?? old('email') }}" --}}
            value="{{ old('email') }}"
            >
    </div>
</div>
<div class="row">
    <div class="row">
        <div class="form-group">
            <label>Você é pessoa com deficiência?:</label>
            <select class="form-control" 
                name="deficiente" id="deficiente" required>
                <option value="Sim">Sim</option>
                <option value="Não">Não</option>
            </select> 
        </div>
    </div>
    <div class="form-group">
        <label>Informe o tipo de deficiencia:</label>
        <input type="text" name="nome_deficiencia" 
            class="form-control" placeholder="Nome deficiencia" 
            {{-- value="{{ $espacos->nome_deficiencia ?? old('nome_deficiencia') }}" --}}
             value="{{ old('nome_deficiencia') }}"
            >
    </div>
</div>

<div class="form-group">
    <label>Selecione um espaço</label>
    <select class="form-control" name="espaco_id" id="">
        <option value=""> -- Selecione --</option>
           @foreach($espacos as $espaco)
            <option value="{{ $espaco->espaco_id ?? old('espaco_id') }}">
                {{$espaco->espaco_nome}}</option>
           @endforeach
    </select> 
</div>

<div class="row">
    <div class="form-group">
        <label>Escolha um dia</label>
        <input type="text" name="dia_visita" class="form-control" 
            placeholder="Ex.: seuemail@gmail.com" required
            {{-- value="{{ $espacos->dia_visita ?? old('dia_visita') }}" --}}
              value="{{ old('dia_visita') }}"
            >
    </div>
    <div class="form-group">
        <label>Agora escolha um horário para visitação</label>
        <input type="text" name="hora_visita" 
            class="form-control" placeholder="" required
            {{-- value="{{ $espacos->hora_visita ?? old('hora_visita') }}" --}}
            value="{{ old('hora_visita') }}"
            >
    </div>
</div>

<button type="submit" class="btn btn-fill btn-success">Agendar minha visita</button>
