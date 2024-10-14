@extends('layouts.main')
@section("title", $title)


@section("content")
<ul>
        <li><a href="{{route('horse.list')}}">Felsorolás</a></li>
        <li><a href="{{route('horse.table')}}">Táblázat</a></li>
        <li><a href="{{route('horse.grid')}}">Bootstrap GRID</a></li>
    </ul>
@endsection