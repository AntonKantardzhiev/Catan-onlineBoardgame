<?php

namespace App\Models;


use Exception;

class Bank implements \JsonSerializable
{
    public const  START_VALUE = 19;
    private int $brick;
    private int $ore;
    private int $lumber;
    private int $grain;
    private int $wool;
    private string $lobby;

    /**
     * @var Card[] $deck
     */
    private array $deck;


    /**
     * Bank constructor.
     * @param string $lobby
     */
    public function __construct(string $lobby, array $cards)
    {
        $this->brick = $this->ore = $this->lumber = $this->grain = $this->wool = self::START_VALUE;
        $this->lobby = $lobby;
        $this->deck = $cards;
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
    public function getDeck(): array
    {
        return $this->deck;
    }

    //@Todo depending on if we will use a database this function should change the heldBy of the card instead of popping the array;
    /**
     * @throws Exception
     * @return Card;
     */
    public function buyCard(): Card
    {

        if(empty($this->deck)){

            throw new Exception('The card deck is empty');
        }

        return array_pop($this->deck);
    }


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }
}
