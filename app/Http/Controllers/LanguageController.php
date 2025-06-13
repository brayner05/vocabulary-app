<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
        Language::create($request->all());
        return redirect()->to('/languages');
    }
}
