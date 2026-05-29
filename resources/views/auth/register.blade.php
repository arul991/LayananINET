@extends('layouts.auth')

@section('content')
<div class="page page-center">
    <div class="container-tight py-4">
        <div class="text-center mb-4">
            <a href="{{ route('auth.login') }}" class="navbar-brand navbar-brand-autodark">
                <img src="{{ asset('assets/logo.svg') }}" alt="LayananINET" style="height: 50px;">
            </a>
        </div>
        <form class="card card-md" method="POST" action="{{ route('auth.register.post') }}">
            @csrf
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Create Account</h2>
                
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <div class="d-flex">
                            <div>
                                <h4 class="alert-title">Validation Error</h4>
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
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           placeholder="Enter your name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           placeholder="Enter email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" 
                           placeholder="Enter phone number" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
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
                    <label class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" 
                           placeholder="Confirm password" name="password_confirmation" required>
                    @error('password_confirmation')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">
                        Create Account
                    </button>
                </div>
            </div>
        </form>

        <div class="text-center text-muted mt-4">
            Already have an account? <a href="{{ route('auth.login') }}" tabindex="-1">Sign in</a>
        </div>
    </div>
</div>
@endsection