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

    public function addCase(int $_case)
    {
        $this->case = $this->case + $_case > 50 ? 25 : $this->case + $_case;
    }

    public function getCase()
    {
        return $this->case;
    }

    public function isWinner() {
        return $this->case === 50;
    }
}

function getPlayerPlaying(array $allPlayers)
{
    foreach ($allPlayers as $player) {
        if ($player->play) {
            return $player;
        }
    }
}
