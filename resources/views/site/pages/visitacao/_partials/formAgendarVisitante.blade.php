<div class="row">
    <div class="row">
        <div class="form-group">
            <label>Naturalidade:</label>
            <select class="" 
                name="naturalidade" placeholder="Naturalidade"
                id="naturalidade" required>
                <option value="Brasileiro">Brasileiro</option>
                <option value="Estrangeiro">Sou Estrangeiro</option>
            </select> 
        </div>
    </div>
    <div class="form-group" id="div_passaporte" style="display: none;">
        {{-- <label>Passaporte:</label> --}}
        <input type="text" name="passaporte" id="passaporte" 
                class="d-none form-control" placeholder="Passaporte"
            {{-- value="{{ $espacos->passaporte ?? old('passaporte') }}" --}}
             value="{{ old('passaporte') }}"
            >
    </div>
    <div class="form-group">
        {{-- <label>Cpf:</label> --}}
        <input type="text" name="cpf" id="cpf"
                class="form-control" placeholder="CPF" required
            {{-- value="{{ $espacos->cpf ?? old('cpf') }}" --}}
              value="{{ old('cpf') }}"
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
                <option value="Não">Não</option>
                <option value="Sim">Sim</option>
            </select> 
        </div>
    </div>
    <div class="form-group" style="display: none;" id="div_tipo_deficiencia">
        <label>Informe o tipo de deficiencia:</label>
        <input type="text" name="nome_deficiencia" id="nome_deficiencia"
            class="form-control" placeholder="Nome deficiencia" 
            {{-- value="{{ $espacos->nome_deficiencia ?? old('nome_deficiencia') }}" --}}
             value="{{ old('nome_deficiencia') }}"
            >
    </div>
</div>
<div class="form-group">
    <label>Selecione um espaço</label>
    <select class="form-control" name="espaco_id" id="espaco_id">
        {{-- <option value=""> -- Selecione --</option> --}}
           @foreach($espacos as $espaco)
                <option value="{{ $espaco->espaco_id ?? old('espaco_id') }}">
                    {{$espaco->espaco_nome}}
                </option>
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

<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script>
    $(document).ready(() => {
        const cpf = $('#cpf')
                $('#naturalidade').change(() => {
					const selectSelecionado = $('#naturalidade').children('option:selected').val()
					if(selectSelecionado === 'Estrangeiro'){
						cpf.addClass('d-none');
						$('#passaporte').removeClass('d-none')
                        $('#div_passaporte').css("display", "block")
					}else{
						cpf.removeClass('d-none');
						$('#passaporte').addClass('d-none')
					}
				})
				$('#deficiente').change(() => {
					const selectSelecionado = $('#deficiente').children('option:selected').val()
					if(selectSelecionado === 'Não'){
						$('#nome_deficiencia').addClass('d-none')
					}else{
                        $('#nome_deficiencia').removeClass('d-none')
                        $('#div_tipo_deficiencia').css("display", "block")
					}
				})             
    })
</script>