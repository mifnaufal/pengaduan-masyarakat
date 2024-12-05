@extends('layouts.user')

{{-- Pembuka head --}}
@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
@endsection

@section('title', 'Rehub - E-Report Hub')
{{-- Penutup Head --}}

{{-- Pembuka Body --}}
@section('content')

    {{-- Section Header --}}
    <section class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
            <div class="container">
                <div class="container-fluid">
                    <a href="#" class="navbar-brand">
                        <h4 class="semi-bold mb-0 text-white">REHUB</h4>
                        <p class="italic mt-0 text-white">E-Report Hub</p>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        @if (Auth::guard('masyarakat')->check())
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item">
                                <a href="{{ route('ereporthub.report') }}" class="nav-link ml-auto text-white">
                                    Report
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('ereporthub.logout') }}" class="nav-link ml-auto text-white" style="text-decoration: underline">
                                    {{ Auth::guard('masyarakat')->user()->nama }}
                                </a>
                            </li>
                        </ul>
                        @else
                        <ul class="navbar-nav text-center ml-auto">
                            <li class="nav-item">
                                <button class="btn text-white btn-warning" type="button" data-toggle="modal" data-target="#loginModal">
                                    Login
                                </button>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('ereporthub.formRegister') }}" class="btn btn-purple text-white">Register</a>
                            </li>
                        </ul>
                        @endif
                        
                    </div>

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
                @if ($errors->any())

                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @endforeach
                @endif

                @if (Session::has('pengaduan'))
                    <div class="alert alert-success">
                        {{ Session::get('pengaduan') }}
                    </div>
                @endif

                <div class="card mb-3">Create Your Report</div>
                <form action="{{ route('ereporthub.login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="isi_laporan">Report</label>
                        <textarea name="isi_laporan" placeholder="Write Your Report Here..." class="form-control" cols="30" rows="10">{{ old('isi_laporan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>

                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-custom mt-2">Submit</button>
                </form>
            </div>
        </div>
    </div>


    {{-- Hitung Pengaduan --}}
    <div class="pengaduan mt-3">
        <div class="bg-custom">
            <div class="text-center">
                <h5 class="text-black">Total Report</h5>
                <h2 class="medium text-black">10</h2>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    <div class="footer">
        <hr>
        <div class="text-center">
            <h5 class="text-black">Rehub</h5>
            <p class="text-black">E-Report Hub</p>
        </div>
    </div>

    {{-- Penutup Body --}}

{{-- modal --}}
<div class="modal fade" id="loginModal" tabindex="-1" aria-label="exampleModalLable" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h3 class="mt-3">Login</h3>
                <p>Please login to your account</p>
                <form action="{{route ('ereporthub.login')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-purple text-white mt-3" style="width: 100%">Login</button>
                </form>
                @if (Session::has('pesan'))
                    <div class="alert alert-danger mt-3">
                        {{ Session::get('pesan') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>


    @section('js')
        @if (Session::has('pesan'))
            <script>
                $('#loginModal').modal('show');
            </script>
        @endif
    @endsection