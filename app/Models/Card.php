<?php

namespace App\Models;


class Card
{

    private string $type ;
    private string $title ;
    private string $description;
    private ?string $variant;

    /**
     * Card constructor.
     * @param string $type
     * @param string $title
     * @param string $description
     */
    public function __construct(string $type, string $title, string $description, string $variant = null)
    {
        $this->type = $type;
        $this->title = $title;
        $this->description = $description;
        $this->variant = $variant;
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
