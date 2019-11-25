<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
if ($username=='admin'&$password=='admin')
{
    echo "<script>window.location.href=admin_users.phps.php'</script>";
}
include 'sql.php';
$query = "select * from register where username='$username' and password='$password' ";
$query_run = mysqli_query($sql,$query);
if($query_run)
{
    if(mysqli_num_rows($query_run)>0)
    {
        $_SESSION['username']=$username;
        echo "<script>window.location.href='home.php'</script>";
    }
    else
    {
        echo '<script>alert("No such User exists. Invalid Credentials")</script>';
        echo "<script>window.location.href='login.html'</script>";
    }
}
else
{
    echo '<script type="text/javascript">alert("Database Error")</script>';
}
?>

