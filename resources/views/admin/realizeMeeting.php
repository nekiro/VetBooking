@extends('layouts.app')

@section('content')
<div class="container" id="meetings">
    <h4 class="mt-2">Zrealizowane wizyty</h4>
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
                        <button type="submit" class="btn btn-primary bg-primary">Usuń z historii</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection