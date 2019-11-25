<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <link rel="stylesheet" href="admin_users.css">
    <link rel="stylesheet" href="include/css/bootstrap.min.css">
    <link rel="stylesheet" href="include/animate.css">
    <link rel="stylesheet" href="homepage.css">
    <style>
        th {
            background-color: darkgray;
        }
        td {
            background-color: whitesmoke;
        }
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
                <li><a href="admin_add.php">add</a></li>
                <li><a href="admin_users.php">Users</a></li>
                <li><a href="admin_booked.php">booked</a></li>
                <li><a href="admin_review.php" id="firstlist">review</a></li>
            </ul>
        </div>
    </div>
    <table style="text-align: center;width: 100%" border="1">
        <tr>
            <th>username</th>
            <th>email</th>
            <th>review</th>
        </tr>
        <?php
        include 'sql.php';
        $query = "select * from contacts";
        $results=mysqli_query($sql,$query);
        while ($row=mysqli_fetch_array($results))
        {
            echo"<tr><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['review']."</td></tr>";
        }
        ?>
    </table>
</header>
</body>
</html>