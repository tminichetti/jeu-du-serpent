<?php 

use PHPUnit\Framework\TestCase;

final class playerTests extends TestCase
{
    public function testAddCase()
    {
        $player = new Player("TestPlayer");
        $player->addCase(7);
        $this->assertEquals(
            $player->getCase(),
            7
        );
    }

    public function testMalus()
    {
        $player = new Player("TestPlayer");
        $player->addCase(37);
        $this->assertEquals(
            $player->getCase(),
            12
        );
    }

    public function testBonus()
    {
        $player = new Player("TestPlayer");
        $player->addCase(20);
        $this->assertEquals(
            $player->getCase(),
            35
        );
    }

    public function testMore50()
    {
        $player = new Player("TestPlayer");
        $player->addCase(70);
        $this->assertEquals(
            $player->getCase(),
            25
        );
    }

    public function testPlayerIsWinner()
    {
        $player = new Player("TestPlayer");
        $player->addCase(50);
        $this->assertTrue(
            $player->isWinner()
        );
    }
}