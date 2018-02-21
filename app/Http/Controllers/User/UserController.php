<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\User\UserService;

class UserController extends Controller
{

    /**
     * @param UserService $userService
     * @return string
     */
    public function index(UserService $userService)
    {
        $users = $userService->getUsers();

        return view('user.list', ['users' => $users, 'title' => 'user list']);
    }

    /**
     * Insert new user by button
     * @param UserService $userService
     * @return redirect
     */
    public function insertNew(UserService $userService)
    {
        $userService->insertStaticUser();

        return redirect('users');
    }
}