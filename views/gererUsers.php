<!doctype html>
<?php session_start();?>

<html>

    <?php
        include "../includes/head.php";
        include "../includes/functions_db.php";
        require_once "../includes/functions.php";

        checkConnection();
        checkAdmin();
    ?>

    <body>
        <?php include("../includes/navbar.php"); ?>

        <div class="choixConteneur">
            <?php
                $users = get_all_users();

                foreach($users as $person){
                    include "../includes/user.php";
                }
             ?>


        </div>

    </body>

</html>
