@extends('layouts.app')

@section('title')
    Stats
@endsection

@section('content')
    <states-table data="{{ $data }}" />
@endsection
