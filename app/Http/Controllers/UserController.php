<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller {
    public function sign_in(Request $request) {
        return view('sign_in');
    }
}
