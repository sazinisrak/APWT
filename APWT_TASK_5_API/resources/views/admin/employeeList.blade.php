@php
$admin = session()->get('admin');
@endphp
@extends('layouts.adminLayout')
@section('title', 'Employee list')
@section('picture', $admin['picture'])
@section('name', $admin['name'])
@section('email', $admin['email'])
@section('contant')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Employee List</h4>
                    @if (!empty($success_msg))
                        <h6 class="card-title text-primary">{{$success_msg}}</h6>
                    @endif
                    @if (!empty($error_message))
                        <h6 class="card-title text-danger">{{$error_message}}</h6>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($employees as $employee)
                                    <tr>
                                        <td class="py-1">
                                            <img src="{{$employee['picture']}}" alt="image">
                                        </td>
                                        <td>{{$employee['username']}}</td>
                                        <td>{{$employee['name']}}</td>
                                        <td>{{$employee['email']}}</td>
                                        <td>
                                            <a href="/admin/editEmployee/{{$employee['username']}}" class="btn btn-primary btn-icon-text">Edit</a>
                                        </td>
                                        <td>
                                            <a href="/admin/employeeDelete/{{$employee['username']}}" class="btn btn-primary btn-icon-text">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex">
                            {!! $employees->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
