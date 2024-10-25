<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dictionary;

class DictionaryController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
        $word = $request->input('word');
        $definition = Dictionary::where('word', $word)->first();

        if ($definition) {
            return view('definition', ['definition' => $definition]);
        } else {
            return view('definition', ['message' => 'Kata tidak ditemukan']);
        }
    }
}
