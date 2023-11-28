<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CharacterController extends Controller
{
    public function index()
{
    return view('layouts.characters.all', [
        "characters" => Character::all(),
    ]);
}

public function show($characters)
{
    return view('layouts.characters.detail', [
        'character' => Character::find($characters),
    ]);
}
}