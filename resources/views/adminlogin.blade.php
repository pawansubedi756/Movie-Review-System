@extends('layouts.extended-layouts')


@section('content')


<div class="row">
    <div class="col d-flex justify-content-center align-items-center min-vh-100">
        <div class="row border border-light p-4" style="widhth:600px; height:auto;">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h4>Admin Login</h4>
                    </div>
                </div>
                <form action="/admin/login" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" placeholder="Enter Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder=" Enter password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection


