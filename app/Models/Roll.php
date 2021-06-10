<?php


namespace App\Models;


use Exception;

class Roll
{
    public int $firstRoll;
    public int $secondRoll;
    public int $totalRoll;

    /**
     * Create a new event instance.
     *
     * @return void
     * @throws Exception
     */
    public function __construct()
    {
        $this->firstRoll = random_int(1,6);
        $this->secondRoll = random_int(1,6);
        $this->totalRoll = $this->firstRoll + $this->secondRoll;
    }

}
