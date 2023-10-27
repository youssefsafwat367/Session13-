@extends('layouts.header')
@section('title', 'Branches')
@section('content')

    <body>
        @include('layouts.start_header')
        @include('layouts.nav')
        @include('layouts.nav_side')
        @include('layouts.cart')
    @section('content')

    @include('layouts.footer')
    @endsection
