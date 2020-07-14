<?php

namespace App\Http\Controllers;

use App\Company;
use App\Question;
use Illuminate\Http\Request;
use select;
use Illuminate\Support\Facades\DB;




class LiveSearch extends Controller
{

    function fetch(Request $request)
    {
        if($request->get('query'))
        {
            $query = $request->get('query');
            $data = DB::table('companies')
                ->where('company_name', 'LIKE', "%{$query}%")
                ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
                $output .= '
           <li><a href="#">'.$row->company_name.'</a></li>
       ';
            }
            $output .= '</ul>';
            echo $output;
        }
    }

    public function search(Request $request){
        $query = $request->input('query');
//        return $query;
      return $question = Question::where('question','LIKE',"%$query%")->where('status','1')->get();

//
    }

}
