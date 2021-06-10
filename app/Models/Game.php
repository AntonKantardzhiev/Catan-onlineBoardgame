<?php
declare(strict_types=1);

namespace App\Models;


use Psy\Util\Json;
use Ramsey\Uuid\Guid\Guid;

class Game implements \JsonSerializable
{
    private const MAX_PLAYERS = 4;
    private const SETUP_STATE = 5;
    private const STANDARD_PLAY_STATE = 10;
    private const VICTORY_STATE = 15;

    private string $gameIdentifier; //this Guid value is a unique identifier for this game.
    /** @var Player[] */
    private array $players; //all the players in the current game
    private int $currentPlayerIndex; //array index of the player whose turn it currently is.
    private int $currentGameState;
    private Map $map;
    private Bank $bank;
    /** @var Card[] */
    private array $cards;

    private function __construct(string $identifier, Player $player1, Player $player2, Player $player3, Player $player4, int $state = self::SETUP_STATE)
    {
        $this->gameIdentifier = $identifier;

        //add players to array
        //we use an array because it makes things easier when we loop through turns.
        $this->players[] = $player1;
        $this->players[] = $player2;
        $this->players[] = $player3;
        $this->players[] = $player4;

        //generate board
        $mapGenerator = new MapGenerator();
        $this->map = $mapGenerator->createMap();

        $this->currentGameState = $state;
    }

    public static function loadGameFromJson(string $json): Game
    {
        //TODO: get relevant information from Json
        // convert input json data into an associative array
        $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
        $identifier = $data['identifier'];
        $gameState = $data['currentGameState'];
        $users = [];

        // TODO: convert user data into players...
        // here's some placeholder code, since we do need players for the constructor
        for ($i = 0; $i < self::MAX_PLAYERS; $i++)
        {
            //a lot of nonsense
            $users[] = new Player('foo', 'bar', 0, [], 'bloop', [], []);
        }
        // TODO: convert map data into actual map...

        //TODO: initialize game from input json file and return
        $newGame = new Game($identifier, $users[0], $users[1], $users[2], $users[3], $gameState);

        return $newGame;
    }


    public static function createNewGame(string $identifier, Player $player1, Player $player2, Player $player3, Player $player4): Game
    {
        $newGame = new Game($identifier, $player1, $player2, $player3, $player4);
        //TODO: initialization stuff

        //TODO: separate this off from the constructor and into pieces to facilitate the loading system?
        //TODO: create deck

        //TODO: create bank

        //TODO: some more initialization stuff.

        //TODO: create save file and store all relevant data.

        return $newGame;

    }

    private function setState(int $state)
    {
        $this->currentGameState = $state;
    }
    private function saveGameStateToJson(): bool
    {
        //TODO: implement logic for this function
        // idea: this function should try to
    }


    /**
     * @inheritDoc
     */
    public function jsonSerialize()
    {
        return [
            'identifier' => $this->gameIdentifier,
            'players' => $this->players,
            'currentPlayerIndex' => $this->currentPlayerIndex,
            'currentGameState' => $this->currentGameState,
            'map' => $this->map,
            'bank' => $this->bank,
            'cards' => $this->cards,
        ];
    }
}
