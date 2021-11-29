@extends('adminlte::page')

@section('title', 'Cadastrar Visitante ao espaço')

@section('content_header')
    <h1>Agendamento visitante ao espaço</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/visitacoes" class="form" method="POST">
                @csrf
                @include('site.pages.visitacao._partials.formAgendarVisitante')
            </form>
        </div>
    </div>
@endsection
