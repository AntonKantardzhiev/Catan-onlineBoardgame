<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Road extends Model
{
    use HasFactory;

    private Node $fromNode;
    private Node $toNode;
    private bool $isPlaced;

    /**
     * Road constructor.
     * @param bool $isPlaced
     */
    public function __construct(bool $isPlaced)
    {
        $this->isPlaced = $isPlaced;
    }

    /**
     * @return bool
     */
    public function isAvailable(): bool
    {
        return $this->isPlaced;
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




}
