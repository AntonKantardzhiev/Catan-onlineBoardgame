<?php
declare(strict_types=1);

namespace App\Models;


class Token
{
    private array $numbers= [  // if type = desert { continue } ==> skip deze tile.
        'A' => 5,
        'B' => 2,
        'C' => 6,
        'D' => 3,
        'E' => 8,
        'F' => 10,
        'G' => 9,
        'H' => 12,
        'I' => 11,
        'J' => 4,
        'K' => 8,
        'L' => 10,
        'M' => 9,
        'N' => 4,
        'O' => 5,
        'P' => 6,
        'Q' => 3,
        'R' => 11
    ];

    /**
     * @return array
     */
    public function getNumbers(): array
    {
        return $this->numbers;
    }
}
