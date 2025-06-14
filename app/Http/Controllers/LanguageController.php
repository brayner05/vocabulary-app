<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class LanguageController extends Controller {
    public function list(Request $request): View {
        $limit = $request->query('limit') ?? -1;

        if ($limit !== -1) {
            $languages = Language::all()->take($limit);
        } else {
            $languages = Language::all();
        }

        return view('languages', [
            'languages' => $languages
        ]);
    }

    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'string|required|max:255'
        ]);

        Language::create($request->all());
        return redirect()->to('/languages');
    }
}
