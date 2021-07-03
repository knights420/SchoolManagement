@extends('layouts.app')
@section('bredcrum')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bold my-1 mr-5">Subject</h5>
<!--end::Page Title-->
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
        <i class="menu-icon flaticon-add"></i>
    </li>
    <li class="breadcrumb-item">
        <a href="" class="text-muted">Create</a>
    </li>
</ul>
<!--end::Breadcrumb-->
@endsection
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Create
            </h3>
            <div class="card-toolbar">
                <div class="example-tools justify-content-center">
                    {{-- <span class="example-toggle" data-toggle="tooltip" title="View code"></span>
                    <span class="example-copy" data-toggle="tooltip" title="Copy code"></span> --}}
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form>
            <div class="card-body">
                {{-- <div class="form-group mb-8">
                    <div class="alert alert-custom alert-default" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning text-primary"></i></div>
                        <div class="alert-text">
                            Email Field is Required
                        </div>
                    </div>
                </div> --}}
                <div class="form-group">
                    <label>Email address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control"  placeholder="Enter email"/>
                    <span class="form-text text-muted">We'll never share your email with anyone else.</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <label>Static:</label>
                    <p class="form-control-plaintext text-muted">email@example.com</p>
                </div>
                <div class="form-group">
                    <label for="exampleSelect1">Example select <span class="text-danger">*</span></label>
                    <select class="form-control" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleSelect2">Example multiple select <span class="text-danger">*</span></label>
                    <select multiple="" class="form-control" id="exampleSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>File Browser</label>
                    <div></div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile"/>
                        <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                </div>
                <div class="form-group mb-1">
                    <label for="exampleTextarea">Example textarea <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
   </div>
@endsection