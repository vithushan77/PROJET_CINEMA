<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Contact us - Progressus Bootstrap template</title>

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

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">Commentaire</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-9 maincontent">
				<header class="page-header">
					<h1 class="page-title">Commentaires</h1>
				</header>

					<form action="../Traitement/traitementcommentaire.php">
						<div class="row">
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="Name" name="nom">
							</div>
							<div class="col-sm-4">
								<input class="form-control" type="text" placeholder="nom film" name="nom_film">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-12">
								<textarea placeholder="Type your message here..." class="form-control" rows="9" name="commentaire"></textarea>
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-sm-6 text-right">
								<input class="btn btn-action" type="submit" value="Send message">
							</div>
						</div>
					</form>

			</article>
			<!-- /Article -->


		</div>
	</div>	<!-- /container -->
	
	<section class="container-full top-space">
		<div id="map"></div>
	</section>

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
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="../assets/js/google-map.js"></script>
	

</body>
</html>