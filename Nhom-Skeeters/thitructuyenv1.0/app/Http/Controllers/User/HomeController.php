<?php

namespace App\Http\Controllers\User;

use App\Models\Subject;
use App\Models\Test;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getHomePage(){
        $subjectsData = Subject::select('id', 'name')->get()->toArray();
        $testsData = Test::select('id', 'name', 'subject_id')->get()->toArray();
//        echo '<pre>';
//        print_r($testsData);
//        echo '</pre>';
        return view('user.pages.index', ['subjectsData'=>$subjectsData, 'testsData'=>$testsData]);
    }
}
