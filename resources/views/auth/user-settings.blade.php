@extends('layouts.app')

@section('content')

<div class="container" id="settings">
    <br>
    <h5 class="text-center">Aktualne dane: </h5>
    <p class="text-center">
        Imię: <strong>{{ $user->firstname }}</strong> <br>
        Nazwisko: <strong>{{ $user->lastname }}</strong> <br>
        Nr telefonu: <strong>{{ $user->phone_number }}</strong> <br>
        Adres e-mail: <strong>{{ $user->email }}</strong> <br>
    </p>
    <br><br>

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

    <h4 class="mt-2 mb-4 text-center">Zmień swoje hasło</h4>
    <form method="POST" action="{{ route('user-settings-change-password') }}">
        @csrf

        <div class="login_input input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" style="background: transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00a3e8" viewBox="0 0 24 24">
                        <path
                            d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z" />
                    </svg>
                </div>
            </div>

            <input id="old_password" type="password" class="form-control" placeholder="Aktualne hasło"
                name="old_password" autocomplete="old_password">
        </div>
        @error('old_password')
        <div class="alert alert-danger login_input">{{ $message }}</div>
        @enderror

        <div class="login_input input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" style="background: transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00a3e8" viewBox="0 0 24 24">
                        <path
                            d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z" />
                    </svg>
                </div>
            </div>

            <input id="password" type="password" class="form-control" placeholder="Nowe hasło" name="password"
                autocomplete="new-password">

        </div>
        @error('password')
        <div class="alert alert-danger login_input">{{ $message }}</div>
        @enderror

        <div class="login_input input-group">
            <div class="input-group-prepend">
                <div class="input-group-text" style="background: transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00a3e8" viewBox="0 0 24 24">
                        <path
                            d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z" />
                    </svg>
                </div>
            </div>

            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation"
                placeholder="Powtórz nowe hasło" autocomplete="new-password">

        </div>
        @error('password_confirmation')
        <div class="alert alert-danger login_input">{{ $message }}</div>
        @enderror

        <div class="form-group row mb-0 text-center">
            <button type="submit" class="btn btn-primary login_btn">
                Zmień swoje hasło
            </button>
        </div>
    </form>
</div>
@endsection