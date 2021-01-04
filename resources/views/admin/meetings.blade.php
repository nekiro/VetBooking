@extends('layouts.app')

@section('content')
<div class="container" id="meetings">
    <h4 class="mt-2">Wizyty</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Data</th>
                <th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($meetings as $meeting)
            <tr>
                <td>{{ $meeting->name }}</td>
                <td>{{ $meeting->description }}</td>
                <td>{{ $meeting->date }}</td>
                <td>
                    <form method="POST" action="{{ route('meetings-cancel') }}">
                        @csrf
                        <input id="id" name="id" value="{{ $meeting->id }}" hidden />
                        <button type="submit" class="btn btn-primary bg-primary">Odwołaj</button>
                    </form>
                    <form method="POST" action="{{ route('meetings-cancel') }}">
                        @csrf
                        <input id="id" name="id" value="{{ $meeting->id }}" hidden />
                        <button type="submit" class="btn btn-primary bg-primary">Zrealizuj</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br>

    <h4 class="mt-2">Wizyty Telefoniczne</h4>
    <table class="table">
        <thead>
            <tr>
                <th>Nazwa</th>
                <th>Opis</th>
                <th>Data</th>
                <th>Imię</th>
                <th>Nazwisko</th>
                <th>Numer Tel.</th>
                <th>Imię Zwierzaka</th>
                <th>Akcja</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($unregisteredMeetings as $meeting)
            <tr>
                <td>{{ $meeting->name }}</td>
                <td>{{ $meeting->description }}</td>
                <td>{{ $meeting->date }}</td>
                <td>{{ $meeting->firstname }}</td>
                <td>{{ $meeting->lastname }}</td>
                <td>{{ $meeting->phone_number }}</td>
                <td>{{ $meeting->petname }}</td>
                <td>
                    <form method="POST" action="{{ route('meetings-cancel') }}">
                        @csrf
                        <input id="id" name="id" value="{{ $meeting->id }}" hidden />
                        <!--<button type="submit" class="btn btn-primary bg-primary">Odwołaj</button> TODO --> 
                    </form>
                    <form method="POST" action="{{ route('meetings-cancel') }}">
                        @csrf
                        <input id="id" name="id" value="{{ $meeting->id }}" hidden />
                        <!--<button type="submit" class="btn btn-primary bg-primary">Zrealizuj</button> TODO-->
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection