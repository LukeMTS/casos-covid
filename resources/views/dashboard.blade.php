@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="d-flex align-items-center vh-100 flex-lg-row flex-column justify-content-center">
        <div class="mx-4">
            <a href="{{ route('dashboard', 'australia') }}">
                <img class="rounded-2" src="/images/australia.jpg" alt="Imagem do Brasil" />
            </a>
        </div>
        <div class="mx-4">
            <a href="{{ route('dashboard', 'brazil') }}">
                <img class="rounded-2" src="/images/brazil.jpg" alt="Imagem da Australia" />
            </a>
        </div>
        <div class="mx-4">
            <a href="{{ route('dashboard', 'canada') }}">
                <img class="rounded-2" src="/images/canada.jpg" alt="Imagem do Canada" />
            </a>
        </div>
    </div>
@endsection

@section('styles')
    <style scoped>
        img {
            width: 300px;
            height: 200px;
        }

        img:hover {
            border: 5px solid #198754;
        }
    </style>
@endsection
