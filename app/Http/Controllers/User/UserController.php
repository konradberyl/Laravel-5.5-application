<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use App\Http\Requests\User\UpdateUserRequest;

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
     * @return string
     */
    public function insertNew(UserService $userService)
    {
        $userService->insertStaticUser();

        return redirect('users');
    }

    /**
     * Return update  user form
     * @param UserService $userService
     * @return string
     */
    public function updateForm(UserService $userService)
    {
        $user = Auth::user();
        return view('user.update', ['user' => $user]);
    }

    /**
     * Update user account data
     * @param UserService $userService
     */
    public function update(UpdateUserRequest $request, UserService $userService)
    {
        $user = Auth::user();

        $data = $userService->prepareUpdateUserData($request);

        $user->update($data);

        return redirect('user/account')->with('success', 'Account updated!');
    }
}