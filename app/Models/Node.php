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

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

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

    public function findEdges(Map $map): void
    {
        $nodes = $map->getNodesByHashTable();

    }
}
