<?php
require 'Game.php';
require 'Player.php';
require 'bonus-trap.php';
$game = new Game('Player1', 'Player2');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jeu du serpent</title>
</head>

<body>
    <header>
        <h1>Jeu du serpent</h1>
    </header>

    <div id="container">
        <?= $game->grid() ?>
    </div>

    <div class="scores">
        <h2>Scores</h2>
        <div class="score-list">
            <div class="score joueur1">
                <p><?= $game->getPlayer1()->getName() ?></p>
                <span id="score1"><?= $game->getPlayer1()->getCase() ?></span>
            </div>
            <div class="score joueur2">
                <p><?= $game->getPlayer2()->getName() ?></p>
                <span id="score1"><?= $game->getPlayer2()->getCase() ?></span>
            </div>
        </div>
    </div>
    <div class="roll">
        <span class="rule"><?= $game->getCurrentPlayer()->getName() ?> à toi de jouer</span>

        <div class="btn">
            <button id="roll">Lancer le dé</button>
        </div>
    </div>

    <div class="btn reset">
        <button id="reset">Recommencer la partie</button>
    </div>
</body>

</html>