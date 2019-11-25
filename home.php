<?php
session_start();
include 'sql.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
    <script>
        function showMore() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("moreButton");

            if (dots.style.display == "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Show more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Show less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <style>
        #more {display: none;}
    </style>
</head>
<body>
<header>
    <div class="menu">
        <div class="leftmenu">
            <h2>YAATRA</h2>
        </div>
        <div class="rightmenu">
            <ul>
                <li><a href="login.html">Logout</a></li>
            </ul>
        </div>
    </div>
    <div>
        <h1 style="margin-left: 500px">TRAVEL BLOG</h1>
        <div id="content">
            <?php
            $inc=1;
            include 'sql.php';
            $result = mysqli_query($sql, "SELECT * FROM images where id>0 and id<4");
            while ($row = mysqli_fetch_array($result)) {
                $_SESSION['image']=$row['image'];
                $_SESSION['city']=$row['city'];
                $_SESSION['package']=$row['package'];
                $_SESSION['dayplan']=$row['dayplan'];
                $_SESSION['amount']=$row['amount'];
                echo "<div id='img_div'>";
                echo "<img src='images/".$row['image']."' >";
                echo "<div id='imgli'>";
                echo "<p>City: ".$row['city']."</p>";
                echo "<p>Package Type: ".$row['package']."</p>";
                echo "<p>Day Plan: ".$row['dayplan']."</p>";
                echo "<p>Amount: ".$row['amount']."</p>";
                echo "<form action='' method='post' id='btnmr'>";
                echo "<input name='btn_value' value='".$inc++."' hidden>";
                echo "<button type='submit' class='anchor' name='button_store' >BOOK</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
        <div id="dots"></div>

        <div id="more">
            <div>
                <?php
                $inc=4;
                include 'sql.php';
                $result = mysqli_query($sql, "SELECT * FROM images where id>= 4");
                while ($row = mysqli_fetch_array($result)) {
                    $_SESSION['image']=$row['image'];
                    $_SESSION['city']=$row['city'];
                    $_SESSION['package']=$row['package'];
                    $_SESSION['dayplan']=$row['dayplan'];
                    $_SESSION['amount']=$row['amount'];
                    echo "<div id='img_div1'style='margin-left: 410px;'>";
                    echo "<img src='images/".$row['image']."' >";
                    echo "<div id='imgli1'>";
                    echo "<p>City: ".$row['city']."</p>";
                    echo "<p>Package Type: ".$row['package']."</p>";
                    echo "<p>Day Plan: ".$row['dayplan']."</p>";
                    echo "<p>Amount: ".$row['amount']."</p>";
                    echo "<form action='' method='post' id='btnmr1'>";
                    echo "<input name='btn_value' value='".$inc++."' hidden>";
                    echo "<button type='submit' name='button_store' class='anchor1'>BOOK</button>";
                    echo "</form>";
                    echo "</div>";
                    echo "</div>";

                }
                ?>
            </div>
        </div>
        <button style="margin-left: 620px; margin-top: 5px ; margin-bottom: 15px" class="btn btn-outline-dark" onclick="showMore()" id="moreButton">Show More</button>
        <?php
        if(isset($_POST['button_store'])) {
            $id = $_POST['btn_value'];
            $_SESSION['btn_value']=$id;
            echo "<script>window.location.href='booking.php'</script>";
        }
        ?>
    </div>
</header>



</body>
</html>

