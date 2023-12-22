<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request): RedirectResponse
    {

        $data = $request->validate([
            'first_name' => ['required', 'min:3','max:256'],
            'last_name' => ['required', 'min:3','max:256'],
            'company' => ['min:3', 'max:1024'],
            'email' => ['required', 'email'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'password' => ['min:3', 'max:256']
        ]);


        $password = Hash::make($data['password'], [
           'rounds' => 12
        ]);

        $user = User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'company' => $data['company'],
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'address' => $data['address'],
            'password' => $password,
        ]);

        auth()->login($user);

        return to_route('home.page');
    }
}
