@extends('layouts.app')

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="row container text-end mb-4">
        <div class="col-12">
            <a class="btn btn-secondary" href="{{ route('home') }}">Voltar</a>
        </div>
    </div>
    <div class="row mb-4">
        <country-table prop-data="{{ json_encode($data) }}" />
    </div>
    <div class="row mb-4">
        <states-table prop-data="{{ json_encode($data) }}" />
    </div>
    <div class="row text-center mb-4">
        <div class="col-12">
            <h5>Último país consultado: <span class="text-uppercase">{{ $data['lastLog']->country }}</span></h5>
        </div>
        <div class="col-12">
            <h5>Último acesso à API: {{ $data['lastLog']->last_access->format('d/m/Y H:i:s') }}</h5>
        </div>
    </div>
@endsection
