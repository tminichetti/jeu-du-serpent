<?php
require 'bonus-trap.php';
class Player
{
    public int $case;
    public string $name;

    public function __construct(string $name)
    {
        $this->case = 0;
        $this->name = $name;
    }

    public function addCase(int $_case)
    {
        if ($_case > 50) {
            return $this->case = 25;
        }
        return $this->case = check_case($_case);
    }

    public function getCase()
    {
        return $this->case;
    }

    public function getName()
    {
        return $this->name;
    }

    public function isWinner()
    {
        return $this->case === 50;
    }
}
