<?php
	include 'inc/header.php';
?>

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">

			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="product.php?cat=1">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Latest <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="product.php?cat=2">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>The Biggest <span>Sale</span></h3>
						<p>Special for today</p>
						<a class="hvr-outline-out button2" href="product.php?cat=3">Shop Now </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-caption">
						<h3>Latest <span>Collection</span></h3>
						<p>New Arrivals On Sale</p>
						<a class="hvr-outline-out button2" href="product.php?cat=4">Shop Now </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
    </div> 

    <!-- /new_arrivals --> 
	<div class="new_arrivals_agile_w3ls_info"> 
		<div class="container">
		    <h3 class="wthree_text_info">New <span>Arrivals</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
                            <?php
                                $catQuery = "select * from category";
                                $catPost = $db->select($catQuery);
                                if ($catPost){
                                    while ($catResult = $catPost->fetch_assoc()){
                                    	$GLOBALS['z'] = $catResult['id'];
                            ?>
							<li><?php echo  $catResult['name'];?></li>

                            <?php }}?>
						</ul>
					<div class="resp-tabs-container">
					<!--/tab_one-->
						<div class="tab1">
                            <?php
                                $subCatQuery = "select * from tbl_product where cat_id = 1 order by id DESC limit 12";
                                $subCatPost = $db->select($subCatQuery);
                                if ($subCatPost){
                                    while ($subCatResult = $subCatPost->fetch_assoc()){
                            ?>
							<div class="col-md-3 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/<?php echo $subCatResult['main_image'];?>" alt="" class="pro-image-front">
										<img src="admin/<?php echo $subCatResult['image1'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?php echo $subCatResult['id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>

									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?id=<?php echo $subCatResult['id'];?>"><?php echo Format::shortTitle($subCatResult['title'],100);?></a></h4>
										<div class="info-product-price">
											<span class="item_price">$<?php echo $subCatResult['price'];?></span>
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
													<a href="<?php echo $subCatResult['link'];?>" target="_blank">Shop Now</a>
											</div>
																			
									</div>
								</div>
							</div>
                            <?php }}else{echo "No Product Avaliable";}?>
							<div class="clearfix"></div>
						</div>
						<!--//tab_one-->
						<!--/tab_two-->
						<div class="tab2">
                            <?php
                            $subCatQuery = "select * from tbl_product where cat_id = 2 order by id DESC limit 12";
                            $subCatPost = $db->select($subCatQuery);
                            if ($subCatPost){
                                while ($subCatResult = $subCatPost->fetch_assoc()){
                                    ?>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="admin/<?php echo $subCatResult['main_image'];?>" alt="" class="pro-image-front">
                                                <img src="admin/<?php echo $subCatResult['image1'];?>" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.php?id=<?php echo $subCatResult['id'];?>" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.php?id=<?php echo $subCatResult['id'];?>"><?php echo Format::shortTitle($subCatResult['title'],100);?></a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$<?php echo $subCatResult['price'];?></span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <a href="<?php echo $subCatResult['link'];?>" target="_blank">Shop Now</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php }}else{echo "No Product Avaliable";}?>
							<div class="clearfix"></div>
						</div>
					 <!--//tab_two-->
						<div class="tab3">

                            <?php
                            $subCatQuery = "select * from tbl_product where cat_id = 3 order by id DESC limit 12";
                            $subCatPost = $db->select($subCatQuery);
                            if ($subCatPost){
                                while ($subCatResult = $subCatPost->fetch_assoc()){
                                    ?>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="admin/<?php echo $subCatResult['main_image'];?>" alt="" class="pro-image-front">
                                                <img src="admin/<?php echo $subCatResult['image1'];?>" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.php?id=<?php echo $subCatResult['id'];?>" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.php?id=<?php echo $subCatResult['id'];?>"><?php echo Format::shortTitle($subCatResult['title'],100);?></a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$<?php echo $subCatResult['price'];?></span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <a href="<?php echo $subCatResult['link'];?>" target="_blank">Shop Now</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php }}else{echo "No Product Avaliable";}?>
							<div class="clearfix"></div>
						</div>
						<div class="tab4">

                            <?php
                            $subCatQuery = "select * from tbl_product where cat_id = 4 order by id DESC limit 12";
                            $subCatPost = $db->select($subCatQuery);
                            if ($subCatPost){
                                while ($subCatResult = $subCatPost->fetch_assoc()){
                                    ?>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="admin/<?php echo $subCatResult['main_image'];?>" alt="" class="pro-image-front">
                                                <img src="admin/<?php echo $subCatResult['image1'];?>" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="single.php?id=<?php echo $subCatResult['id'];?>" class="link-product-add-cart">Quick View</a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.php?id=<?php echo $subCatResult['id'];?>"><?php echo Format::shortTitle($subCatResult['title'],100);?></a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">$<?php echo $subCatResult['price'];?></span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <a href="<?php echo $subCatResult['link'];?>" target="_blank">Shop Now</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php }}else{echo "No Product Avaliable";}?>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	<!-- //new_arrivals -->
		<!-- //banner -->
    <div class="banner_bottom_agile_info">
	    <div class="container">
            <div class="banner_bottom_agile_info_inner_w3ls">
    	           <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/pt1.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
						<figure class="effect-roxy">
							<img src="images/pt2.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>F</span>all Ahead</h3>
								<p>New Arrivals</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
	<!-- schedule-bottom -->
	<!--<div class="schedule-bottom">
		<div class="col-md-6 agileinfo_schedule_bottom_left">
			<img src="images/mid.jpg" alt=" " class="img-responsive" />
		</div>
		<div class="col-md-6 agileits_schedule_bottom_right">
			<div class="w3ls_schedule_bottom_right_grid">
				<h3>Save up to <span>50%</span> in this week</h3>
				<p>Suspendisse varius turpis efficitur erat laoreet dapibus. 
					Mauris sollicitudin scelerisque commodo.Nunc dapibus mauris sed metus finibus posuere.</p>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Customers</h4>
					<h5 class="counter">653</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Events</h4>
					<h5 class="counter">823</h5>
				</div>
				<div class="col-md-4 w3l_schedule_bottom_right_grid1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Awards</h4>
					<h5 class="counter">45</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>-->
