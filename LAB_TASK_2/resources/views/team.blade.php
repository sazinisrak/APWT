
@extends('layouts.app')
@section('content')
    <h1>Team Members</h1>
    <ul><ul><h3>
    @foreach($team as $t)
        <li>{{$t}}</li>
    @endforeach
    </ul></ul></h3>
@endsection
