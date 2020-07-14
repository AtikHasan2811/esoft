@extends('back.adminMaster')
@section('title','Dashboard')

@section('content')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Dashboard</h1>
          @if (Session::get('message'))
        <p class="text-success">{{Session::get('message')}}</p>

          @endif
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
  <!-- /.content-header -->

    <!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
      {{-- <div class="row">
          <div class="col-sm-12">
          <a class="btn btn-info" href="{{route('viewReport')}}">Audit List</a>
              <a class="btn btn-warning" href="{{ route('viewConpany') }}">Company</a>
              <a class="btn btn-success" href="{{ route('viewQuestion') }}">Question List</a>
              <a class="btn btn-success" href="{{ route('viewCertificate') }}">Certificate List</a>
          </div>
      </div> --}}
      <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
              <a href="{{route('viewAdmins')}}">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-list"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Admins</span>
                <span class="info-box-number">
                  {{$admins}}

                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
              <a href="{{ route('viewBanker') }}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-briefcase"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Bankers</span>
              <span class="info-box-number">{{$bankers}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>
          <a href="{{ route('auditlist') }}">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-question"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Auditors</span>
              <span class="info-box-number">{{$auditors}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
              <a href="{{ route('employeelist') }}">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-certificate"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Employees</span>
              <span class="info-box-number">{{$employees}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </a>

          </div>
          <!-- /.col -->
        </div>



  </div>
</section>


@endsection
