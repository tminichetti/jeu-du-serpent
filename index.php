<?php
require 'class.php';
$joueur1 = new Player("Kylian");
$joueur2 = new Player("Thomas");


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
        <?php include 'create-grid.php'; ?>
    </div>

    <div class="scores">
        <h2>Scores</h2>
        <div class="score-list">
            <div class="score joueur1">
                <p><?=$joueur1->name?></p>
                <span id="score1"><?=$joueur1->case?></span>
            </div>
            <div class="score joueur2">
            <p><?=$joueur2->name?></p>
                <span id="score1"><?=$joueur2->case?></span>
            </div>
        </div>
    </div>
    <div class="roll">
        <span class="rule">Joueur 1 à toi de jouer</span>

        <div class="btn">
            <button id="roll">Lancer le dé</button>
        </div>
    </div>

    <div class="btn reset">
        <button id="reset">Recommencer la partie</button>
    </div>
</body>

</html>