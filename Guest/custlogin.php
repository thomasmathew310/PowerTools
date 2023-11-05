<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // include("header.php");
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custlogin.css">
    <title>Document</title>
</head>
<body>
    <form action="custlogaction.php" method="post" enctype="multipart/form-data">
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="Password" placeholder="Password"> </div> <input type="submit" name="submit" value="Login">
        </form> 
        <a href="#">Forget Password<br> </a>
        <div class="text-center">
        <a href="customerreg.php">Sign Up<br> </a>
        </div>
        
    </div>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // include("header.php");
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/custlogin.css">
    <title>Document</title>
</head>
<body>
    <form action="custlogaction.php" method="post" enctype="multipart/form-data">
    <div class="loginBox"> <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="login.php" method="post">
            <div class="inputBox"> <input id="uname" type="text" name="Username" placeholder="Username"> <input id="pass" type="password" name="Password" placeholder="Password"> </div> <input type="submit" name="submit" value="Login">
        </form> 
        <a href="#">Forget Password<br> </a>
        <div class="text-center">
        <a href="customerreg.php">Sign Up<br> </a>
        </div>
        
    </div>
    
</body>
</html>