<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="./style_signin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">


    <title>Document</title>
</head>
<body>
<div class="main-w3layouts wrapper">
		
    <h1>Welcome <?php echo $_SESSION['username']; ?> </h1>
</div>
</body>
</html>

