<?php

namespace App\Http\Controllers;

use App\Models\WordGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WordGroupsController extends Controller
{

    public function index(Request $request)
    {
        return WordGroup::where('user_id', auth()->user()->id)->get();
    }

    public function show(WordGroup $wordGroup)
    {
        // Validate

        return $wordGroup;
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|min:3',
        ]);

        if ($validator->fails()) {
            return ['errors' => $validator->errors()];
        }

        WordGroup::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'description' => $request->description ?? ''
        ]);

        return [
            'success' => true
        ];
    }

    public function destroy(WordGroup $wordGroup)
    {
        $wordGroup->delete();

        return [
            'success' => true
        ];
    }

}
