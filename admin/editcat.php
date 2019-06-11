<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
?>
    <style>
        .message{
            width: 90%;
            font-size: 18px;

        }
        .error{
            background: red;
        }
        .success{
            background: green;
        }
    </style>
        <div class="grid_10">
            <div class="box round first grid">
                <h2>Add Sub New Category</h2>
               <div class="block copyblock">
                <?php
                    if (isset($_POST['submit'])) {
                        $id =  $_GET['subcat'];
                        $subCat = $_POST['subcat'];
                        if (empty( $subCat)) {
                           echo "<p class='message error'>Feild Must not be empty</p>"; 
                        }else{
                            $subCatQuerys = "UPDATE  tbl_sub_cat SET name= '$subCat' where id = $id";
                            $subCatShows = $db->update($subCatQuerys);
                            if ($subCatShows) {
                               echo "<p class='message success'>Sub Category Updated</p>";  
                            }else{
                                echo "<p class='message success'>Sub Category Not Updated!!</p>"; 
                            }
                        }
                    }
                ?>
                 <form action="" method="POST">
                    <table class="form">				
                        <tr>
                            <td>
                                <?php 
                                   $id =  $_GET['subcat'];
                                   $subCatQuery = "select * from tbl_sub_cat where id =$id ";
                                   $subCatPost = $db->select( $subCatQuery);
                                   if($subCatPost){
                                        while ($subCatResult = $subCatPost->fetch_assoc()) {

                                 ?>
                                <input type="text" name="subcat" value="<?php echo $subCatResult['name'];?>" placeholder="Enter Sub Category Name..." class="medium" />
                            <?php }}?>
                            </td>
                        </tr>
						<tr> 
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
 <?php 
    include 'inc/footer.php';
?>       