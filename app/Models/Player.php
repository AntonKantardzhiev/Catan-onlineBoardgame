<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Player
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
     * @var array
     */
    private array $roads ;
    /**
     * @var array
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
    public function getPoints(): int
    {
        return $this->points;
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
     * @return array
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
     * @return array
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
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }


}
