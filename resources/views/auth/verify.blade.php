@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Zweryfikuj swój email</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                        	Nowy link weryfikacyjny został wysłany na Twoj email.
                        </div>
                    @endif

                    Wysłaliśmy Ci link weryfikacyjny, sprawdź swój email.
                    Jeśli nie dostałeś linku
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">kliknij tutaj żeby wysłać link ponownie</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
