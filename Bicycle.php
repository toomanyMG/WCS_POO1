<?php


class Bicycle
{

    private int $nbWheels = 2;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 1;
    private bool $hasLuggageRack;

    public function __construct(string $color, bool $hasLuggageRack)
    {
        $this->color = $color;
        $this->hasLuggageRack = $hasLuggageRack;
    }


    public function forward()
    {
        $this->currentSpeed = 15;
    }

    public function brake()
    {
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
        }
    }
}
