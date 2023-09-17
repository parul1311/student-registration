@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <a class="text-dark text-center text-decoration-none" href="{{ route('admin.users.index',['role'=>'Admin']) }}">
                                <div class="card p-4">
                                    <h3>{{ $adminsCount }}</h3>
                                    <p>Total Admins</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="text-dark text-center text-decoration-none" href="{{ route('admin.users.index',['role'=>'Student']) }}">
                                <div class="card p-4">
                                    <h3>{{ $usersCount }}</h3>
                                    <p>Total Users</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection