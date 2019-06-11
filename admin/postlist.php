<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
?>	
<style>
	.mt{margin-top: 10px;}
	.post .select{
		width: 200px;
        height: 25px;
	}
</style>
        <div class="grid_10">
            <div class="box round first grid">

                <h2>Post List</h2>
                
                <form action="" method="POST">
            		<div class="post mt">
            			<label for="category">Category :</label>
            			<select name="category" class="select" id="category">
                            <option value="">Select Category</option>
                            <?php
                                $category = '';
                                $catQuery = 'SELECT * FROM category';
                                $catPost = $db->select($catQuery);
                                if ($catPost){
                                    while($catResult = $catPost->fetch_assoc()){
                                    echo "<option value='".$catResult['id']."'>".$catResult['name']."</option>"; 		
                                    }}
                            ?>
                            
            			</select>
            		</div>
            		<div class="post mt">
            			<label for="subcategory">Sub Category :</label>
            			<select name="subcategory" class="select" id="subcategory">
            				<option value="">Select Sub Category</option>
            			</select>
            		</div>
            		<div class="button mt">
            			<input type="submit" value="Submit" name="submit">
            		</div>
            	</form>
                <div class="block">  
                    <table class="data display datatable" id="example">
					<thead>
						<tr>
                            <th>SL No</th>
							<th>Post Title</th>
							<th>Description</th>
							<th>Price</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php 
                            if (isset($_GET['delpost'])) {
                                $del = $_GET['delpost'];
                                $delQuery = "DELETE FROM tbl_product WHERE id = $del";
                                $delPost = $db->delete($delQuery);
                                if ($delPost) {
                                     echo "<p class='message success'>Delete Successfully</p>";  
                                }else{
                                echo "<p class='message error'>Sub Category not Delete</p>"; 
                                }
                            }
                         ?>
                        <?php
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                $cat_id = $_POST['category'];
                                $sub_cat_id = $_POST['subcategory'];
                                $postQuery = "select * from tbl_product where cat_id = $cat_id and sub_cat_id = $sub_cat_id";
                                $Post = $db->select($postQuery);
                                if ($Post) {
                                    $i = 0;
                                    while ($PostResult = $Post->fetch_assoc()) {
                                        $i++;
                            
                        ?>
                        <tr class="odd gradeX">
                            <td><?php echo $i;?></td>
                            <td><?php echo Format::shortTitle($PostResult['title'],40);?></td>
                            <td><?php echo Format::shortTitle($PostResult['descs'],60);?></td>
                            <td>$<?php echo $PostResult['price'];?></td>
                            <td>
                                <img style="widtd: 60px;height: 40px;" src="<?php echo $PostResult['main_image'];?>" alt="">
                            </td>
                            <td>
                                <a href="editpost.php?id=<?php echo $PostResult['id'];?>">Edit</a> || <a href="?delpost=<?php echo $PostResult['id'];?>" onclick="return confirm('Are you sure want to Delete?');">Delete</a></td>
                            </th>
                        </tr>
                    <?php }}} ?>
					</tbody>
				</table>
	
               </div>
            </div>
        </div>
        <style>

        </style>
	<script type="text/javascript">
        $(document).ready(function () {
            setupLeftMenu();
            $('.datatable').dataTable();
			setSidebarHeight();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#category').change(function(){
                var catid = $(this).val();
                if (catid) {
                    $.ajax({
                        type:'POST',
                        url:'ajaxData.php',
                        data:'id='+catid,
                        success:function(html){
                            $('#subcategory').html(html);
                        }
                    });
                }
            });
        });
    </script>
<?php 
    include 'inc/footer.php';
?>
