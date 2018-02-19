<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\User;
use App\Models\UserFields;

class UserDetailController extends Controller
{

    public function index($id)
    {
        $user = User::find($id);

        $details = UserFields::where('user_id',$user->id)->first();

//        dd($details);

        return view('user.details',
            ['details' => $details,'user' => $user, 'title' => 'szczegóły użytkownika']);
    }
}