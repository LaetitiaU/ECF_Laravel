<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\anime;

class AnimeController extends Controller

{

    public function index() {
        $animes = anime::all();

        return view('welcome', ['animes' => $animes,]);

    }


public function show($id) {
    $anime = anime::whereId($id)->first();
    return view('anime', [
        "reviews" => $anime->reviews,
        "anime" => $anime,
    ]);
}

}

