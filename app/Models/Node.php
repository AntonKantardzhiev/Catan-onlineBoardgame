<?php
declare(strict_types=1);

namespace App\Models;


class Node
{
    private int $x;
    private int $y;

    private Tile $tile1;
    private Tile $tile2;
    private Tile $tile3;

    private Player $ownedBy;

    private bool $isCity;

    /** @return Tile[] */
    public function getTiles() : array
    {
        return [
            $this->tile1,
            $this->tile2,
            $this->tile3,
        ];
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function findNeighbours(Map $map): void
    {
        $nodes = $map->getNodesByHashTable();
    }

    public function __toString(): string
    {
        return  $this->x .", ". $this->y;
    }


    /**
     * @return Player
     */
    public function getOwnedBy(): Player
    {
        return $this->ownedBy;
    }

    /**
     * @param Player $ownedBy
     */
    public function setOwnedBy(Player $ownedBy): void
    {
        $this->ownedBy = $ownedBy;
    }

    /**
     * @return bool
     */
    public function isCity(): bool
    {
        return $this->isCity;
    }

    /**
     * @param bool $isCity
     */
    public function setIsCity(bool $isCity): void
    {
        $this->isCity = $isCity;
    }


}
