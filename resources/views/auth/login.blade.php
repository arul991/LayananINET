@extends('layouts.auth')

@section('content')
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="{{ route('auth.login') }}" class="navbar-brand navbar-brand-autodark">
                <img src="{{ asset('assets/logo.svg') }}" alt="LayananINET" style="height: 50px;">
            </a>
        </div>
        <form class="card card-md" method="POST" action="{{ route('auth.login.post') }}">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login to your account</h2>
                
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>
                                <h4 class="alert-title">Terjadi kesalahan</h4>
                                <div class="text-muted">
                                    @foreach ($errors->all() as $error)
                                        <p>{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Enter email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           placeholder="Enter password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input" name="remember">
                        <span class="form-check-label">Remember me</span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M15 8v-2a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-2" />
                            <path d="M21 12a9 9 0 0 0 -9 -9" />
                            <path d="M15.13 13.41l2.59 2.59a2 2 0 1 1 -2.83 2.83l-2.59 -2.59" />
                        </svg>
                        Sign in
                    </button>
                </div>
            </div>
        </form>

        <div class="text-center text-muted mt-4">
            Don't have an account yet? <a href="{{ route('auth.register') }}" tabindex="-1">Sign up</a>
        </div>
    </div>
</div>
@endsection