@extends('layouts.user')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <style>
        body {
            background: #6a70fc;
        }
        
        .btn-purple {
            background: #6a70fc;
            width: 100%;
            color: #fff;
            font-weight: 500;
        }
        
        .register-form {
            margin-top: 100px;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }
        
        .invalid-feedback {
            display: block;
            color: #dc3545;
            font-size: 80%;
        }
        
        .form-control.is-invalid {
            border-color: #dc3545;
        }
        
        .back-button {
            color: #6a70fc;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 20px;
        }
        
        .back-button:hover {
            color: #5056d6;
            text-decoration: none;
        }
    </style>
@endsection

@section('title', 'Register - E-Report Hub')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="register-form">
                <a href="{{ route('ereporthub.index') }}" class="back-button">
                    <i class="fas fa-arrow-left"></i> Back
                </a>
                
                <h3 class="text-center mb-4">Register</h3>
                
                <form action="{{ route('user.register') }}" method="POST">
                    @csrf
                    <div class="form-group">
                         <label for="nik">National ID Number</label>
                        <input type="text" name="nik" id="nik" 
                            class="form-control @error('nik') is-invalid @enderror" 
                            value="{{ old('nik') }}" required>
                        @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama">Full Name</label>
                        <input type="text" name="nama" id="nama" 
                            class="form-control @error('nama') is-invalid @enderror" 
                            value="{{ old('nama') }}" required>
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" 
                            class="form-control @error('username') is-invalid @enderror" 
                            value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" 
                            class="form-control @error('password') is-invalid @enderror" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="telp">Phone Number</label>
                        <input type="text" name="telp" id="telp" 
                            class="form-control @error('telp') is-invalid @enderror" 
                            value="{{ old('telp') }}" required>
                        @error('telp')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-purple mt-3">Register</button>

                    <div class="text-center mt-3">
                        <span>Already have an account? </span>
                        <a href="{{ route('ereporthub.index') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection