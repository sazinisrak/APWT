<?php $employee = session()->get('employee')?>
@extends('layouts.employeeLayout')
@section('title', 'Dashboard')
@section('picture', $employee['picture'])
@section('name', $employee['name'])
@section('email', $employee['email'])
@section('contant') 
    <div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
        <div>
            <h4 class="mb-3 mb-md-0">Welcome to Dashboard</h4>
        </div>
    </div>    
@endsection