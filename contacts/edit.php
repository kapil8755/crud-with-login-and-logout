<?php


include("db.php");

session_start();
$id = $_GET['Id'];

$userprofile = $_SESSION['user'];
if ($userprofile == true) {
} else {
    header("location:..\index.php");
}


$sql = "select * from contact WHERE Id='$id'";

$res = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($res);
// print_r($row);

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $sql1 = "update contact set name='$name',mobile='$mobile',dob='$dob',address='$address',comment='$comment' where Id='$id'";
    $query = mysqli_query($conn, $sql1);
    // print_r($query);
    header("location:display.php");
}



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

    <form method="POST">
        <h1>Contact Form</h1>
        <table>
            <tr>
                Name :
                <input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name']; ?>" required>
            </tr>
            <br><br>

            <tr>
                Mobile :
                <input type="text" name="mobile" placeholder="Enter Mobile" value="<?php echo $row['mobile']; ?>" required>
            </tr>
            <br><br>

            <tr>
                Date Of Birth :
                <input type="date" name="dob" placeholder="Enter DOB" value="<?php echo $row['dob']; ?>" required>
            </tr>

            <br><br>

            <tr>
                Address :
                <input type="text" name="address" placeholder="Enter Address" value="<?php echo $row['address']; ?>" required>
            </tr>

            <br><br>

            <tr>
                Comment :
                <input type="textarea" name="comment" rows="4" colspan="40" placeholder="Enter Your Comment" value="<?php echo $row['comment']; ?>" required>

            </tr>
            <br><br>

            <tr>
                <input type="submit" name="submit" value="submit">
            </tr>


        </table>
    </form>
</body>

</html>