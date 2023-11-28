<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Komik;

class KomikController extends Controller
{
    public function index(){
        return view('layouts.komik.all',[
            "komik" => Komik::all(),
        ]);
    }

    public function show($komik){
        return view('layouts.komik.detail',[
            'komik' => Komik::find($komik)
        ]);
    }
}
