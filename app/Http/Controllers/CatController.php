<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{
    public function getCat()
    {
        return response()->json(Http::get('https://meowfacts.herokuapp.com/')->body(), 200);
    }
}
