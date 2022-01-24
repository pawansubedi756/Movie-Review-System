@extends('layouts.admintemplate')

@section('content')
<div class="row p-4">
    <div class="col p-4 text-center">
        <h1>Welcome Pawan Subedi</h1>
        <p>This is a Admin Panel</p>
    </div>
</div>
<div class="row">
    <div class="col-lg-4 text-center" style="font-size:100px">
        <i class="fas fa-user-edit" ></i>
    </div>
    <div class="col-lg-4 text-center" style="font-size:100px">
        <i class="fas fa-user-plus"></i>
    </div>
    <div class="col-lg-4 text-center" style="font-size:100px">
        <i class="fas fa-user-minus"></i>
    </div>
</div>
@endsection
