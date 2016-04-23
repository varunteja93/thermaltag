<?php require_once('config.php');
    $msg = "";
    if (isset($_POST['submit'])) {

        $username=$_POST['username'];
        $password=$_POST['password'];
        $member = 'member';

        $query = $pdo->prepare("INSERT INTO user(username, password, access_level) VALUES('$username','$password', '$member')");
        $query->execute();
        $msg = "User added successfully";
        
    } 
?>

<html>
<head>
<title>Register User</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <form action="" method="post">
   <div id="mydiv">
   
   <h1 class="ht">Add New User</h1>
   <div>
        <h4 class="ht">Username</h4>
        <input style="color: #fff;" type="text" name="username" size="30">
        </div>
    <div>
    <h4 class="ht">Password</h4>
    <input style="color: #fff;" type="password" name="password" size="30">
        </div>
    <div>
        <br>
        <input type="submit" name="submit" value="Add">
        <a href="admin.php">go back</a>
        <?php echo "<p>".$msg."</p>";?>
    </div>
    </div>
    </form>
</body>
</html>