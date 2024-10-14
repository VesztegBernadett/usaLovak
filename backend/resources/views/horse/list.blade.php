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
    <ul id="lista">
        @foreach($horses as $horse)
        @if($loop->first)
        <li id="elso">{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
        @elseif($loop->last)
        <li id="utolso">{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
        @else
        <li>{{$horse['fajta']}} ({{$horse['allam']}} - {{$horse['ev']}})</li>
        @endif
        @endforeach
    </ul>
</div>

@endsection