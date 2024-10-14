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
    <div class="row">
        @foreach($horses as $horse)
        <div class="col-3 m-4" style="background-color: lightgray;">
            <h3 class="text-center" style="font-weight:bold;">{{$horse['fajta']}}</h3>
            <p class="text-center">{{$horse['allam']}} ({{$horse['ev']}})</p>
            <img src="{{asset("img/{$horse['kep']}")}}" alt="{{$horse['fajta']}}" class="img-fluid">
            <p class="text-center">{{$horse['leiras']}}</p>
        </div>

        @endforeach
    </div>
</div>
@endsection