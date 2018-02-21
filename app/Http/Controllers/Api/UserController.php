<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;

class UserController extends Controller
{
    public $successStatus      = 200;
    public $unauthorizedStatus = 401;

    /**
     * login api
     * @return json
     */
    public function login()
    {

        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user             = Auth::user();
            $success['token'] = $user->createToken('MyApp')->accessToken;
            return response()->json(['success' => $success],
                    $this->successStatus);
        } else {
            return response()->json(['error' => 'Unauthorised'],
                    $this->unauthorizedStatus);
        }
    }

    /**
     * Register api
     * @return json
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),
                [
                'name' => 'required|string|min:3|max:255|unique:users',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed|max:255',
                'password_confirmation' => 'required|same:password',
                'age' => 'required|integer|min:8|max:100',
                'profession' => 'required|string|max:255',
                'town' => 'required|string|max:255'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()],
                    $this->unauthorizedStatus);
        }

        $input               = $request->all();
        $input['password']   = bcrypt($input['password']);
        $input['accessType'] = 0;
        $user                = User::create($input);
        $success['token']    = $user->createToken('MyApp')->accessToken;
        $success['name']     = $user->name;

        return response()->json(['success' => $success], $this->successStatus);
    }

    /**
     * details api
     * @return json
     */
    public function details()
    {
        $user = Auth::user();

        return response()->json(['success' => $user], $this->successStatus);
    }
}