<?php
	include 'inc/header.php';
?>

<!--/single_page-->
       <!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Single <span>Product</span></h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Single Product</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
<div class="banner-bootom-w3-agileits">
	<div class="container">
        <?php
            $id = $_GET['id'];
            $query = "select * from tbl_product where id = $id";
            $mainProduct = $db->select($query);
            if ($mainProduct){
                while ($mainResult = $mainProduct->fetch_assoc()){
                	$GLOBALS['a'] = $mainResult['sub_cat_id'];
        ?>
	     <div class="col-md-4 single-right-left ">
			<div class="grid images_3_of_2">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="admin/<?php echo $mainResult['main_image'];?>">
							<div class="thumb-image"> <img src="admin/<?php echo $mainResult['main_image'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
						<li data-thumb="admin/<?php echo $mainResult['image1'];?>">
							<div class="thumb-image"> <img src="admin/<?php echo $mainResult['image1'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>	
						<li data-thumb="admin/<?php echo $mainResult['image2'];?>">
							<div class="thumb-image"> <img src="admin/<?php echo $mainResult['image2'];?>" data-imagezoom="true" class="img-responsive"> </div>
						</li>
					</ul>
					<div class="clearfix"></div>
				</div>	
			</div>
		</div>
		<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $mainResult['title'];?></h3>
					<p><span class="item_price">$<?php echo $mainResult['price'];?></span></p>
                    <div class="description">
                        <div class="head">
                            <h2>Product Description:</h2>
                        </div>
                        <div class="desc">
                            <ul>
								<?php echo $mainResult['descs'];?>
                                
                            </ul>
                        </div>
                    </div>
					<div class="occasion-cart">
						<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                            <a href="<?php echo $mainResult['link'];?>" target="_blank">Shop Now</a>
							</div>
								<style>
                                    .snipcart-details{
                                        width: 77%!important;
                                    }
                                    .description h2{
                                        font-size: 18px;
                                        text-decoration: underline;
                                        font-weight: bold;
                                    }
                                    .description ul{
                                        margin-left: 30px;
                                        margin-top: 10px;
                                    }
                                    .description ul li{
                                        font-size: 14px;
                                    }
                                    .single-right-left h3{
                                        font-size: 18px!important;

                                    }
                                </style>
					</div>

		      </div>
	 			<div class="clearfix"> </div>
				<!-- /new_arrivals -->
                <?php }}?>
	<!-- //new_arrivals --> 
	  	<!--/slider_owl-->
	
			<div class="w3_agile_latest_arrivals">
			<h3 class="wthree_text_info">Related <span>Product</span></h3>	
					  <?php
					  	$subCatid = $GLOBALS['a'];
					  	$query = "select * from tbl_product where sub_cat_id = $subCatid order by id desc";
					  	$relProduct = $db->select($query);
					  	if ($relProduct) {
					  		while ($relProductResult = $relProduct->fetch_assoc()) {
					  		
					  ?>

					  <div class="col-md-3 product-men single">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/<?php echo $relProductResult['main_image'];?>" alt="" class="pro-image-front">
										<img src="admin/<?php echo $relProductResult['image1'];?>" alt="" class="pro-image-back">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?php echo $relProductResult['id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?id=<?php echo $relProductResult['id'];?>"><?php echo Format::shortTitle($relProductResult['title'],70);?></a></h4>
										<div class="info-product-price">
											<span class="item_price">$<?php echo $relProductResult['price'];?></span>
											
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
												<a href="<?php echo $relProductResult['link'];?>" target="_blank">Shop Now</a>
											</div>
																			
									</div>
								</div>
							</div>
						<?php }}else{
							echo " <div class='alert alert-danger' role='alert'>
                            	<h3>No product available</h3>
                            </div>";
						}?>


                       </div>
                       <style>
                       	.item-info-product{
                       		text-align: center;
                       	}
                       </style>
							<div class="clearfix"> </div>
					<!--//slider_owl-->
		         </div>
	        </div>
 </div>
<!--//single_page-->
<?php
	include 'inc/footer.php';
?>