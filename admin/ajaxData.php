<?php
    include '../config/config.php';
    include '../lib/Database.php';
    $db = new Database();
?>

<?php
    if (isset($_POST['id']) && !empty($_POST['id'])){
        $id = $_POST['id'];
        $query = "SELECT * FROM tbl_sub_cat WHERE cat_id=$id";
        $SubcatPost = $db->select($query);
        if ($SubcatPost){
            while ($catResult = $SubcatPost->fetch_assoc()){
                echo "<option value='".$catResult['id']."'>".$catResult['name']."</option>";
            }
        }else{
            echo "<option value=''>No Sub Category Found</option>";
        }
    }

?>
