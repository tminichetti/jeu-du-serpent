<?php
class Player
{
    public int $case;
    public string $name;
    public bool $play;

    public function __construct(string $name, ?bool $_play = false)
    {
        $this->case = 0;
        $this->name = $name;
        $this->play = $_play;
    }
}

function showNamePlayer(array $allPlayers)
{
    foreach ($allPlayers as $player) {
        if ($player->play) {
            echo $player->name;
        }
    }
}
