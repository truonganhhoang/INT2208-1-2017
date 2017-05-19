<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;

class PageController extends Controller
{
    //
    public function home() {
        if (Auth::check()) return Redirect::to('/list');
    	return view("templates.home");
    }

    public function list() {
        if (Auth::guest()) return Redirect::to('/');
        $type = DB::table('questionType')->get();

        $count = DB::table('questionType')
            ->select(DB::raw('level, COUNT(*) as count'))
            ->groupBy('level')->get();

    	return view("templates.list")->with([
            'type' => $type, 
            'count' => $count
        ]);
    }

    public function questionType1(Request $request,$type) {
        if (Auth::guest()) return Redirect::to('/');
        $input = $request->all();
        $question = DB::table('questionaires')
            ->where('id_type', '=', $type)->inRandomOrder()->first();
        // echo $input;
    	return view("templates.questionType1")->with([
            'question' => $question,
            'type' => $type
        ]);
        // return $question;
    }

    public function user() {
        if (Auth::guest()) return Redirect::to('/');
        $user = DB::table('users')->get();
        return view("templates.user")->with([
            'user' => $user
        ]);
    }

    

    public function addQuestion() {
        if (Auth::guest() || Auth::user()->id_decentralization == 3) return Redirect::to('/');

        $type = DB::table('questionType')->get();
        return view("templates.addQuestion")->with([
            'type' => $type
            // 'typeList' => $typeList
        ]);
    }
}
