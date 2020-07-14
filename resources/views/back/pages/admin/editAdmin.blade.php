
@extends('back.adminMaster')
@section('title','Edit Profile')
@section('content')
    <div class="container">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Company</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-8">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        @if (Session::get('message'))
                            <p style="color: red;background-color: #0E9A00;"><strong class="m-3">{{Session::get('message')}}</strong></p>
                        @endif
                        <!-- /.card-header -->
                        <!-- form start -->

                            <form action="{{route('updateProfile',$data->id)}}" method="POST" class="m-4">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" name="name"  class="form-control" value="{{$data->name}}" placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" name="email" class="form-control" value="{{$data->email}}" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="old_password" class="form-control"  placeholder="Old passwor">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" name="new_password" class="form-control"  placeholder="New Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                         <div class="row">
                                <div class="col-8">
                                    <a href="{{route('adminLogin')}}" class="text-center">I already have a membership</a>
                                    <!--
                                      <div class="icheck-primary">
                                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                        <label for="agreeTerms">
                                         I agree to the <a href="#">terms</a>
                                        </label>
                                      </div>
                                      -->
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register Update</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>

    </section>
    </div>
@endsection
{{--id	question	status	created_by	updated_by	created_at	updated_at--}}
