
@extends('layouts.app')
@section('content')
    <table class = "table table-border">
        <tr>
            <th>Name</th>
            <th>ID</th>
            <th>Date of Birth</th>
        </tr>
        @foreach($students as $s)
        <tr>
            <td>{{$s->name}}</td>
            <td>{{$s->id}}</td>
            <td>{{$s->dob}}</td>
        </tr>
        @endforeach
@endsection

