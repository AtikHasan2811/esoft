@extends('back.auditAdminMaster')
@section('title','Add Banker')
@section('style')
    <style>
        body {
            margin: 0;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            /* line-height: 1.5; */
            color: #212529;
            text-align: left;
            background-color: #fff;
        }

        .form-control {
            /*display: block; */
            width: 97%;

            height: 40px;
            padding: 0.100rem 1.75rem;
            margin-top: 4px;
            padding: 0px;
            margin-right: 100px;

            font-size: 1rem;
            line-height: -1;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: -0.75rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        /*textarea {*/
        /*    !*display: block; *!*/
        /*    width: 100%;*/

        /*    height: 100px;*/
        /*    padding: 0.100rem 1.75rem;*/
        /*    margin-top: 50px;*/
        /*    padding: 0px;*/
        /*    margin-right: 100px;*/

        /*    font-size: 1rem;*/
        /*    line-height: -1;*/
        /*    color: #495057;*/
        /*    background-color: #fff;*/
        /*    background-clip: padding-box;*/
        /*    border: 1px solid #ced4da;*/
        /*    border-radius: -0.75rem;*/
        /*    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;*/
        /*}*/
        table {
            border-collapse: separate;
        }


        .table td, .table th {
            padding: 0px !important;
            /* vertical-align: top; */
            /* border-top: 1px solid #dee2e6; */
        }

        .table td, .table th {
            padding: .60rem;
            /* vertical-align: top; */
            /* border-top: 1px solid #dee2e6; */
        }

        .table-bordered td, .table-bordered th {
            border: 2px solid #dee2e6 !important;
        }

        lable{
            margin-left: 10px;
            margin-top: 20px !important;
            padding-top: 20;: ;
        }
        input{
            margin-left: 10px;
            line-top: 20px;
        }

        td {
            line-height: 43px;
        }
    </style>
@endsection
@section('content')
    <div class="wrapper">
        {{-- Content --}}
        <div class="container-fluid">
            <div class="row container">
                <div class="col-sm-12 col-md-12 ml-2">
                    <form action="{{route('insertCompany')}}" method="POST">
                        {{--                        <a class="label label-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>--}}
                        <h2 class="text-center mt-4">Stage 1 Audit Report</h2>
                        <table class="table table-bordered m-4   text-center ">
                            @csrf
                            <tbody>

                            <tr style="height: 50px;">
                                <td scope="col" class=""  style="width: 30%;"><lable>Name of the Organization</lable></td>
                                <td scope="col" ><input type="text" name="company_name" class=" table-striped form-control ninput-lg " style="border: none;"> </td>
                            </tr>

                            <tr style="height: 80px; width: 100%">
                                <td scope="col" class=""  style="width: 30%;"><lable>Address</lable></td>
                                <td scope="col" ><textarea  rows="4" cols="50"  type="text" name="address" class="form-control input-lg " style="border: none; height: 79px; margin-left: 10px;"></textarea> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Standard Name </lable></td>
                                <td scope="col" ><input type="text" name="standard_name" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Site Address (If any) </lable></td>
                                <td scope="col" ><input type="text" name="site_address" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable mt-3>No. of Employees  </lable></td>
                                <td scope="col" ><input type="text" name="employees_num" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>No. Of Shift </lable></td>
                                <td scope="col" ><input type="text" name="shift_num" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>E mail id  </lable></td>
                                <td scope="col" ><input type="text" name="email" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Contact Person  </lable></td>
                                <td scope="col" ><input type="text" name="contact"  class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Telephone/Fax  </lable></td>
                                <td scope="col" ><input type="text" name="mobile"  class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable> Scope </lable></td>
                                <td scope="col" ><input type="text" name="scope" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Technical Area </lable></td>
                                <td scope="col" ><input type="text" name="technical_area" class="form-control input-lg " style="border: none;">  </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Exclusions </lable></td>
                                <td scope="col" ><input type="text" name="exclusion" class="form-control input-lg " style="border: none;"></td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable> Audit Team </lable></td>
                                <td scope="col" ><input type="text" name="audit_team" class="form-control input-lg " style="border: none;">
                                </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable> Starting date of Audit </lable></td>
                                <td scope="col" ><input type="text" name="s_audit_date" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>End Date of Audit </lable></td>
                                <td scope="col" ><input type="text" name="e_audit_date" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable> Brief about the organization </lable></td>
                                <td scope="col" ><input type="text" name="brief" class="form-control input-lg " style="border: none;"> </td>
                            </tr>

                            <tr>
                                <td scope="col" class=""  style="width: 30%;"><lable>Audit Objective  </lable></td>
                                <td scope="col" ><input type="text" name="objective" class="form-control input-lg " style="border: none;"> </td>
                            </tr>
                            </tbody>
                        </table>

                        {{--                            <button type="submit" class="btn btn-primary">Submit</button>--}}

                    </form>

                </div>
                {{-- Column Start --}}

                {{-- Column End --}}

            </div>
        </div>

        {{-- End Content --}}

    </div>
    <!-- ./wrapper -->


@endsection
