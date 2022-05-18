<?php

class Game
{

    private $player1;
    private $player2;

    private $player1Playing;

    public function __construct(string $_player1, string $_player2)
    {
        $this->player1 = new Player($_player1);
        $this->player2 = new Player($_player2);
        $this->player1Playing = true;
    }

    public function getPlayer1()
    {
        return $this->player1;
    }

    public function getPlayer2()
    {
        return $this->player2;
    }

    public function grid()
    {
        $player1Case = $this->player1->getCase();
        $player2Case = $this->player2->getCase();
        $html = "<div class='grid'>";
        for ($i = 1; $i < 51; $i++) {
            if ($player1Case === $i && $player2Case === $i) {
                $html .= "<div class='grid-item both'>" . $i . "</div>";
            } else if ($player1Case === $i) {
                $html .= "<div class='grid-item player1'>" . $i . "</div>";
            } else if ($player2Case === $i) {
                $html .= "<div class='grid-item player2'>" . $i . "</div>";
            } else {
                $html .= "<div class='grid-item'>" . $i . "</div>";
            }
        }
        $html .= "</div>";
        return $html;
    }

    public function getCurrentPlayer()
    {
        return $this->player1Playing ? $this->player1 : $this->player2;
    }

    public function play()
    {
        $this->getCurrentPlayer()->addCase(random_int(1, 6));
        $this->player1Playing = !$this->player1Playing;
    }

    public function getWinner()
    {
        if (!$this->player1->isWinner() && !$this->player2->isWinner())
            return false;
        if ($this->player1->isWinner())
            return $this->player1;
        if ($this->player2->isWinner())
            return $this->player2;
    }

    public function getLooser()
    {
        $winner = $this->getWinner();
        if (!$winner)
            return false;
        return $winner->getName() == $this->player1->getName() ? $this->player2 : $this->player1;
    }
}
