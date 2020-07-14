@extends('back.adminMaster')
@section('title','Add Question')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Question Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Question</li>
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
                            <h3 class="card-title">Add Question</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('insertQuestion')}}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Question</label>
                                    <textarea class="form-control" name="question" rows="3"
                                              placeholder="Enter Question"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Certificate </label>
                                    <Select required name="certificate_id" class="form-control">
                                        <option value="">--Select Company--</option>
                                        @foreach ($certificateData as $certificate)
                                            <option value="{{$certificate->id}}">{{$certificate->certificate_name}}</option>
                                        @endforeach
                                    </Select>
                                </div>

{{--                                id	certificate	question	stage	status	created_by	updated_by	created_at	updated_at--}}


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Certificate </label>
                                    <Select required name="stage" class="form-control">
                                        <option value="">--Select Stage--</option>
                                        <option value="1">Stage One</option>
                                        <option value="2">Stage Two</option>
                                    </Select>
                                </div>

                                <div class="form-group">
                                    <input type="checkbox" id="publish" class="filled-in" name="status" value="1">
                                    <label for="publish">Publish</label>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>

    </section>

@endsection
{{--id	question	status	created_by	updated_by	created_at	updated_at--}}
