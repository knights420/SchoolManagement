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
        </div>
        <!--begin::Form-->
        <form action="/subject" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                {{-- <div class="row"> --}}
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label>Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"  placeholder="Enter Name"/>
                            @error('name')
                            <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="exampleTextarea">Description<span class="text-danger">*</span></label>
                            <textarea class="form-control @error('description') is-invalid @enderror" rows="1" name="description" placeholder="Enter Description"></textarea>
                            @error('description')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label>Image<span class="text-danger">*</span></label>
                            <div></div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image" name="image"/>
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                            @error('image')
                                <span class="form-text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        <!--end::Form-->
   </div>
@endsection