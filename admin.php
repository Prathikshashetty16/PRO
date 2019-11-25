<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/animate.css">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
<header>
    <div class="menu">
        <div class="leftmenu">
            <h2>YAATRA</h2>
        </div>
    </div>
    <div class="login">
        <form action="admin.php" method="post">
            <h1 style="color: white;font-size: 30px">Admin Form</h1>
            <input type="text" id="username" placeholder="Username" name="username" value="" class="form-control" required="required">
            <input type="password" id="password" placeholder="Password" name="password" value="" class="form-control" required="required">
            <button type="submit" name="submit" class="btn btn-outline-light">LogIn</button>
        </form>
    </div>
<?php
if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password=$_POST['password'];
    if($username=='admin'&$password=='admin')
    {
        echo "<script>window.location.href='admin_add.php'</script>";
    }
    else {
        echo "<script>alert('Invalid')</script>";
        echo "<script>window.location.href='admin.php'</script>";
    }
}
?>
</header>
</body>
</html>