<?php

namespace App\Models;


class Road
{
    private Node $fromNode;
    private Node $toNode;
    private Player $owner;


    public function __construct(Node $fromNode, Node $toNode)
    {

        $this->fromNode = $fromNode;
        $this->toNode = $toNode;
    }

    /**
     * @return Node
     */
    public function getFromNode(): Node
    {
        return $this->fromNode;
    }

    /**
     * @return Node
     */
    public function getToNode(): Node
    {
        return $this->toNode;
    }

    /**
     * @param Player $owner
     */
    public function setOwner(Player $owner): void
    {
        $this->owner = $owner;
    }



    /**
     * @return Player
     */
    public function getOwner(): Player
    {
        return $this->owner;
    }
}
