<?php 
    include 'inc/header.php';
    include 'inc/sidebar.php';
?>
        <div class="grid_10">
		
            <div class="box round first grid">
                <h2>Change Password</h2>
                <div class="block">
                    <?php
                           $id = Session::get('userId');

                            echo $id;
                            if ($_SERVER['REQUEST_METHOD'] == 'POST'){

                                $oldPass = $_POST['oldPass'];
                                $newPass = $_POST['newPass'];
                                $conPass = $_POST['conPass'];

                            }

                            $passQuery = 'select password from tbl_user WHERE id="$id"';
                            $pass = $db->select($passQuery);
                            $passResult  =$pass->fetch_array();

                    ?>
                 <form action="" method="POST">
                    <table class="form">					
                        <tr>
                            <td>
                                <label>Old Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter Old Password..."  name="oldPass" class="medium" />
                            </td>
                        </tr>
						 <tr>
                            <td>
                                <label>New Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter New Password..." name="newPass" class="medium" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirm Password</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter Confirm Password..." name="conPass" class="medium" />
                            </td>
                        </tr>
						
						 <tr>
                            <td>
                            </td>
                            <td>
                                <input type="submit" name="submit" Value="Update" />
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