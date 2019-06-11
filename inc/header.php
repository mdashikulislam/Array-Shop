<?php
include "config/config.php";
include "lib/Database.php";
include "helpers/Format.php";
?>
<?php
    $db = new Database();
?>


<html>
<head>
<title>Array Shop</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Elite Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />	
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">	
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>

<!-- //for bootstrap working -->
<!--<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>-->
</head>
<body>
<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
        <!-- header-bot -->
        <div class="col-md-4 logo_agile">
            <h1><a href="index.php"><span>A</span>rray Shop </a></h1>
        </div>
        <div class="col-md-4"></div>
        <div class="col-md-4 header-middle">
			<form action="search.php" method="POST">
					<input type="search" name="search" id="search" placeholder="Search here..." required="">
					<input type="submit" value=" " name="submit">
				<div class="clearfix"></div>
			</form>
			<!--<div class="col-md-4 header-middle" id="result">
			
			</div>-->
		</div>

		<div class="clearfix"></div>
	</div>
</div>
	
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Home <span class="sr-only">(current)</span></a></li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Computer <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="product.php"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
										<?php }}?>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php 
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 order by id desc limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
											<?php } }?>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mobile<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
										<?php }}?>
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php 
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 order by id desc limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
											<?php } }?>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="product.php"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Camera <span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="product.php"><img src="images/top3.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
										<?php }}?>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php 
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 order by id desc limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
											<?php } }?>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="dropdown menu__item">
						<a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sound System<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
										<?php }}?>
											
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<?php 
												$count = "select * from tbl_sub_cat where cat_id=1";
												$rowCount = $db->select($count);
												$rowresult = mysqli_num_rows($rowCount);
												$finalrow = ceil($rowresult/2);
												$query = "select * from tbl_sub_cat where cat_id=1 order by id desc limit $finalrow";
												$subCat = $db->select($query);
												if ($subCat) {
													while ($subCatResult =$subCat->fetch_assoc() ) {

											?>
											<li><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></li>
											<?php } }?>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="product.php"><img src="images/top4.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="about.php">About</a></li>

					<li class=" menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>

		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner-top -->

<style>
	.snipcart-details a{
    font-size: 13px;
    color: #fff;
    text-decoration: none;
    position: relative;
    border: none;
    border-radius: 0;
    width: 100%;
    text-transform: uppercase;
    padding: .5em 0;
    outline: none;
    letter-spacing: 1px;
    font-weight: 600;
}
</style>