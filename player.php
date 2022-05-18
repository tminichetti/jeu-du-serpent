<?php
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
        $this->case = $this->case + $_case > 50 ? 25 : $this->case + $_case;
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
