<!doctype html>

<html>

    <body>

        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="navbar-inner flex_nav">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="nav-collapse">
                        <ul class="nav">
                            <li>
                                <a class="navbar-brand" href="choixTheme.php">QueezyPeezy</a>
                            </li>
                            <li>
                                <?php
                                 if(isset($_SESSION["isAdmin"]) && $_SESSION["isAdmin"]==true){
                                     include "../includes/navbarAdmin.php";
                                 }
                                 else{
                                     include "../includes/navbarUtilisateur.php";
                                 }
                                ?>
                            </li>
                            <li>
                                <div class="dropdown navbar-brand">
                                    <?php
                                        if(isset($_SESSION["login"])){
                                            include("../includes/navbarDropdown.php") ;
                                        }
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </body>

</html>
