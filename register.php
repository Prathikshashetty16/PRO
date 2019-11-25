<?php
$id='0';
$username=$_POST['username'];
$password=$_POST['password'];
$rpassword=$_POST['rpassword'];
$email=$_POST['email'];
$place=$_POST['place'];
$country=$_POST['country'];
include 'sql.php';
if($password==$rpassword)
{
    $query = "select * from register where username='$username'";
    $query_run = mysqli_query($sql,$query);
    if($query_run)
    {
        if(mysqli_num_rows($query_run)>0)
        {
            echo "<script> alert('This Username Already exists.. Please try another username!')</script>";
        }
        else
        {
            $query = "insert into register values('$id','$username','$password','$email','$place','$country')";
            $query_run = mysqli_query($sql,$query);
            if($query_run)
            {
                echo "<script>alert('User Registered ')</script>";
                echo "<script>window.location.href='home.php'</script>";
            }
            else
            {
                echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
            }
        }
    }
}
else
{
    echo '<script>alert("Password and Confirm Password do not match")</script>';
}

?>