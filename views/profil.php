<!doctype html>
<?php session_start();?>

<html>

    <?php include "../includes/head.php"?>

    <body>
        <?php include("../includes/navbar.php"); ?>

        <h1><?php if(isset($_SESSION["login"])) echo $_SESSION["login"];?></h1>

        <div class="choixConteneur">
            <a class="scoreQuiz" href="./descriptionQuiz.php?id=#">
                <div>Titre quiz </div>
                <div>Score quiz </div>
            </a>
            <a class="scoreQuiz" href="./descriptionQuiz.php?id=#">
                <div>Titre quiz </div>
                <div>Score quiz </div>
            </a>


        </div>

    </body>

</html>