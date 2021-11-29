<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>QrCode</title>
</head>
<body>

    <h4>Parabéns, sua visita foi agendada</h4>
    <h3>COMPROVANTE DE AGENDAMENTO</h3>
    <h6>Atente-se as observações e leve este comprovante no dia da visita</h6>
    <h3>Informações da Visita</h3>
    {{-- <div style="text-align: center;" class="visible-print text-center"> --}}
        {{-- {!! QrCode::size(300)->generate(Request::url()); !!} --}}
        <img src="https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl='{{$code}}'">
        {{-- <p>Data: {{ $visitante_cadastrato->horarios->horario_visitacao_data }}</p>
        <p>Horário: {{ $visitante_cadastrato->horarios->horario_visitacao_hora_inicio }}</p> --}}
            
    {{-- </div> --}}

    <h3>Informações do Visitante</h3>
    <p>Documento: {{ $visitante_cadastrato->cpf  }}</p>
    <p>Nome: {{ $visitante_cadastrato->nome_completo  }}</p></p>
    <p>Contato: {{ $visitante_cadastrato->contato  }}</p></p>
    <p>Deficiência: {{ $visitante_cadastrato->deficiencia  }}</p></p>

    <h3>Observações Importantes</h3>
    <p>Uso obrigatório de máscara</p>
    <p>Apresentação do cartão de vacina</p>

    <button type="button" onclick="imprimir()">Salvar comprovante</button>

    <script>
        function imprimir(){
            window.print();
        }
    </script>

</body>
</html>
