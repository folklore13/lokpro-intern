@extends('layouts/layout')

@section('title')
    <title>About</title>
@endsection

@section('content')
    @include('components/page-header')

    @include('components/about')

    @include('components/facts')

    @include('components/team')
@endsection