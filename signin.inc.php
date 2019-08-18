<?php if (isset($_POST['submit'])) {
    include_once './db.inc.php';
  
    $UserName = mysqli_real_escape_string($conn, $_POST['username']);
    $Password = mysqli_real_escape_string($conn, $_POST['password']);

  
    $s="SELECT * FROM maggi_signup WHERE username='$UserName' && password='$Password'";
    $r=mysqli_query($conn,$s);
    $n=mysqli_num_rows($r);
    if($n == 1)
    {
        $_SESSION['username']=$UserName;
        header('Location:welcome.php');
    }
    else 
    {
        
    }
}