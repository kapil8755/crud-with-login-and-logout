<?php
include("db.php");
session_start();
$userprofile = $_SESSION['user'];
if ($userprofile == true) {
} else {
    header("location:..\index.php");
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $comment = $_POST['comment'];
    $sql = "insert into contact(name,mobile,dob,address,comment)VALUES('$name','$mobile','$dob','$address','$comment')";
    $query = mysqli_query($conn, $sql);
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
                <input type="text" name="name" placeholder="Enter Name" required>
            </tr>
            <br><br>

            <tr>
                Mobile :
                <input type="text" name="mobile" placeholder="Enter Mobile" required>
            </tr>
            <br><br>

            <tr>
                Date Of Birth :
                <input type="date" name="dob" placeholder="Enter DOB" required>
            </tr>

            <br><br>

            <tr>
                Address :
                <input type="text" name="address" placeholder="Enter Address" required>
            </tr>

            <br><br>

            <tr>
                Comment :
                <textarea name="comment" rows="4" cols="40" placeholder="Enter Your Comment" required></textarea>
            </tr>
            <br><br>

            <tr>
                <input type="submit" name="submit" value="submit">
            </tr>


        </table>
    </form>
</body>

</html>