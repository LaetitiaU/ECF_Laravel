<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\anime;
use App\Models\review;

class ReviewController extends Controller

{
public function create($id) {
    $anime = anime::whereId($id)->first();
    return view('new_review', compact('anime'));
}

public function store() {
    $data = request() -> validate([
        'rating' => ['required', 'integer'],
        'comment' => ['required', 'max:250'],
    ]);

    auth()->user()->reviews()->create([
        'rating' => $data['rating'],
        'comment' => $data['comment'],
    ]);

    return redirect('/anime/1');
}

}