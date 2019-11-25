<?php
$username=$_POST['username'];
$email=$_POST['email'];
$review=$_POST['review'];
include 'sql.php';
$query = "insert into contacts values('$username','$email','$review')";
$query_run = mysqli_query($sql,$query);
if($query_run)
{
    echo "<script>alert('Thanks for review')</script>";
    echo "<script>window.location.href='login.html'</script>";
}
else
{
    echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
}
?>