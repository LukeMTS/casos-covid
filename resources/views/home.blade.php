@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="d-flex align-items-center vh-100 flex-lg-row flex-column justify-content-center">

        <div class="text-center">
            <a class="mx-md-4" href="{{ route('dashboard', 'australia') }}">
                <img class="circle australia" src="/images/australia.jpg" alt="Imagem do Australia" />
            </a>
            <a class="mx-md-4" href="{{ route('dashboard', 'brazil') }}">
                <img class="circle brazil" src="/images/brazil.jpg" alt="Imagem da Brasil" />
            </a>
            <a class="mx-md-4" href="{{ route('dashboard', 'canada') }}">
                <img class="circle canada" src="/images/canada.jpg" alt="Imagem do Canada" />
            </a>
        </div>

    </div>
@endsection

@section('styles')
    <style scoped>
        .australia:hover {
            border: 5px solid #103273;
        }

        .brazil:hover {
            border: 5px solid #179048;
        }

        .canada:hover {
            border: 5px solid #e82c1e;
        }

        .circle {
            height: 10rem;
            width: 10rem;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
@endsection
