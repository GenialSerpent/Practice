<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class UserController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        return view('user.index');
    }
    public function register() {

        return view('user.register');
    }
    public function login() {
        return view('user.login');
    }
    public function logged() {
        return view('user.logged');
    }

}
