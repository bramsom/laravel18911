<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Laravel\Prompts\password;
use App\Models\User;

class Registercontroller extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:225',
            'password'=>'required|string|min:8',
        ]);
        $user = User::create($request->all());
        return response($user,200);
    }

}
