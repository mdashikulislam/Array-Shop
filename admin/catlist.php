<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
?>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Sub Category List</h2>
                	<div class="block">
                		<form action="" method="post">
                			<label for="category">Category: </label>
		                		<select name="category" id="" style="width: 200px;">
		                			<option value="">Select One</option>
		                			<?php
		                				$catQuery = "select * from category";
		                				$catShow = $db->select($catQuery);
		                				if ($catShow) {
		                					while ($catResult = $catShow->fetch_assoc()) {
		                			?>
		                			<option value="<?php echo $catResult['id'];?>"><?php echo $catResult['name'];?></option>
		                			<?php } } ?>
		                		</select>
		                	<button name="submit">Submit</button>
                		</form>
                	</div>
                <div class="block">
                 	<?php 
							if (isset($_GET['delcat'])) {
								$del = $_GET['delcat'];
								$delQuery = "DELETE FROM tbl_sub_cat WHERE id = $del";
								$delPost = $db->delete($delQuery );
								if ($delPost) {
									 echo "<p class='message success'>Delete Successfully</p>";  
								}else{
	 							echo "<p class='message error'>Sub Category not Delete</p>"; 
								}
							}
							
						?>     
                    <table class="data display datatable" id="example">
					<thead>
						
						<tr>
							<th>Serial No.</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					
					</thead>
					<tbody>
						
						<?php
							if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								$cat_id = $_POST['category'];
								$subCatQuery = "select * from tbl_sub_cat where cat_id = $cat_id";
								$subCatPost = $db->select($subCatQuery);
								if ($subCatPost) {
									$i = 0;
									while ($subCatResult = $subCatPost->fetch_assoc()) {
										$i++;
							
						?>
						<tr class="odd gradeX">
							<td><?php echo $i; ?></td>
							<td><?php echo $subCatResult['name']; ?></td>
							<td><a href="editcat.php?subcat=<?php echo $subCatResult['id'];?>">Edit</a> || <a href="?delcat=<?php echo $subCatResult['id'];?>" onclick="return confirm('Are you sure want to Delete?');">Delete</a></td>
						</tr>
						<?php }}} ?>
					</tbody>
				</table>
               </div>
              
            </div>
        </div>
        
<script type="text/javascript">

    $(document).ready(function () {
        setupLeftMenu();

        $('.datatable').dataTable();
        setSidebarHeight();
    });
</script>
<?php 
    include 'inc/footer.php';
?>