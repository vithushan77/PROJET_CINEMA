<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="about.php">Réservation</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Films<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.php">A l'affiche</a></li>
                        <li class="active"><a href="sidebar-right.php">Prochainement</a></li>
                    </ul>
                </li>
                <li><a href="contact.php">Contact</a></li>
                <?php if(empty($_SESSION))
               {?>
                <li><a class="btn" href="signin.php">Connexion / Inscription</a></li>

                <?php } if (isset($_SESSION['mail'])) {
                        ?>
                        <li><a class="btn" href="profile.php">Mon compte</a></li>
                        <li><a class="btn" href="include/deconnexion.php">Déconnexion</a></li>

                    <?php } ;?>


            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

</body>
</html>