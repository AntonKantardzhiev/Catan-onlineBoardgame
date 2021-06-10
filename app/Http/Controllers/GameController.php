<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\MapGenerator;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class GameController extends Controller
{
    private const JSON_LOCATION = './games/';
    private const JSON_SUFFIX = '.json';

    public function show()
    {
        $mg = new MapGenerator();
        $map = $mg->createRandomTiles();

        //testing logic for writing to json
        $json = json_encode($map);

        if (file_put_contents(self::JSON_LOCATION . 'myGame' . self::JSON_SUFFIX, $json) === false)
        {
            echo("json failed!" . PHP_EOL);
        }
        else
        {
            echo("json successfully stored!" . PHP_EOL);
        }

        return view('game', [
            'tiles' => $map->getTiles()
        ]);
    }

    public function getBoard(): string
    {
        //for testing purposes, create a temporary board here
        $mg = new MapGenerator();
        $map = $mg->createRandomTiles();

        var_dump(json_encode($map->getTiles()));
        return json_encode($map->getTiles());
    }

    public function getNodes(): array
    {
        //should return all the nodes in the current game, along with their status, owner, etc.
        return [];
    }

    public function endTurn()
    {
        //should run when a player ends their turn. the game logic should then pick out the next player, set their turn,
        //and broadcast a game state update to all players.
    }

    public function rollDice()
    {
        //should run when a player rolls the dice at the start fo their turn.
        //here, we should have branching logic to handle the resource allocation, and the robber.
        //should call multiple events, first notifying everyone of a dice roll and its result,
        //then, depending on the outcome of the roll, should call events for the robber logic, or the resource logic.
    }

    public function buyCard()
    {
        //should run when a player tries to buy a development card
        //here we should check if the player has the resources to buy a card
        //if not, maybe call an event telling them that things didn't work?
        //if they can buy a card, add a card to the player, then update their private hand.
    }

    public function playCard()
    {
        //should be called when a player tries to play a development card from their hand
        //should run the logic of the card and broadcast related events.
    }

    public function buyNode()
    {
        //should be called when a player tries to buy a node. ideally, when they click on a node.
        //depending on the node they click, we should get some different logic
        //if the node is not owned, the game should check, depending on the stage of the game, whether it is connected
    }

    public function buyRoad()
    {
        //similarly to the buynode
    }


}
