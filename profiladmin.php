<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Cinéma Dugny</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'include/navbar.php'; ?>


<section class="user-profile section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
                <div class="sidebar">
                    <!-- User Widget -->
                    <div class="widget user">
                        <!-- User Image -->
                        <div class="image d-flex justify-content-center">
                            <img src="./assets/images/will1.jpg" alt="" class="">
                        </div>
                        <!-- User Name -->
                        <h5 class="text-left"><?php echo $_SESSION["mail"]?></h5>

                    </div>
                    <!-- Dashboard Links -->
                    <div class="widget user-dashboard-menu">
                        <ul>
                            <li>
                                <a href="./include/deconnexion.php"><i class="fa fa-cog"></i> Deconnexion</a>
                            </li>
                            <li> <form method="post" action="./Traitement/traitementsupprimer.php">
                                    <a href="Traitement/traitementsupprimer.php" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Supprimer le compte</a>
                                </form>
                            </li>
                        </ul>
                    </div>

</body>
</html>