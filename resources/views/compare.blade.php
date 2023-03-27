@extends('layouts.app')

@section('title')
    Comparar países
@endsection

@section('content')
    <div class="row justify-content-center text-end mb-4">
        <div class="col-12">
            <a class="btn btn-secondary" href="{{ route('home') }}">Voltar</a>
        </div>
    </div>
    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-10">
            <compare-table countries="{{ json_encode($data) }}" />
        </div>
    </div>
@endsection
