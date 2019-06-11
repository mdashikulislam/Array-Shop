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
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $title = $_POST['title'];

                            $price = $_POST['price'];
                            $desc = $_POST['desc'];
                            $link = $_POST['link'];
                            $id = $_GET['id'];


                            if (empty($title)||empty($price)||empty($desc)||empty($link)){
                                echo "<p class='message error'>Feild Must Not be empty</p>";
                            }/*else if($_POST['category']){
                                if (empty($_POST['category'])||empty($title)||empty($price)||empty($desc)||empty($link)||empty($_POST['subcategory'])){
                                    echo "<p class='message error'>Feild Must Not be empty</p>";
                                }else {
                                    $category = $_POST['category'];
                                    $subcategory = $_POST['subcategory'];
                                    $query2 = "UPDATE  tbl_product SET title= '$title', price='$price ',link='$link',descs='$desc',cat_id='$category',sub_cat_id='$subcategory' where id = $id";
                                    $post2 = $db->update($query2);
                                    if ($post2) {
                                        echo "<p class='message success'>Prduct Update Successfully.</p>";
                                    } else {
                                        echo "<p class='message error'>Prduct Not Updated.</p>";
                                    }
                                }
                            }else if($_FILES['main_image']['name']){
                                if (empty($_FILES['main_image']['name'])||empty($title)||empty($price)||empty($desc)||empty($link)){
                                    echo "<p class='message error'>Feild Must Not be empty</p>";
                                }else{
                                    $permited  = array('jpg', 'jpeg', 'png', 'gif');
                                    $mainImageName = $_FILES['main_image']['name'];
                                    $main_file_size = $_FILES['main_image']['size'];
                                    $main_file_temp = $_FILES['main_image']['tmp_name'];
                                    $uploaded_image = "upload/".$mainImageName;
                                    move_uploaded_file($main_file_temp, $uploaded_image);

                                    $query3 = "UPDATE  tbl_product SET title= '$title', price='$price ',link='$link',descs='$desc',main_image='$uploaded_image' where id = $id";
                                    $post3 = $db->update($query3);
                                    if ($post3){
                                        echo "<p class='message success'>Prduct Update Successfully.</p>";
                                    }else{
                                        echo "<p class='message error'>Prduct Not Updated.</p>";
                                    }
                                }
                            }else if($_FILES['image1']['name']){
                                if (empty($_FILES['image1']['name'])||empty($title)||empty($price)||empty($desc)||empty($link)){
                                    echo "<p class='message error'>Feild Must Not be empty</p>";
                                }else{
                                    $permited1  = array('jpg', 'jpeg', 'png', 'gif');
                                    $image1Name = $_FILES['image1']['name'];
                                    $image1_file_size = $_FILES['image1']['size'];
                                    $image1_file_temp = $_FILES['image1']['tmp_name'];
                                    $uploaded_image1 = "upload/".$image1Name;
                                    move_uploaded_file($image1_file_temp, $uploaded_image1);

                                    $query4 = "UPDATE  tbl_product SET title= '$title', price='$price ',link='$link',descs='$desc',image1='$uploaded_image1' where id = $id";
                                    $post4 = $db->update($query4);
                                    if ($post4){
                                        echo "<p class='message success'>Prduct Update Successfully.</p>";
                                    }else{
                                        echo "<p class='message error'>Prduct Not Updated.</p>";
                                    }
                                }
                            }else if($_FILES['image2']['name']){
                                if (empty($_FILES['image2']['name'])||empty($title)||empty($price)||empty($desc)||empty($link)){
                                    echo "<p class='message error'>Feild Must Not be empty</p>";
                                }else{
                                    $permited2  = array('jpg', 'jpeg', 'png', 'gif');
                                    $image2Name = $_FILES['image2']['name'];
                                    $image2_file_size = $_FILES['image2']['size'];
                                    $image2_file_temp = $_FILES['image2']['tmp_name'];
                                    $uploaded_image2 = "upload/".$image2Name;
                                    move_uploaded_file($image2_file_temp, $uploaded_image2);

                                    $query5 = "UPDATE  tbl_product SET title= '$title', price='$price ',link='$link',descs='$desc',image2='$uploaded_image2' where id = $id";
                                    $post5 = $db->update($query5);
                                    if ($post5){
                                        echo "<p class='message success'>Prduct Update Successfully.</p>";
                                    }else{
                                        echo "<p class='message error'>Prduct Not Updated.</p>";
                                    }
                                }
                            }else if($_FILES['main_image']['name'] && $_FILES['image1']['name']){
                                echo "<p class='message error'>yes Not Updated.</p>";
                            }*/
                            else{
                                $query1 = "UPDATE  tbl_product SET title= '$title', price='$price ',link='$link',descs='$desc' where id = $id";
                                $post1 = $db->update($query1);
                                if ($post1){
                                    echo "<p class='message success'>Prduct Update Successfully.</p>";
                                }else{
                                    echo "<p class='message error'>Prduct Not Updated.</p>";
                                }
                            }

                        }
                    ?>
                <?php 
                    /*if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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
                    }*/
                ?>

                 <form action="" method="POST" enctype="multipart/form-data">
                    <table class="form">
                       <?php 
                       		$id = $_GET['id'];
                       		$getQuery = "SELECT * FROM tbl_product where id = $id";
                       		$getPost = $db->select($getQuery);
                       		if ($getPost) {
                       			while ($getResult = $getPost->fetch_assoc()) {
                       			
                        ?>
                        <tr>
                            <td>
                                <label>Title</label>
                            </td>
                            <td>
                                <input type="text" name="title" value="<?php echo $getResult['title'];?>" placeholder="Enter Post Title..." class="medium" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td>
                                <label>Category</label>
                            </td>
                            <td>
                            	<input type="checkbox" id="chkCat">
                                <select id="category" name="category" style="width: 200px;">
                                     <option >Select One</option> 
                                   <?php
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
                            	<input type="checkbox" id="chkSubcat">
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
                                <input type="text" value="<?php echo $getResult['price']; ?>" name="price" placeholder="Enter Price..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Description</label>
                            </td>
                            <td>
                                <textarea  id="" cols="70" rows="7" name="desc" >
                                    <?php echo $getResult['descs'];?>
                                </textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Link</label>
                            </td>
                            <td>
                                <input type="text" value="<?php echo $getResult['link'];?>" name="link" placeholder="Enter Website Link..." class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Main Image</label>
                            </td>
                            <td>
                            	<input type="checkbox" id="chkmainimage">
                                <input type="file" name="main_image" id="imgMian" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Image 1</label>
                            </td>
                            <td>
                            	<input type="checkbox" id="chkimage1">
                                <input type="file" name="image1" id="imgImage1" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Image 2</label>
                            </td>
                            <td>
                            	<input type="checkbox" id="chkimage2">
                                <input type="file" name="image2" id="imgImage2"/>
                            </td>
                        </tr>
                    <?php }} ?>
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
        <script type="text/javascript">
        	$(function(){
        		document.getElementById("chkmainimage").checked = false;
        		document.getElementById("imgMian").disabled = true;
        		document.getElementById("chkimage1").checked = false;
        		document.getElementById("imgImage1").disabled = true;
        		document.getElementById("chkimage2").checked = false;
        		document.getElementById("imgImage2").disabled = true;
        		$('#chkmainimage').change(function(){
        			var mainImage = this.checked;
        			if (mainImage) {
        				$('#imgMian').prop("disabled",false);
        			}else{
        				$('#imgMian').prop("disabled",true);
        			}
        		});

        		$('#chkimage1').change(function(){
        			var Imageone = this.checked;
        			if (Imageone) {
        				$('#imgImage1').prop("disabled",false);
        			}else{
        				$('#imgImage1').prop("disabled",true);
        			}
        		});

        		$('#chkimage2').change(function(){
        			var Imagetwo = this.checked;
        			if (Imagetwo) {
        				$('#imgImage2').prop("disabled",false);
        			}else{
        				$('#imgImage2').prop("disabled",true);
        			}
        		});
        	});

        	$(function(){
        		document.getElementById("chkCat").checked = false;
        		document.getElementById("category").disabled = true;
        		document.getElementById("chkSubcat").disabled = true;
                document.getElementById("subcategory").disabled = true;

                $('#chkCat').change(function () {
                    var cat = this.checked;
                    if (cat) {
                    	$('#category').prop("disabled",false);
                        $('#subcategory').prop("disabled",false);
                    }else{
                        $('#category').prop("disabled",true);
                        $('#subcategory').prop("disabled",true);
                    }
                });
        	});
        </script>
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