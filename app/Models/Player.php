<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected string $name;

    protected string $img;

    protected string $color;

    /**
     * Player constructor.
     * @param string $name
     * @param string $img
     * @param string $color
     */
    public function __construct(string $name, string $img, string $color)
    {
        $this->name = $name;
        $this->img = $img;
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getImg(): string
    {
        return $this->img;
    }


    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }



}
