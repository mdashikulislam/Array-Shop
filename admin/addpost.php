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
                <h2>Add New Product</h2>
                <div class="block">
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $title = $_POST['title'];
                        $category = $_POST['category'];
                        $subcategory = $_POST['subcategory'];
                        $price = $_POST['price'];
                        $desc = $_POST['desc'];
                        $link = $_POST['link'];


                        //image validation
                        $permited  = array('jpg', 'jpeg', 'png', 'gif');
                        $mainImageName = $_FILES['main_image']['name'];
                        $main_file_size = $_FILES['main_image']['size'];
                        $main_file_temp = $_FILES['main_image']['tmp_name'];

                        $uploaded_image = "upload/".$mainImageName;

                        $permited1  = array('jpg', 'jpeg', 'png', 'gif');
                        $image1Name = $_FILES['image1']['name'];
                        $image1_file_size = $_FILES['image1']['size'];
                        $image1_file_temp = $_FILES['image1']['tmp_name'];
                        $uploaded_image1 = "upload/".$image1Name;

                        $permited2  = array('jpg', 'jpeg', 'png', 'gif');
                        $image2Name = $_FILES['image2']['name'];
                        $image2_file_size = $_FILES['image2']['size'];
                        $image2_file_temp = $_FILES['image2']['tmp_name'];
                        $uploaded_image2 = "upload/".$image2Name;

                        if (empty($title)||empty($category)||empty($subcategory)||empty($price)||empty($desc)||empty($link)||empty($mainImageName)||empty($image1Name)||empty($image2Name)) {
                           echo "<p class='message error'>Feild Must Not be empty</p>"; 
                        }elseif ($main_file_size >1048567) {
                             echo "<p class='message error'>Image Size should be less then 1MB!</p>";
                        }
                        elseif ($image1_file_size >1048567) {
                             echo "<p class='message error'>Image Size should be less then 1MB!</p>";
                        }
                        elseif ($image2_file_size >1048567) {
                             echo "<p class='message error'>Image Size should be less then 1MB!</p>";
                        } 
                         else{
                            move_uploaded_file($main_file_temp, $uploaded_image);
                            move_uploaded_file($image1_file_temp, $uploaded_image1);
                            move_uploaded_file($image2_file_temp, $uploaded_image2);
                            
                            $query = "INSERT INTO tbl_product(title,price,main_image,link,image1,image2,descs,cat_id,sub_cat_id)  VALUES('$title','$price','$uploaded_image','$link','$uploaded_image1','$uploaded_image2','$desc','$category','$subcategory')";
                            $inserted_rows = $db->insert($query);
                            if ($inserted_rows) {
                             echo "<p class='message success'>Prduct Inserted Successfully.</p>";
                            }else {
                             echo "<p class='message error'>Prduct Not Inserted !</p>";
                            }
                        }
                    }
                ?>

                 <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                                <select id="category" name="category" style="width: 200px;">
                                     <option >Select One</option> 
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
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Sub Category</label>
                            </td>
                            <td>
                                <select id="subcategory" name="subcategory" style="width: 200px;">
                                    <option >Select One</option>  
                                    
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Price</label>
                            </td>
                            <td>
                                <input type="text" name="price" placeholder="Enter Price..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Description</label>
                            </td>
                            <td>
                                <textarea  id="" cols="70" rows="7" name="desc">
                                    
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Link</label>
                            </td>
                            <td>
                                <input type="text" name="link" placeholder="Enter Website Link..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Main Image</label>
                            </td>
                            <td>
                                <input type="file" name="main_image" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Image 1</label>
                            </td>
                            <td>
                                <input type="file" name="image1" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Image 2</label>
                            </td>
                            <td>
                                <input type="file" name="image2" />
                            </td>
                        </tr>
						<tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
<style type="text/css">
        #tinymce{font-size:15px !important;}
    </style>        
<script src="js/tiny-mce/jquery.tinymce.js" type="text/javascript"></script>
<script src="js/jquery-ui/jquery.ui.datepicker.min.js" type="text/javascript"></script>       

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
<?php include 'inc/footer.php'; ?>