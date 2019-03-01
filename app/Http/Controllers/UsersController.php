<?php

namespace App\Http\Controllers;

use App\Message\SmsMessage;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show(User $user, SmsMessage $smsMessage)
    {
        return view('users.show', [
            'user' => $user
        ]);
    }
}
