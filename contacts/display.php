<?php
include("db.php");
session_start();
$userprofile = $_SESSION['user'];
if ($userprofile == true) {
} else {
    header("location:../index.php");
}

$sql = "SELECT * FROM `contact`";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
</head>

<body>
<h3><a href="insert.php">Add data</a></h3>
    <table border="1" style="margin:auto;margin-top:15%;">
        <tr>
            <td>Sno</td>
            <td>Name</td>
            <td>mobile</td>
            <td>Date Of Birth</td>
            <td>Address</td>
            <td>Comment</td>
            <td colspan="6">opertion</td>
        </tr>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $i++;
        ?>

            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['mobile']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['comment']; ?></td>
                <td><a href="edit.php?Id=<?php echo $row['Id']; ?>">EDIT</a></td>
                <td><a href="delete.php?Id=<?php echo $row['Id']; ?>">REMOVE</a></td>
            </tr>

        <?php

        }

        ?>
    </table>

<a href="logout.php"><button>Logout</button></a>
</body>

</html>