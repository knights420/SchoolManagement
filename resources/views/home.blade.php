@extends('layouts.app')
@section('bredcrum')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
<!--end::Page Title-->
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
        <i class="menu-icon flaticon-home"></i>
    </li>
    <li class="breadcrumb-item">
        <a href="" class="text-muted">Home</a>
    </li>
</ul>
<!--end::Breadcrumb-->
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome &nbsp;{{Auth()->user()->name}}</div>
            </div>
        </div>
    </div>
</div>
@endsection