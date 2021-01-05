@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 90vh;">
    <div class="p-5 col-md-3 col-sm-12" style="background: #e3f2fd;">
        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group w-100">
                <label for="email">Email</label>
                <input id="email" type="email" class="form-control w-100" placeholder="john.doe@example.com"
                    name="email" required>
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" class="form-control" name="password" placeholder="********"
                    required>
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                        {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </div>
        </form>
        @if (Route::has('password.request'))
        <a class="btn btn-link d-flex justify-content-center" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </div>
</div>
@endsection