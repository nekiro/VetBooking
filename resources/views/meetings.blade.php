@extends('layouts.app')

@section('content')
<div class="container" id="meetings">
    <ul id="myTab" class="nav nav-tabs row">
        <li class="nav-item">
            <a href="#home" class="nav-link active" data-toggle="tab">Umów się</a>
        </li>
        <li class="nav-item">
            <a href="#profile" class="nav-link" data-toggle="tab">Aktualne wizyty</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active p-3" id="home">
            <h4 class="mt-2 mb-4">Umów się na wizytę</h4>
            <form action="/home/Create" method="post">
                <div class="form-group">
                    <label for="name">Temat wizyty</label>
                    <input type="text" class="form-control" id="name" name="Name" aria-describedby="name"
                        placeholder="Temat wizyty">
                    <h6 id="namecheck" style="color: red; ">Musisz podać temat wizyty</h6>
                </div>
                <div class="form-group">
                    <label for="description">Opis <br /> <span class="small">Proszę podać gatunek, rasę, wiek zwierzęcia
                            oraz w skrócie opisać czego będzie dotyczyła wizyta.</span></label>
                    <textarea class="form-control rounded-0" name="Description" id="description" rows="4"
                        placeholder="Opis" maxlength="2000"></textarea>
                    <h6 id="descriptioncheck" style="color: red;">Musisz podać opis wizyty</h6>
                </div>
                <h6 class="mb-4">Wybierz termin wizyty.</h6>

                <input id="datetimepicker" name="Date" type="text" placeholder="wybierz datę">
                <input id="timepicker" name="Time" type="text" placeholder="wybierz godzinę" disabled>
                <h6 id="pickercheck" style="color: red;">Musisz podać date/godzine wizyty.</h6>
                </br>
                <button id="submitBtn" type="submit" class=" mt-4 btn btn-primary centerButton">Zatwierdź</button>
            </form>
        </div>
        <div class="tab-pane fade" id="profile">
            <h4 class="mt-2">Aktualne wizyty</h4>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nazwa</th>
                        <th>Opis</th>
                        <th>Data</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>
                            nazwa
                        </td>
                        <td>
                            opis
                        </td>
                        <td>
                            data
                        </td>
                        <td>
                            <a style="color: blue; text-decoration: underline; cursor: pointer; ">Odwołaj</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <hr>

</div>

</div>
@endsection