<?php
	include 'inc/header.php';
?>

<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
		<div class="container">
			<h3>Products</h3>
			<!--/w3_short-->
				 <div class="services-breadcrumb">
						<div class="agile_inner_breadcrumb">

						   <ul class="w3_short">
								<li><a href="index.html">Home</a><i>|</i></li>
								<li>Products</li>
							</ul>
						 </div>
				</div>
	   <!--//w3_short-->
	</div>
</div>

  <!-- banner-bootom-w3-agileits -->
	<div class="banner-bootom-w3-agileits">
	<div class="container">
         <!-- mens -->
		<div class="col-md-4 products-left">

			<div class="css-treeview">
				<h4>Categories</h4>
				<ul class="tree-list-pad">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Computer</label>
						<ul>

							<?php
							
								$query = "select * from tbl_sub_cat where cat_id=1";
								$subCat = $db->select($query);
								if ($subCat) {
									while ($subCatResult =$subCat->fetch_assoc() ) {

							?>
						
							<li><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></label>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li><input type="checkbox" id="item-1"  /><label for="item-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Mobile</label>
						<ul>
							<?php
							
								$query = "select * from tbl_sub_cat where cat_id=1";
								$subCat = $db->select($query);
								if ($subCat) {
									while ($subCatResult =$subCat->fetch_assoc() ) {

							?>
						
							<li><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></label>
							</li>
							<?php }}?>
							
						</ul>
					</li>
					<li><input type="checkbox" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Camera</label>
						<ul>
							<?php
							
								$query = "select * from tbl_sub_cat where cat_id=1";
								$subCat = $db->select($query);
								if ($subCat) {
									while ($subCatResult =$subCat->fetch_assoc() ) {

							?>
						
							<li><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></label>
							</li>
							<?php }}?>
						</ul>
					</li>
					<li><input type="checkbox"  id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sound System</label>
						<ul>
							<?php
							
								$query = "select * from tbl_sub_cat where cat_id=1";
								$subCat = $db->select($query);
								if ($subCat) {
									while ($subCatResult =$subCat->fetch_assoc() ) {

							?>
						
							<li><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i><a href="products.php?id=<?php echo $subCatResult['id'];?>"><?php echo $subCatResult['name']; ?></a></label>
							</li>
							<?php }}?>
						</ul>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-8 products-right">
            <?php
            $search = $_POST['search'];
            $query = "select * from tbl_product where title like'%$search%' order by id desc limit 10";
            $product = $db->select($query);
            if ($product){
                while ($result = $product->fetch_assoc()){
             ?>
				<div class="col-md-12 product-men">
								<div class="men-pro-item simpleCart_shelfItem">
									<div class="men-thumb-item">
										<img src="admin/<?php echo $result['main_image'];?>" alt="" class="pro-image-front">
										<img src="admin/<?php echo $result['image1'];?>" alt="" class="pro-image-back">

											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?php echo $result['id'];?>" class="link-product-add-cart">Quick View</a>
												</div>
											</div>
									</div>
									<div class="item-info-product ">
										<h4><a href="single.php?id=<?php echo $result['id'];?>"><?php echo $result['title'];?></a></h4>
										<div class="info-product-price">
											<span class="item_price">$<?php echo $result['price'];?></span>
											
										</div>
										<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
											<a href="<?php echo $result['link'];?>" target="_blank">Shop Now</a>
										</div>
																			
									</div>
								</div>
							</div>
                            <?php }}else{echo " <div class='alert alert-danger' role='alert'>
                            	<h3>No product available</h3>
                            </div>";}?>
                           
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>	
<style>
.product-men:nth-child(1){
    margin-top: 0!important;
}
.men-thumb-item img{
    padding: 0!important;
}
.men-thumb-item{
    width: 25%;
    float: left;
}
.item-info-product{
    text-align: left;
    height: 215px!important;
    padding-left: 100px!important;
}
.snipcart-details{
    width:20%;
}
.item-info-product h4{
    padding-top: 20px;
}
</style>
<!-- //mens -->
<?php
	include 'inc/footer.php';
?>