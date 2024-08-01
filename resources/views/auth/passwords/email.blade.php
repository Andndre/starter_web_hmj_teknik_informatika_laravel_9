@extends('auth.layouts.app')

@section('title', 'Reset Password')

@section('content')
    <div class="card-body">
        <div class="mb-4">
            <h1 class="mb-0 fw-bold">Reset Password</h1>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Alamat Email') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary btn-sm">
                    Kirim Link Reset Password
                </button>
            </div>
        </form>
    </div>
@endsection
