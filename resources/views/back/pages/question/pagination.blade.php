<div class="card-body" >
    <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Sl</th>
            <th>Question</th>
            <th>Status</th>
            <th>Action</th>

        </tr>
        </thead>
        <tbody>
        @if ($questionData)
            @foreach ($questionData as $key=>$question)
                <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$question->question}} </td>
                    <td>
                        @if($question->status == true)
                            <span class="btn btn-success">Published</span>
                        @else
                            <span class="btn btn-danger">Pending</span>
                        @endif

                    </td>
                    <td>
                        <a href="{{route('editQuestion',$question->id)}}" class="btn btn-success">Edit</a>
                        <a  class="btn btn-danger" href="{{route('deleteQuestion',$question->id)}}">Delete</a>
                    </td>

                </tr>
            @endforeach
        @else($questionData==null)
            <tr>
                <td colspan="8">  <p>There are no data available</p>    </td>
            </tr>

        @endif
        </tbody>
        <tfoot>
        <tr>
            <th>Sl</th>
            <th>Question</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>

    <footer class="m-4">
        {{ $questionData->links() }}
    </footer>

</div>
