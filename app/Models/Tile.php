<?php
declare(strict_types=1);

namespace App\Models;


class Tile
{

    /** @var Node[] */
    private array $nodes;
    private Token $number;
    private int $x;
    private int $y;
    private int $type;


    public function __construct(int $x, int $y) //--> eventually new tile( 0 ,0 , type5,token, node,x6)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getNumber(): Token
    {
        return $this->number;
    }

    /** @return Node[] */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function getType(): int
    {
        return $this->type;
    }

    public function setType(int $type): void
    {
        $this->type = $type;
    }

    public function findEdges(Map $map): array
    {
        $hashtable = $map->getTilesByHashTable();

        $doubleWidthCoordinates = [ // [x , y]
            [+2, 0], [+1, -1], [-1, -1],
            [-2, 0], [-1, +1], [+1, +1],
        ];

        $tiles = [];

        foreach ($doubleWidthCoordinates as $coord) {
            [$y, $x] = $coord;
            if (isset($hashtable[$this->getX() + $x][$this->getY() + $y])) {
                $tiles[] = $hashtable[$this->getX() + $x][$this->getY() + $y];
            }
        }

        return $tiles;
    }
}
