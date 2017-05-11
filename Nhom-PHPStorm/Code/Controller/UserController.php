<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Redirect;
use App\User;

class UserController extends Controller
{
    public function setAdmin($id_user){
    	DB::table('users')
            ->where('id_user', $id_user)
            ->update(['id_decentralization' => 1]);
        return redirect('user');
    }

    public function setQuestionaire($id_user){
    	DB::table('users')
            ->where('id_user', $id_user)
            ->update(['id_decentralization' => 2]);
        return redirect('user');
    }

    public function deleteUser($id_user){
    	DB::table('users')
            ->where('id_user', $id_user)
            ->delete();
        return redirect('user');
    }
}
