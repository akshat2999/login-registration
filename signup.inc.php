<?php if (isset($_POST['submit'])) {
    include_once './db.inc.php';


    $UserName = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);
    $rPassword = mysqli_real_escape_string($conn, $_POST['rpassword']);

 
    $s="SELECT *FROM maggi_signup WHERE username='$UserName'";
    $r=mysqli_query($conn,$s);
    $n=mysqli_num_rows($r);
    if($n ==1)
    {
        echo "Username exists";
    }
    else 
    {
      

        $sql = "INSERT INTO maggi_signup (username,email,password,rpassword) VALUES ('$UserName','$email','$Password','$rPassword');";
        mysqli_query($conn, $sql);
        header("Location: ./singup.php?s");
        exit();
    }
} else {
    header("Location: ./singup.php");
    exit();
}
