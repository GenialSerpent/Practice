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
    public function register(Request $request) {
        $request->validate([
            'firstNane' => ['required', 'string', 'max:20'],
            'lastNane' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:6', 'max:255', 'confirmed'],
        ], [
            'firstName.required' => 'Введіть ім\'я!',
            'firstName.string' => 'Ім\'я має містити хоча б 1 символ!',
            'firstName.max' => 'Перевищена максимальна кількість символів!',

            'lastName.required' => 'Введіть прізвище!',
            'lastName.string' => 'Прізвище має містити хоча б 1 символ!',
            'lastName.max' => 'Перевищена максимальна кількість символів!',

            'email.required' => 'Введіть електронну пошту!',
            'email.string' => 'Введено некоректну електронну пошту!',
            'email.email' => 'Введено некоректну електронну пошту!',
            'email.max' => 'Перевищена максимальна кількість символів!',
            'email.unique' => 'Ця пошта вже зареєстрована!',

            'password.required' => 'Введіть пароль',
            'password.string' => 'Пароль має містити хоча б 1 символ!',
            'password.min' => 'Пароль повинен містити мінімум 6 символів!',
            'password.max' => 'Перевищена максимальна кількість символів!',
            'password.confirmed' => 'Пароль не підтверджено!',
        ]);
        $newUser = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return view('user.register', compact('newUser'));
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'password.required' => 'Введіть пароль',
            'email.required' => 'Введіть електронну пошту!',
            'email.email' => 'Введено некоректну електронну пошту!',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['Пошта та/або пароль введені некоректно або користувач не зареєстрований'],
            ]);
        }
        return view('user.login');
    }
    public function logged() {
        return view('user.logged');
    }

}
