<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserArticlesController extends Controller
{
    public function index(User $user)

    {
        return view('user.articles', [
            'user' => $user
        ]);
    }
}
