<?php

namespace App\Models;

use App\Models\Node;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Player implements \JsonSerializable
{
    use HasFactory;

    private int $id;
    private string $userName;
    private string $color;
    private int $visiblePoints;
    private int $hiddenPoints;
    private int $wool = 0;
    private int $brick = 0;
    private int $ore = 0;
    private int $lumber = 0;
    private int $grain = 0;
    private int $knightsPlayed;
    /**
     * @var Node[]
     */
    private array $nodes;

    private string $lobby;
    /**
     * @var Road[]
     */
    private array $roads ;
    /**
     * @var Card[]
     */
    private array $cards;

    /**
     * Player constructor.
     * @param string $userName
     * @param string $color
     * @param int $knightsPlayed
     * @param array $nodes
     * @param string $lobby
     * @param array $roads
     * @param array $cards
     */


    public function __construct(string $userName, string $color, int $knightsPlayed, array $nodes, string $lobby, array $roads, array $cards)
    {
        $this->userName = $userName;
        $this->color = $color;
        $this->knightsPlayed = $knightsPlayed;
        $this->nodes = $nodes;
        $this->lobby = $lobby;
        $this->roads = $roads;
        $this->cards = $cards;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }


    /**
     * @return int
     */
    public function getVisiblePoints(): int
    {
        return $this->visiblePoints;
    }

    /**
     * @param int $visiblePoints
     */
    public function setVisiblePoints(int $visiblePoints): void
    {
        $this->visiblePoints = $visiblePoints;
    }

    /**
     * @return int
     */
    public function getHiddenPoints(): int
    {
        return $this->hiddenPoints;
    }

    /**
     * @param int $hiddenPoints
     */
    public function setHiddenPoints(int $hiddenPoints): void
    {
        $this->hiddenPoints = $hiddenPoints;
    }


    /**
     * @return int
     */
    public function getKnightsPlayed(): int
    {
        return $this->knightsPlayed;
    }

    /**
     * @return int
     */
    public function getBrick(): int
    {
        return $this->brick;
    }

    /**
     * @return int
     */
    public function getOre(): int
    {
        return $this->ore;
    }

    /**
     * @return int
     */
    public function getLumber(): int
    {
        return $this->lumber;
    }

    /**
     * @return int
     */
    public function getGrain(): int
    {
        return $this->grain;
    }

    /**
     * @return int
     */
    public function getWool(): int
    {
        return $this->wool;
    }

    /**
     * @param Node[] $nodes
     */
    public function setNodes(array $nodes): void
    {
        $this->nodes = $nodes;
    }


    /**
     * @return Node[]
     */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    /**
     * @return string
     */
    public function getLobby(): string
    {
        return $this->lobby;
    }

    /**
     * @return Road[]
     */
    public function getRoads(): array
    {
        return $this->roads;
    }

    /**
     * @param array $roads
     */
    public function setRoads(array $roads): void
    {
        $this->roads = $roads;
    }


    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    private const MAX_SETTLEMENTS = 5;
    private const MAX_CITIES = 4;
    private const MAX_ROADS = 15;

    private const PRICE_ORE_FOR_CITY = 3;
    private const PRICE_GRAIN_FOR_CITY = 2;

    private const PRICE_BRICK_FOR_ROAD = 1;
    private const PRICE_LUMBER_FOR_ROAD = 1;

    private const PRICE_BRICK_FOR_SETTLEMENT = 1;
    private const PRICE_LUMBER_FOR_SETTLEMENT = 1;
    private const PRICE_WOOL_FOR_SETTLEMENT = 1;
    private const PRICE_GRAIN_FOR_SETTLEMENT = 1;

    private const PRICE_WOOL_FOR_CARD = 1;
    private const PRICE_GRAIN_FOR_CARD = 1;
    private const PRICE_ORE_FOR_CARD = 1;


    public function availableBuildingsForUser(Map $map): array{


        $placedSettlements = 0;
        $placedCities = 0;

        foreach($map->getNodes() as $node) {

            if($node->getOwnedBy() === $this && $node->isCity() === false){

                $placedSettlements ++ ;

            }

            if($node->getOwnedBy() === $this && $node->isCity() === true){

                $placedCities ++;

            }
        }

        $availableSettlements =  self::MAX_SETTLEMENTS - $placedSettlements ;
        $availableCities = self::MAX_CITIES - $placedCities ;

        return array('available_settlements' => $availableSettlements, 'available_cities' => $availableCities);

    }


    // @Todo create player property in node + getplayer method
    // @ Todo implement is city bool property
    public function canPlaceCity(Node $node, Map $map): bool
    {


        $availableBuildings = $this->availableBuildingsForUser($map);

        if($availableBuildings['available_cities']<=0){
            return false;
        }

        if($this->ore < self::PRICE_ORE_FOR_CITY || $this->grain < self::PRICE_GRAIN_FOR_CITY ){
            return false;
        }

        if($node->getOwnedBy() !== $this){
            return false;
        }
        if( $node->isCity() === true){
            return false;
        }

        return true;
    }



    public function canBuyCard(Bank $bank): bool
    {

        if($this->ore < self::PRICE_ORE_FOR_CARD || $this->wool < self::PRICE_WOOL_FOR_CARD || $this->grain < self::PRICE_GRAIN_FOR_CARD){
            return false;
        }


        if(empty($bank->getCards())){
            return false;
        }



        return true;

    }



}
