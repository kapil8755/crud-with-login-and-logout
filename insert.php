
<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO info (fname,lname,email,pwd)VALUES('$fname','$lname','$email','$pwd')";
    $res = mysqli_query($conn, $sql);

    // print_r($res);

}


?>