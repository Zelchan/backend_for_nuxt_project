<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\CatFact;

class CatController extends Controller
{
    public function getCatFact()
    {
        $catFact = json_decode(Http::get('https://meowfacts.herokuapp.com/')->body())->data[0];
        CatFact::updateOrCreate([
            'fact' => $catFact,
            'user_id' => 1
        ]);
        return response()->json($catFact , 200);
    }

    public function getCatFacts($count = 10)
    {
        return response()->json(CatFact::query()->orderBy('created_at','desc')->limit($count)->get(), 200);
    }
}
