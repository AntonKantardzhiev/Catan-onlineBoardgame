<?php
declare(strict_types=1);

namespace App\Models;


class Tile
{
    private Token $number;

    /** @var Node[] */
    private array $nodes;

    private int $x;
    private int $y;
    private int $type;

    public function __construct(int $x, int $y,int $type, Token $number, Node $node1, Node $node2, Node $node3, Node $node4, Node $node5, Node $node6) //new tile( 0 ,0 , 5, node,x6)
    {
        $this->x = $x;
        $this->y = $y;
        $this->type= $type;
        $this->number = $number;
        $this->nodes = [
            $node1,
            $node2,
            $node3,
            $node4,
            $node5,
            $node6,
        ];
    }

    public function getNumber(): Token
    {
        return $this->number;
    }

    /** @return Node[] */
    public function getNodes() : array
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

    public function findEdges(Map $map): array
    {
        $hashtable = $map->getTilesByHashTable();

        $doubleWidthCoordinates = [ // [x , y]
            [+2,  0], [+1, -1], [-1, -1],
            [-2,  0], [-1, +1], [+1, +1],
        ];

        $tiles = [];

        foreach($doubleWidthCoordinates AS $coord) {
            list($y, $x) = $coord;
            if(isset($hashtable[$this->getX() + $x][$this->getY() + $y])) {
                $tiles[] = $hashtable[$this->getX() + $x][$this->getY() + $y];
            }
        }

        return $tiles;
    }
}
