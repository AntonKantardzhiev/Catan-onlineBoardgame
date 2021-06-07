<?php
declare(strict_types=1);

namespace App\Models;


class Map
{
    /** @var Node[] */
    private array $nodes = [];

    /** @var Tile[] */
    private array $tiles = [];

    private array $nodesHashTable = [];//@todo Not super happy about exposing this
    private array $tilesHashTable = [];//@todo Not super happy about exposing this

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
}
