<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function movies() {

        $index = Movie::all();

        return view('movies', compact('index'));
    }
}
