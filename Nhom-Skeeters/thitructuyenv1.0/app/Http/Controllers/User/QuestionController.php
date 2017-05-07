<?php

namespace App\Http\Controllers\User;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Test;
use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function getQuestion($id){
        $testData = Test::findOrFail($id);
        $questionsData = Question::select('id', 'content', 'correct_answer')->where('test_id', $testData['id'])->get()->toArray();
        $answersData = Answer::select('id', 'content', 'question_id')->get()->toArray();
        return view('user.pages.exam', ['questionsData'=>$questionsData, 'answersData'=>$answersData]);
    }

    public function postQuestion(Request $requests, $id){
        $testData = Test::findOrFail($id);
        $questionsData = Question::select('id', 'content', 'correct_answer')->where('test_id', $testData['id'])->get()->toArray();
        $count = 0;
        foreach ($questionsData as $questionItem){
            $name = 'question'.$questionItem['id'];
//            echo $requests->$name; echo '<br>';
//            echo $questionItem['correct_answer'];
//            echo '<br>';
            if($questionItem['correct_answer'] == $requests->$name){
                $count++;
            }
//            $name = 'question'.$questionItem['id'];
//            if($questionItem['correct_answer'] != $requests->$name){
//                $count++;
//            }
        }
        return view('user.pages.result')->with(['result'=>$count]);
    }

    public function getResult(){
       return view('user.pages.result');
    }
}
