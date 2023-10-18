<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function get(Request $request){
        $questions = Question::inRandomOrder()->limit(5)->get();
        return response()->json($questions);
    }
    public function insert(Request $request){
        $questions = new Question();
        $questions ->question = $request->question;
        $questions ->option_a =  $request->option_a;
        $questions->option_b =  $request->option_b;
        $questions->option_c =  $request->option_c;
        $questions->option_d =  $request->option_d;
        $questions->answer =  $request->answer;
        $questions->save();
    }
    public function question(){
        return view('insertquiz');
    }
}
