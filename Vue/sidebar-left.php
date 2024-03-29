<?php require_once "../Manager/managetfilm.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Left Sidebar template - Progressus Bootstrap template</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
    <script src="../assets/js/html5shiv.js"></script>
    <script src="../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
    <?php include '../include/navbar.php'; ?>
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Affiche</li>
        </ol>

        <div class="row">

            <h1 id="test">Les Films à L'affiche</h1>

            <!-- Sidebar -->
            <aside class="sidebar sidebar-left">
                <form action="reserver.php">
                    <ul id="films">
                <?php
                $man = new managetfilm();
                $film = $man->slectfilm();

                foreach($film as $value){?>


                <div class="card" >

                    <div class="card-body col-md-4">
                        <div> <h5 class="card-title"><strong><?php echo $value['nom_film'];?></strong></h5>
                        <img src="<?php echo $value['lien_Film'];?>" class="card-img-top">
                            <input hidden value="<?php echo $value['id_film']; ?>"></div>
                        <div>

                                <h5 class="card-title"></h5><?php echo $value['resume_Film']; ?></div>

                    </div>
                </div>

</li>
<?php }?>
                    </ul>


                </form>

            </aside>
            <!-- /Sidebar -->

            <!-- Article main content -->

            <!-- /Article -->

        </div>
    </div>


    </div>
    </div>		<!-- /container -->


    <footer id="footer" class="top-space">

        <div class="footer1">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Contact</h3>
                        <div class="widget-body">
                            <p>01 48 37 74 26<br>
                                <a href="mailto:#">administration@lyceerobertschuman.com</a><br>
                                <br>
                                5 avenue du Général de Gaulle - 93440 Dugny
                            </p>
                        </div>
                    </div>

                    <div class="col-md-3 widget">
                        <h3 class="widget-title">Follow me</h3>
                        <div class="widget-body">
                            <p class="follow-me-icons clearfix">
                                <a href="https://twitter.com/EmmanuelMacron"><i class="fa fa-twitter fa-2"></i></a>
                                <a href="https://www.facebook.com/robertschumandugny"><i class="fa fa-facebook fa-2"></i></a>
                            </p>
                        </div>
                    </div>
                </div> <!-- /row of widgets -->
            </div>
        </div>

        <div class="footer2">
            <div class="container">
                <div class="row">
                </div> <!-- /row of widgets -->
            </div>
        </div>
    </footer>





    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/headroom.min.js"></script>
	<script src="../assets/js/jQuery.headroom.min.js"></script>
	<script src="../assets/js/template.js"></script>
</body>
</html>