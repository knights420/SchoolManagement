@extends('layouts.app')
@section('bredcrum')
<!--begin::Page Title-->
<h5 class="text-dark font-weight-bold my-1 mr-5">Empty Page</h5>
<!--end::Page Title-->
<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
    <li class="breadcrumb-item">
        <a href="" class="text-muted">General</a>
    </li>
    <li class="breadcrumb-item">
        <a href="" class="text-muted">Empty Page</a>
    </li>
</ul>
<!--end::Breadcrumb-->
@endsection
@section('content')
<!--begin::Content-->
<div class="flex-row-fluid ml-lg-8 m-5">
    <!--begin::Card-->
    <div class="card card-custom card-stretch">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
            </div>
            <div class="card-toolbar">
                <button type="submit" class="btn btn-success mr-2" onclick="event.preventDefault(); document.getElementById('profile_form').submit();">Save Changes</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form" action="/profile_update" method="POST" enctype="multipart/form-data" id="profile_form">
            @csrf
            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mb-6">User Info</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url(assets/media/users/blank.png)">
                            <div class="image-input-wrapper" style="background-image: url({{Auth::user()->user_avatar}})"></div>
                            <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                <i class="fa fa-pen icon-sm text-muted"></i>
                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                <input type="hidden" name="avatar_remove" />
                            </label>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                            <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                <i class="ki ki-bold-close icon-xs text-muted"></i>
                            </span>
                        </div>
                        <span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" id="first_name" name="first_name" type="text" value="{{Auth::user()->first_name}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Last Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" id="last_name" name="last_name" type="text" value="{{Auth::user()->last_name}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" id="email" name="email" type="email" value="{{Auth::user()->email}}" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Mobile</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid" id="mobile" name="mobile" type="text" value="{{Auth::user()->mobile}}" />
                    </div>
                </div>
            </div>
            <!--end::Body-->
        </form>
        <!--end::Form-->
    </div>
</div>
<!--end::Content-->

<!--begin::Content-->
<div class="flex-row-fluid ml-lg-8 m-5">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header py-3">
            <div class="card-title align-items-start flex-column">
                <h3 class="card-label font-weight-bolder text-dark">Change Password</h3>
                <span class="text-muted font-weight-bold font-size-sm mt-1">Change your account password</span>
            </div>
            <div class="card-toolbar">
                <button type="submit" class="btn btn-success mr-2" onclick="event.preventDefault(); document.getElementById('password_form').submit();">Save Changes</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Form-->
        <form class="form" id="password_form" action="update_password" method="POST">
            @csrf
            <div class="card-body">
                {{-- <!--begin::Alert-->
                <div class="alert alert-custom alert-light-danger fade show mb-10" role="alert">
                    <div class="alert-icon">
                        <span class="svg-icon svg-icon-3x svg-icon-danger">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
                                    <rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
                                    <rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </div>
                    <div class="alert-text font-weight-bold">Configure user passwords to expire periodically. Users will need warning that their passwords are going to expire,
                    <br />or they might inadvertently get locked out of the system!</div>
                    <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">
                                <i class="ki ki-close"></i>
                            </span>
                        </button>
                    </div>
                </div>
                <!--end::Alert--> --}}
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Current Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid mb-2" name="old_password" placeholder="Current password" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">New Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" name="password" placeholder="New password" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label text-alert">Verify Password</label>
                    <div class="col-lg-9 col-xl-6">
                        <input type="password" class="form-control form-control-lg form-control-solid" name="password_confirmation" placeholder="Verify password" />
                    </div>
                </div>
            </div>
        </form>
        <!--end::Form-->
    </div>
</div>
<!--end::Content-->
@endsection
@section('js')
<script src="assets/js/pages/custom/profile/profile.js"></script>
@endsection
