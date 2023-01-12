@extends('layouts/layout')

@section('title')
    <title>About</title>
@endsection

@section('content')
    
<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">About</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">About</a></li>
                    <li class="breadcrumb-item"><a href="">Services</a></li>
                    <li class="breadcrumb-item"><a href="">Contact</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    @include('components/about')

    @include('components/facts')

    @include('components/team')
@endsection