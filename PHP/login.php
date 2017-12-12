<?php
session_start();
if(isset($_SESSION['id'])){
    header("location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ABILITY EXCHANGE</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    form {
    border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #FFD700;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #A52A2A;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
img.login {
    width: 40%;  
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
</head>
<body>
    <div class="brand" >
    <img src="img/AElogo.png" align="middle" alt="" title=" " width="150px" height="120px">
    ABILITY EXCHANGE
    </div>
    <div class="address-bar">LEARN for FREE !</div>
    <!-- Navigation -->
    <div class="row">
            <div class="box">
                <div class="col-lg-6">
                <hr>
                    <h1 class="intro-text text-center">
                        <strong>LOG IN</strong>                        
                    </h1>
                <hr>
                    <h6 class="intro-text text-center">
                    Log in to see more!                       
                    </h6>
        <form method="post" action="login_check.php">   
                    <div class="container col-lg-8 col-md-offset-2">
                        <label><b>Account</b></label>
                        <input type="text" placeholder="Account" name="username" required>
                        <label><b>Password</b></label>
                        <input type="password" placeholder="Password" name="password" required>
                        <button type="submit" name="action" value="log_in">Login</button>
                        <input type="checkbox" data-on="c" checked="checked"> Remember me
                    </div>
                    <div class="container col-lg-6 col-md-offset-2">
                        <button type="reset" class="cancelbtn">Cancel</button>
                    </div>
        </form>
                </div>              
                <div class="col-lg-6">
                <hr>
                    <h1 class="intro-text text-center">
                        <strong>SIGN UP</strong>    
                    </h1>
                <hr>
                    <h6 class="intro-text text-center">
                    SIGN UP TO JOIN US!                       
                    </h6>
        <form method="post" action="login_check.php">
                <div class="container col-lg-8 col-md-offset-2">
                    <label for="name"><b>Name</b></label>
                    <input type="text" placeholder="Name" name="name" required>
                    <label for="sex"><b>Sex</b></label>
                    <input type="radio" name="sex" value="男" checked>
                    <label for="sex"><b>男</b></label>
                    <input type="radio" name="sex" value="女">
                    <label for="sex"><b>女</b></label><br>
                    <label for="username"><b>Account</b></label>
                    <input type="text" placeholder="Account" name="username" required>
                    <label for="password"><b>Password</b></label>
                    <input type="password" placeholder="Password" name="password" required><br>
                    <label for="tel"><b>Tel</b></label>
                    <input type="tel" placeholder="     Tel" name="tel" style="width:395px;height: 45px" required>
                    <br/>
                    <label for="email"><b>E-mail</b></label>
                    <input type="email" placeholder="     Email" name="email" style="width:395px;height: 45px" required>
                    <br><br>
                    <button type="submit" name="action" value="register">Sign up</button>
                    <div class="container">
                        <button type="reset" class="cancelbtn" style="margin-left: -15px">Cancel</button>
                    </div>
                </div>           
        </form>
                </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy;2017 team9</p>
                </div>
            </div>
        </div>
    </footer>
     <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</body>
</html>