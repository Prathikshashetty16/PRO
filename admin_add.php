<?php
session_start();
// Create database connection
include 'sql.php';

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['submit'])) {
    $id = mysqli_real_escape_string($sql,$_POST['id']);
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $city = mysqli_real_escape_string($sql, $_POST['city']);
    $package = mysqli_real_escape_string($sql, $_POST['package']);
    $dayplan = mysqli_real_escape_string($sql, $_POST['dayplan']);
    $amount = mysqli_real_escape_string($sql, $_POST['amount']);

    // image file directory
    $target = "images/".basename($image);

    $query = "INSERT INTO images (id, image, city, package, dayplan, amount) VALUES ('$id', '$image', '$city', '$package','$dayplan','$amount')";
    // execute query
    mysqli_query($sql, $query);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<script>aleart('Image uploaded successfully')</script>";
    }else{
        echo "<script>alert('Failed to upload image')</script>";
    }
}
$result = mysqli_query($sql, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="admin_users.css">
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
        <div class="rightmenu">
            <ul>
                <li><a href="" id="firstlist">add</a></li>
                <li><a href="admin_users.php">Users</a></li>
                <li><a href="admin_booked.php">booked</a></li>
                <li><a href="admin_review.php">review</a></li>
            </ul>
        </div>
    </div>
    <div >
        <div style="width: 50%;float: left;background: linear-gradient(to right,mintcream,#ffff8d,yellow)">
            <form style="margin: 5% 40%" method="POST" action="admin_add.php" enctype="multipart/form-data">
                <div>
                    <input type="text" name="id">
                </div>
                <div>
                    <input type="file" name="image">
                </div>
                <div>
                    <input type="text" name="city" placeholder="City">
                </div>
                <div>
                    <h6>Package Type</h6>
                </div>
                <div>
                    <input type="radio" name="package" value="normal">Normal
                    <input type="radio" name="package" value="Special">Special
                    <input type="radio" name="package" value="Delux">Delux
                </div>
                <div>
                    <textarea id="text" cols="40" rows="4" name="dayplan" placeholder="Plan"></textarea>
                </div>
                <div>
                    <input type="text" name="amount" placeholder="Amount">
                </div>
                <div>
                    <button type="submit" name="submit">POST</button>
                </div>
            </form>
        </div>
        <div style="width: 50%;float: right">
            <?php
            include 'sql.php';
            $query = "select * from images";
            $result = mysqli_query($sql,$query);
            while ($row=mysqli_fetch_array($result))
            {
                echo "<div id='img_div'>";
                echo "<img src='images/".$row['image']."' >";
                echo "<div id='imgli'>";
                echo "<p>City: ".$row['city']."</p>";
                echo "<p>Package Type: ".$row['package']."</p>";
                echo "<p>Day Plan: ".$row['dayplan']."</p>";
                echo "<p>Amount: ".$row['amount']."</p>";
                echo "<form action='' method='post' id='btnmr'>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>

    </div>
</header>
</body>
</html>