<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;
use App\Http\Requests\StoreQuestion;
use App\Questionaire;

class QuestionController extends Controller
{
    public function add(StoreQuestion $request){
    	$input = $request->all();
    	$temp = new Questionaire ($input);
        $question = new Questionaire ($input);

        $question->id_type = $temp->id_type[0];
    	$question->id_user = Auth::user()->id_user;
    	$question->right_answer = $temp->right_answer[0];

    	$question->save();
    	return redirect("addQuestion");
    }

    public function questionList($id_type) {
        if (Auth::guest() || Auth::user()->id_decentralization == 3) return Redirect::to('/');
        $question = DB::table('questionaires')
            ->where('id_type', '=', $id_type)
            ->get();
        return view("templates.questionList")->with([
            'question' => $question
        ]);
    }

    public function delete($id_question){
        DB::table('questionaires')->where('id_question', '=', $id_question)->delete();
        return redirect("questionList/$id_question");
    }

}
