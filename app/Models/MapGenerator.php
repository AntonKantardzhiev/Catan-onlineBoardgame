<?php
declare(strict_types=1);

namespace App\Models;


class MapGenerator
{
    // 0 = desert(1) , 1= brick(3) ,2=wood(4), 3=ore(3), 4=sheep(4), 5=wheat(4),
    private array $types = [0, 1, 1, 1, 2, 2, 2, 2, 3, 3, 3, 4, 4, 4, 4, 5, 5, 5, 5];
    private array $tiles = [];
    private array $nodes = [];
    public const RADIUS = 2;//does not include water tiles. for nodes which require 3 tiles this is needed however... water Tiles?
    public const NODE_COUNT = 54;

    public function createMap(): Map
    {
        //TODO: complete logic and all functions needed to build a complete map.
        return $this->createRandomTiles();
    }
    public function createRandomTiles(): Map
    {
        shuffle($this->types);

        for ($i = 0; $i <= self::RADIUS; $i++) {

            $steps = self::RADIUS - ceil($i / 2);

            for ($j = 0; $j <= $steps; $j++) {

                $this->tiles[] = new Tile($i, $j * 2 + ($i % 2));
                $this->tiles[] = new Tile($i, -1 * ($j * 2 + ($i % 2)));
                $this->tiles[] = new Tile(-$i, $j * 2 + ($i % 2));
                $this->tiles[] = new Tile(-$i, -1 * ($j * 2 + ($i % 2)));
            }
        }

        $temp = array_unique($this->tiles);
        $this->tiles = $temp;

        $counter = 0;
        /** @var Tile $tile */
        foreach ($this->tiles as $tile) {
            $tile->setType($this->types[$counter]);
            $counter++;
        }
        return new Map($this->tiles);
    }

    //public function createNodes()
    //    //{
    //    //    foreach ($this->tiles as $tile) {
    //    //
    //    //
    //    //    }
    //    //    echo count($this->nodes);
    //    //}
}
