	
@extends('adminlte::page')

@section('title', 'Fábrica do Papai Noel 2021')

@section('content_header')
<h1>Inscritos para a Fabrica do Papai Noel</h1>
@stop

@section('content')
        <a href="/pdf" target="_blank" rel="noopener noreferrer">Imprimir</a>
        <h1>Inscritos</h1>
        <ul>
            @forelse($visitantes_inscritos_horario as $inscritos)
                <li>{{ $inscritos->nome_completo }}</li>
            @empty
                <li>Nenhum Inscrito Cadastrado.</li>
            @endforelse
        </ul>
@stop