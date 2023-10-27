@extends('adminlte::page')
@section('title', 'Booking')
@section('content')
    @if (session('success') != null)
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('danger') != null)
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
    @endif

@endsection
