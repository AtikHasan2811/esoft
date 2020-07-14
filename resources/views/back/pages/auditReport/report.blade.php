@extends('back.auditAdminMaster')
@section('title','Add Banker')
@section('style')


@endsection
@section('content')
    <div class="wrapper">
        {{-- Content --}}
        <div class="container-fluid">
            <div class="row container">
                <div class="col-sm-12 col-md-12 ml-2">

                </div>
                {{-- Column Start --}}
                <div class="col-sm-12 col-md-12 container ml-5">
                    {{-- Form Start --}}

                    <form action="{{route('insertReport')}}" method="POST">
                        <div class="container text-center pt-5">
{{--                            <a class="label label-success" href="{{route('viewReport')}}">   <h1>E-Tex Solution Ltd.</h1></a>--}}
{{--                            <h2 class="text-center mt-4">Stage 1 Audit Report</h2>--}}
                            @csrf

                            @if (Session::get('message'))
                                <p class="text-success"> {{Session::get('message')}} </p>
                            @endif
                            <br><br><br>
                            <p style="color:red;"><b>*C for Conformity
                                    *NC for Nonconformity
                                    *O for Observation
                                    *DR for Documents Review<br>
                                    *P for Plant Tour
                                    *WI  for Workers Interview
                                    *MI for Management Interview</b>
                            </p>
                        </div>
                        <div class="container">
                            <table class="table table-bordered" id="info">
                                <thead class="bg-success">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Questions</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Evidence</th>
                                    <th scope="col">Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($questions as $key=>$question)

                                    <tr>
                                        {{-- <th scope="row">1</th> --}}
                                        <th style="width: 5%">{{$key+1}}</th>
                                        <td style="width:30%">{{$question->question}}
                                            <input type="hidden" name="question_id[]" value="{{$question->id}}">
                                        </td>
                                        <td style="width:20%">
                                            <label for="">C</label>
                                            <input type="checkbox" name="status_id[{{$question->id}}][]" value="1">
                                            <label for="">NC</label>
                                            <input type="checkbox" name="status_id[{{$question->id}}][]" value="2">
                                            <label for="">O</label>
                                            <input type="checkbox" name="status_id[{{$question->id}}][]" value="3">
                                        </td>
                                        <td style="width:20%">
                                            <label for="">DR</label>
                                            <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="1">
                                            <label for="">P</label>
                                            <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="2">
                                            <label for="">WI</label>
                                            <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="3">
                                            <label for="">MI</label>
                                            <input type="checkbox" name="evidence_id[{{$question->id}}][]" value="4">
                                        </td>
                                        <td style="width:25%"><textarea id="description{{$question->id}}"  name="description[{{$question->id}}][]" id="" cols="20" rows="2"></textarea>
                                            <script>

                                                // document.getElementById("evi4"+{{$key}}).checked = true;
                                                // document.getElementById("myText").value = "Johnny Bravo";
                                                var x = document.getElementById("description"+{{$question->id}}).value;
                                                if(x==""){
                                                    document.getElementById("description"+{{$question->id}}).value ="   ";
                                                }
                                            </script>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                                <tfoot class="bg-success">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Questions</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Evidence</th>
                                    <th scope="col">Comment</th>
                                </tr>
                                </tfoot>

                            </table>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <nav aria-label="...">
                                <ul class="pagination justify-content-center">
                                    {{$questions->links()}}
                                </ul>

                            </nav>
                        </div>
                    {{-- End Table Container --}}

                    {{--                </form>--}}

                    {{-- Form End --}}
                </div>
                {{-- Column End --}}

            </div>
        </div>

        {{-- End Content --}}

    </div>
    <!-- ./wrapper -->

@endsection
