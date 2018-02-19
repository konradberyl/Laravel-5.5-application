<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;

class UserController extends Controller
{

    public function index(UserRepository $userRepository)
    {
        $users = $userRepository->getAll();

        $developers = $userRepository->getDeveloperProfession();

        return view('user.list',
            ['users' => $users, 'title' => 'lista użytkowników']);
    }

    public function store(UserRepository $userRepository, Request $request)
    {
        
    }

    public function insertNew(UserRepository $userRepository)
    {
        $userRepository->createUserWithFields();

        return redirect('users');
    }
}