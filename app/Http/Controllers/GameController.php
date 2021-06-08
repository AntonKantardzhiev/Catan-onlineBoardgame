<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\MapGenerator;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function show()
    {
        $mg = new MapGenerator();
        $map = $mg->createRandomTiles();


        return view('game', [
            'tiles'=>$map->getTiles()
        ]);
    }

}
