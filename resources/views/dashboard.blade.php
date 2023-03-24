@extends('layouts.app')

@section('title')
    Stats
@endsection

@section('content')
    <states-table prop-data="{{ $data }}" />
@endsection
