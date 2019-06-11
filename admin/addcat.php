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
                        $Cat = $_POST['category'];
                        $subCat = $_POST['subcat'];
                        if (empty( $subCat) ||empty( $Cat)) {
                           echo "<p class='message error'>Feild Must not be empty</p>"; 
                        }else{
                            $subCatQuery = "INSERT INTO tbl_sub_cat(cat_id,name) VALUES ('$Cat','$subCat')";
                            $subCatShow = $db->insert($subCatQuery);
                            if ($subCatShow) {
                               echo "<p class='message success'>Sub Category Saved</p>";  
                            }else{
                                echo "<p class='message success'>Sub Category Not Inserted!!</p>"; 
                            }
                        }
                    }
                ?>
                 <form action="" method="POST">
                    <table class="form">
                        <tr>
                            <td>
                                <select name="category" id="" style="width: 340px;">
                                    <option value="">Select Category</option>
                                    <?php
                                        $catQuery = "select * from category";
                                        $catshow = $db->select($catQuery);
                                        if ( $catshow) {
                                            while ($catResult = $catshow->fetch_assoc()) {
                                            ?> 
                                            <option value="<?php echo $catResult['id']; ?>"><?php echo $catResult['name']; ?></option>  
                                           <?php }} ?>
                                </select>
                            </td>
                        </tr>				
                        <tr>
                            <td>
                                <input type="text" name="subcat" placeholder="Enter Sub Category Name..." class="medium" />
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