@php
/**
* @var Illuminate\Support\Collection $horses
*/
@endphp

@extends('layouts.main')
@section("title", $title)


@section("content")
<ul>
    @foreach($horses as $horse)
    <li>{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
    @endforeach
</ul>
@endsection