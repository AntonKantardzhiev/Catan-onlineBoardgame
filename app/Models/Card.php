<?php

namespace App\Models;


class Card
{

    private string $type ;
    private string $title ;
    private string $description;

    /**
     * Card constructor.
     * @param string $type
     * @param string $title
     * @param string $description
     */
    public function __construct(string $type, string $title, string $description)
    {
        $this->type = $type;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }


}
