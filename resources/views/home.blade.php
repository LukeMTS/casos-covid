@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <div class="align-center">
        <div class="row text-center">
            <div class="col-12 col-md-12 mb-4">
                <h3>Selecione um país</h3>
            </div>
        </div>
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-2 mt-4 text-center">
                <a class="mx-md-4" href="{{ route('dashboard', 'australia') }}">
                    <img class="circle australia" src="/images/australia.jpg" alt="Imagem do Australia" />
                </a>
            </div>
            <div class="col-12 col-md-2 mt-4 text-center">
                <a class="mx-md-4" href="{{ route('dashboard', 'brazil') }}">
                    <img class="circle brazil" src="/images/brazil.jpg" alt="Imagem da Brasil" />
                </a>
            </div>
            <div class="col-12 col-md-2 mt-4 text-center">
                <a class="mx-md-4" href="{{ route('dashboard', 'canada') }}">
                    <img class="circle canada" src="/images/canada.jpg" alt="Imagem do Canada" />
                </a>
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="col-12 col-md-12">
                <h3>Ou compare 2 países</h3>
            </div>
            <div class="col-12 col-md-12 mt-3">
                <a href="{{ route('compare') }}" class="btn btn-primary">Comparar ></a>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style scoped>
        .align-center {
            height: 100%;
            margin-top: 20%;
        }

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
