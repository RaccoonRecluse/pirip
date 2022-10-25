<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function test(Request $request)
    {
        $data = $request->all() + ['access_level' => '0'];
        $test = User::create($data);
        return $test;
    }
}