<!-- //schedule-bottom -->
  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
		<h3 class="wthree_text_info">What's <span>Trending</span></h3>
	
		<div class="col-md-5 bb-grids bb-left-agileits-w3layouts">
			<a href="womens.php">
			   <div class="bb-left-agileits-w3layouts-inner grid">
					<figure class="effect-roxy">
							<img src="images/iphone.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<!--<p>Upto 55%</p>-->
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="col-md-7 bb-grids bb-middle-agileits-w3layouts">
		      <a href="mens.php">
		       <div class="bb-middle-agileits-w3layouts grid">
			           <figure class="effect-roxy">
							<img src="images/home.jpg" alt=" " class="img-responsive" />
							<figcaption>
								<h3><span>S</span>ale </h3>
								<!--<p>Upto 55%</p>-->
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="mens.php">
		      <div class="bb-middle-agileits-w3layouts forth grid">
						<figure class="effect-roxy">
							<img src="images/gp.jpg" alt=" " class="img-responsive">
							<figcaption>
								<h3><span>S</span>ale </h3>
								<!--<p>Upto 65%</p>-->
							</figcaption>		
						</figure>
					</div>
				</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/grids-->
      <div class="agile_last_double_sectionw3ls">
            <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.php"><img src="images/mac.jpg" alt=" "><h4>Flat <span></span> offer</h4></a>
					
			</div>
			 <div class="col-md-6 multi-gd-img multi-gd-text ">
					<a href="womens.php"><img src="images/tab.jpg" alt=" "><h4>Flat <span></span> offer</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grids-->

	<!-- /we-offer -->
		<div class="sale-w3ls">
			<div class="container">
				<h6>We Offer Flat Discount</h6>
 
				<a class="hvr-outline-out button2" href="product.php?cat=1">Shop Now </a>
			</div>
		</div>
	<!-- //we-offer -->
<style>
    .item-info-product{
        text-align: center;
    }
</style>
<?php
	include 'inc/footer.php';
?>