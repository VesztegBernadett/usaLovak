@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp

@extends('layouts.main')
@section("title", $title)

@section("content")
<div class="container">
<h1>{{$title}}</h1>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Állam</th>
            <th>Fajta</th>
            <th>Leírás</th>
            <th>Év</th>
        </tr>
    </thead>
    <tbody>
        @foreach($horses as $horse)
        <tr>
            <td>{{$horse['allam']}}</td>
            <td>{{$horse['fajta']}}</td>
            <td>{{$horse['leiras']}}</td>
            <td>{{$horse['ev']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>

@endsection