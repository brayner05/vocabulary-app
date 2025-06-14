<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {
    public function sign_in(Request $request) {
        return view('sign_in');
    }

    public function sign_up() {
        return view('register');
    }

    public function attempt_register(Request $request) {
        $data = $request->validate([
            'name' => 'string|required|max:255',
            'email' => 'string|required|max:255',
            'password' => 'string|required|max:255'
        ]);

        $existing_user = User::all()
            ->where('email', '=', $data['email'])
            ->first();

        if ($existing_user) {
            return redirect()
                ->to('/register')
                ->withErrors(["A user with the email $data[email] already exists."])
                ->status(400);
        }

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);

        return redirect()->to('/dashboard');
    }

    public function attempt_login(Request $request) {
        $data = $request->validate([
            'email' => 'string|required|max:255',
            'password' => 'string|required|max:255'
        ]);

        $existing_user = User::all()
            ->where('email', '=', $data['email'])
            ->first();

        if (!$existing_user || !Hash::check($data['password'], $existing_user->password)) {
            return redirect()
                ->to('/sign-in')
                ->withErrors(["Invalid login credentials."])
                ->status(400);
        }

        Auth::login($existing_user);

        return redirect()->to('/dashboard');
    }
}
