<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming you have a User model

class ApiController extends Controller
{
    public function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function getUser($id)
    {
        $user = User::find($id);
        if ($user) {
            return response()->json($user);
        } else {
            return response()->json(['error' => 'User not found'], 404);
        }
    }

    // Add more methods for other API endpoints
}

