<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class RoleLoginController extends Controller
{
    public function index()
    {
        return view('auth.choose-role');
    }
}
