@extends('layouts.user')

{{-- pembuka head --}} 

@section('css')
<link rel="stylesheet" href="{{ asset('css/landing.css')}}">
@endsection 

{{-- asset itu mendifinisikan folder public --}} 

@section('title', 'rehub - E-report Hub')

{{-- penutup head --}} 

{{-- pembuka body --}} 

{{-- section header --}} 
@section('content')
<section class="header">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <h4 class="semi-bold mb-0 text-dark">REHUB</h4>
                    <p class="italic" mt-0 text-white>E-Report Hub</p>
                </a> 

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarNav"
                aria-controls="navbarnav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                @if (Auth::guard('masyarakat')->check())
                    
                @endif
                    <ul class="navbar-nav text-center ml-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link ml-auto text-white">Report</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ml-auto text-white" style="text-decoration: underline">Masyarakat</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav text-center ml-auto">
                        <li  class="nav-item">
                            <button class="btn text-white btn-warning" type="button" class="btn" data-toggle="modal">
                                Login
                            </button>
                            <li class="nav-item">
                                <a href="#" class="btn btn-outline-purple">Register</a>
                            </li>
                        </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="text-center">
        <h2 class="medium text-white mt-3">Report Services</h2>
        <p class="italic text-white mb-5">Tell us About Your Report</p>
    </div>

    <div class="wave wave1"></div>
    <div class="wave wave2"></div>
    <div class="wave wave3"></div>
    <div class="wave wave4"></div>
</section>

{{-- Section Card Report --}}

<div class="row justify-content-center">
    <div class="col-lg-6 col-10 col">
        <div class="content shadow">
            @@if ()
                
            @else
                
            @endif
        </div>
    </div>
</div>

{{-- Penutup Body --}}

@section ('js')
@if(Session::has('pesan'))
<script>
    $('#loginModal').modal('show');
</script>
@endsection