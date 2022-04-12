<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;

class WordsController extends Controller
{


    public function index(Request $request)
    {
        // Validate

        return Word::
            where('user_id', auth()->user()->id)->
            where('group_id', $request->group_id)->
            paginate(15);
    }

    public function store(Request $request)
    {
        // Validate

        Word::create($request->all());

        return [
            'success' => true
        ];
    }

    public function show(Word $word)
    {
        // validate

        return $word;
    }

    public function destroy(Word $word)
    {
        // validate

        $word->delete();

        return [
            'success' => true
        ];
    }
}
