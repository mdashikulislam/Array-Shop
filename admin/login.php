<?php
    include 'lib/Session.php';
    Session::init();
?>

<?php
    include '../config/config.php';
    include '../lib/Database.php';
    include '../helpers/Format.php';
?>
<?php
    $db = new Database();
    $fm = new Format();
?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
  <section id="content">
        <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $username = Format::userLoginValidation($_POST['username']);
                $pass = Format::userLoginValidation($_POST['password']);

                $username = mysqli_real_escape_string($db->link,$username);
                $pass = mysqli_real_escape_string($db->link,$pass);
                $query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$pass'";
                $result = $db->select($query);
                if ($result != false){
                    $value = mysqli_fetch_array($result);
                    $row = mysqli_num_rows($result);
                    if ($row > 0){
                        Session::set('login',true);
                        Session::set('username', $value['username']);
                        Session::set('userId',$value['id']);
                        header('Location:index.php');
                    }else{
                        echo "<span style='color: red;font-size: 16px;'>Username and Password not match</span>";
                    }
                }else{
                    echo "<span style='color: red;font-size: 16px;'>Feild Must not be empty..!!</span>";
                }
            }
        ?>

    <form action="" method="post">
      <h1>Admin Login</h1>
      <div>
        <input type="text" placeholder="Username"  name="username"/>
      </div>
      <div>
        <input type="password" placeholder="Password"  name="password"/>
      </div>
      <div>
        <input type="submit" value="Log in" />
      </div>
    </form><!-- form -->
    <div class="button">
      <a href="#">Training with live project</a>
    </div><!-- button -->
  </section><!-- content -->
</div><!-- container -->
</body>
</html>