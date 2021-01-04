@extends('layouts.app')

@section('content')
<div class="container" id="meetings">
    <div class="tab-pane fade show active p-3" id="home">
        <h4 class="mt-2 mb-4">Wpisz wizytę: </h4>
        <form method="POST" action="{{ route('book-meeting-post') }}">
            @csrf

            <div class="form-group">
                <label for="name">Temat wizyty</label>
                <input id="name" type="text" class="form-control" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col"><label for="name">Imię właściciela</label>
                    <input id="name" type="text" class="form-control" name="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col"><label for="name">Nazwisko właściciela</label>
                    <input id="name" type="text" class="form-control" name="name">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="name">Numer telefonu</label>
                <input id="name" type="text" class="form-control" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="name">Imię zwierzaka</label>
                <input id="name" type="text" class="form-control" name="name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="description">Opis <br /> <span class="small">Proszę podać gatunek, rasę, wiek zwierzęcia
                        oraz w skrócie opisać czego będzie dotyczyła wizyta.</span></label>
                <textarea id="description" name="description" class="form-control rounded-0" rows="4"
                    maxlength="2000"></textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <h6 class="mb-4">Wybierz termin wizyty.</h6>
            <input id="datetimepicker" name="date" type="text" placeholder="wybierz datę">
            @error('date')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <input id="timepicker" name="time" type="text" placeholder="wybierz godzinę" disabled>
            @error('time')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </br>
            <button type="submit" class="mt-4 btn btn-primary centerButton bg-primary">Zatwierdź</button>
        </form>
    </div>
</div>
@endsection