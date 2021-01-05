@extends('layouts.app')
@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 90vh;">
    <div class="p-5 col-md-3 col-sm-12" style="background: #e3f2fd;">
        <form action="{{route('register')}}" method="POST">
            @csrf
            <div class="form-group w-100">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" class="form-control w-100" placeholder="John Doe" name="first_name"
                    required>
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group w-100">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" class="form-control w-100" placeholder="John Doe" name="last_name"
                    required>
                @error('email')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
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
                <label for="password">Password Confirmation</label>
                <input id="password" type="password" class="form-control" name="password_confirmation"
                    placeholder="********" required>
                @error('password')
                <span class="text-danger" role="alert">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary w-100">Register</button>
            </div>
        </form>
        @if (Route::has('password.request'))
        <a class="btn btn-link d-flex justify-content-center" href="{{ route('login') }}">
            {{ __('Login') }}
        </a>
        @endif
    </div>
</div>
@endsection