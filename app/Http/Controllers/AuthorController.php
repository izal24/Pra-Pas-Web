<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthorController extends Controller
{
    public function index()
{
    return view('layouts.author.all', [
        "author" => Author::all(),
    ]);
}

public function show($authors)
{
    return view('layouts.author.detail', [
        'author' => Author::find($authors),
    ]);
}
}