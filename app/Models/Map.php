<?php
declare(strict_types=1);

namespace App\Models;

class Map implements \JsonSerializable
{
    /** @var Node[] */
    private array $nodes;

    /** @var Tile[] */
    private array $tiles;

    private array $nodesHashTable = [];//@todo Not super happy about exposing this
    private array $tilesHashTable = [];//@todo Not super happy about exposing this

    /**
     * Map constructor.
     * @param Node[] $nodes
     * @param Tile[] $tiles
     */
    public function __construct(array $tiles)
    {
        //$this->nodes = $nodes;
        $this->tiles = $tiles;
    }


    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function getTiles(): array
    {
        return $this->tiles;
    }

    public function getTilesByHashTable(): array
    {
        if (!count($this->tilesHashTable)) { // lazy loading
            foreach ($this->getTiles() as $tile) {
                $this->tilesHashTable[$tile->getX()][$tile->getY()] = $tile;
            }
        }
        return $this->tilesHashTable;
    }

    public function getNodesByHashTable(): array
    {
        if (!count($this->nodesHashTable)) { // lazy loading
            foreach ($this->getNodes() as $node) {
                $this->nodesHashTable[$node->getX()][$node->getY()] = $node;
            }
        }
        return $this->nodesHashTable;
    }

    /**
     * @param int $number
     * @return Tile[]
     */
    public function getTilesWithNumber(int $number): array
    {
        $tiles = [];
        foreach ($this->getTiles() as $tile) {
            if ($tile->getNumber() === $number) {
                $tiles[] = $tile;
            }
        }
        return $tiles;
    }

    /**
     * returns an array of tile objects that are a specified distance away on the grid from a specific tile.
     * in effect, this would return a ring of tile objects on the board
     * @param Tile $origin
     * @param int $radius
     * @return Tile[]
     */
     public function getTileRingInRadius(Tile $origin, int $radius): array
    {
        $tempTiles = [];
        foreach($this->tiles AS $tile)
        {
            if($origin->getDistanceFrom($tile) === $radius)
            {
                $tempTiles[] = $tile;
            }
        }
        return $tempTiles;
    }

    /**
     * gets all tiles within a radius range of the origin tile using a spiral method.
     * @param Tile $origin
     * @param int $radius
     * @return Tile[]
     */
     public function getTilesWithinRadius(Tile $origin, int $radius): array
    {
        $tempTiles = [$origin];
        for($i = 1; $i <= $radius; $i++)
        {
            $tempTiles[] = $this->getTileRingInRadius($origin, $i);
        }
        return $tempTiles;
    }

    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        return [
//            'nodes' => $this->nodes,
            'tiles' => $this->tiles,
            ];

    }
}
