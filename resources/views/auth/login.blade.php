@extends('layouts.app')

@section('content')
<div class="container">
    @guest
    <div class="row center loginOrRegister">
        <div class="col-sm">

            <div class="login">
                <h2 class="login_head text-center">Zaloguj się</h2>
                <p class="login_p text-center">Jeżeli posiadasz już konto - zaloguj się!</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class=" login_input input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background: transparent">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00a3e8"
                                    class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path
                                        d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z" />
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd"
                                        d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
                                </svg>
                            </div>
                        </div>

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email"
                            autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class=" login_input input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text" style="background: transparent"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#00a3e8"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M10 16c0-1.104.896-2 2-2s2 .896 2 2c0 .738-.404 1.376-1 1.723v2.277h-2v-2.277c-.596-.347-1-.985-1-1.723zm11-6v14h-18v-14h3v-4c0-3.313 2.687-6 6-6s6 2.687 6 6v4h3zm-13 0h8v-4c0-2.206-1.795-4-4-4s-4 1.794-4 4v4zm11 2h-14v10h14v-10z" />
                                </svg></div>
                        </div>
                        <input id="password" type="password"
                            class="login_input form-control @error('password') is-invalid @enderror" placeholder="Hasło"
                            name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class=" login_check form-check text-center">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">Zapamiętaj mnie</label>
                    </div>

                    <div class="form-group row mb-0 text-center">
                        <button type="submit" class="btn btn-primary login_btn">Zaloguj się</button>
                    </div>

                </form>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Zapomniałeś hasła?
                </a>
                @endif
                <hr>
                @if (Route::has('register'))
                <p class="login_p"> Nie masz konta? <a class="btn btn-link" style="display: inline-block"
                        href="{{ route('register') }}">Zarejestruj się!</a> </p>
                @endif
            </div>
        </div>
    </div>
    @endguest

</div>
@endsection