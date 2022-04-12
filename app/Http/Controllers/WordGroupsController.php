<?php

namespace App\Http\Controllers;

use App\Models\WordGroup;
use Illuminate\Http\Request;

class WordGroupsController extends Controller
{

    public function index(Request $request)
    {
        // validate

        return WordGroup::where('user_id', auth()->user()->id)->paginate(15);
    }

    public function show(WordGroup $wordGroup)
    {
        // Validate

        return $wordGroup;
    }

    public function store(Request $request)
    {
        // Validate

        WordGroup::create($request->all());

        return [
            'success' => true
        ];
    }

    public function destroy(WordGroup $wordGroup)
    {
        // validate

        $wordGroup->delete();

        return [
            'success' => true
        ];
    }

}
