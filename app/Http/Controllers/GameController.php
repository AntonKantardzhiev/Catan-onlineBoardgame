<?php

namespace App\Http\Controllers;

use App\Events\DiceRoll;
use App\Models\Map;
use App\Models\MapGenerator;
use App\Models\Roll;
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

    public function rollDice(Request $request): array
    {
        $diceRoll = new Roll();

        //TODO code to deal with the effects of the roll

        event(new DiceRoll($request->input('username'), $diceRoll));
        return ['success'=>true];
    }

}
