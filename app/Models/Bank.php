<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    private int $brick;

    private int $ore;

    private int $lumber;

    private int $grain;

    private int $wool;

    private string $lobby;

    /**
     * @var Card[] $cards
     */
    private array $cards;


    /**
     * Bank constructor.
     * @param int $brick
     * @param int $ore
     * @param int $lumber
     * @param int $grain
     * @param int $wool
     * @param string $lobby
     */
    public function __construct(int $brick, int $ore, int $lumber, int $grain, int $wool, string $lobby, array $cards)
    {
        $this->brick = $brick;
        $this->ore = $ore;
        $this->lumber = $lumber;
        $this->grain = $grain;
        $this->wool = $wool;
        $this->lobby = $lobby;
        $this->cards = $cards;
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
     * @return string
     */
    public function getLobby(): string
    {
        return $this->lobby;
    }

    /**
     * @param int $brick
     */
    public function setBrick(int $brick): void
    {
        $this->brick = $brick;
    }

    /**
     * @param int $ore
     */
    public function setOre(int $ore): void
    {
        $this->ore = $ore;
    }

    /**
     * @param int $lumber
     */
    public function setLumber(int $lumber): void
    {
        $this->lumber = $lumber;
    }

    /**
     * @param int $grain
     */
    public function setGrain(int $grain): void
    {
        $this->grain = $grain;
    }

    /**
     * @param int $wool
     */
    public function setWool(int $wool): void
    {
        $this->wool = $wool;
    }

    /**
     * @return Card[]
     */
    public function getCards(): array
    {
        return $this->cards;
    }

}
