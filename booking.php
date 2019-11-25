<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking</title>
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h1 style="text-align: center">Book Now</h1>
<form action="booking.php" method="post">
    <div id="content">
        <?php
        session_start();
        include 'sql.php';
        $id=$_SESSION['btn_value'];
        $result = mysqli_query($sql, "SELECT * FROM images where id='$id'");
        while ($row = mysqli_fetch_array($result)) {
            echo "<div >";
            echo "<img src='images/".$row['image']."' >";
            echo "<div >";
            echo "<h6>City: ".$row['city']."</h6>";
            echo "<h6>Package Type: ".$row['package']."</h6>";
            echo "<h6>Day Plan: ".$row['dayplan']."</h6>";
            echo "<h6>Amount: ".$row['amount']."</h6>";
            echo "</div>";
            echo "</div>";
            $_SESSION['image1']=$row['image'];
            $_SESSION['city1']=$row['city'];
            $_SESSION['package1']=$row['package'];
            $_SESSION['dayplan1']=$row['dayplan'];
            $_SESSION['amount1']=$row['amount'];
            echo "<form action='' method='post'>";
            echo "<button type='submit' style='margin-left: 150px' name='booking' class='btn btn-outline-dark'>BOOK</button>";
            echo "</form>";
        }
        ?>
    </div>
</form>
<?php
if(isset($_POST['booking']))
{
    $username=$_SESSION['username'];
    $image=$_SESSION['image1'];
    $city=$_SESSION['city1'];
    $package=$_SESSION['package1'];
    $dayplan=$_SESSION['dayplan1'];
    $amount=$_SESSION['amount1'];
    $query = "select * from booking";
    //echo $query;
    $query_run = mysqli_query($sql,$query);
    //echo mysql_num_rows($query_run);
    if($query_run)
    {
            $query = "insert into booking values('$username','$image','$city','$package','$dayplan','$amount')";
            $query_run = mysqli_query($sql,$query);
            if($query_run)
            {
                echo '<script>alert("Booking Successful")</script>';
                echo "<script>window.location.href='payment.html'</script>";
            }
            else
            {
                echo '<p class="bg-danger msg-block">Booking Unsuccessful</p>';
            }

    }

}

?>
</body>
</html>