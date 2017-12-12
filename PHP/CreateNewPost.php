<?php
require('function.php');
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
            position: relative;
            border-top: 60px;
            padding: 1%;
            font-size: 150%;
            text-align: center;
            font-weight: bold;
            margin: 150px;
            margin-top:50px;
        }
    </style>
</head>

<body>
    
<div class="brand"><a href="index.php" target="_parent"> <img src="img/AElogo.png" align="middle" alt="" title=" " width="150px" height="120px"></a> ABILITY EXCHANGE </div>
    
    <div class="address-bar">LEARN for FREE !</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">ABILITY EXCHANGE</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php" target="_parent">Home</a>
                    </li>
                    <li>
                        <a href="search.php" target="_parent">Search</a>
                    </li>
                    <li style="margin-right: -100px">
                        <a href="myPost.php" target="_parent">My Post</a>
                    </li>
                    <li style="margin-left: 300px;margin-top: 35px">
                        <?php
                           echo $_SESSION['name']." 您好！</a> | "; 
                        ?>
                    </li>
                    <li style="margin-left: -20px">
                        <?php
                           echo "<a href='logout.php'>log out</a>"; 
                        ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!--頁首結束-->

    <!--main content-->
    <div class="container">
        <div class="row">
            <div class="box">
                <hr>
                    <h2 class="intro-text text-center">
                        <strong>creat new post</strong>
                    </h2>
                <hr>
                <!--輸入表單-->  
                <form method="post" action="action.php">
                    <div class="form-horizontal">
                        <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_title">標題：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_title" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_subject">科目/項目：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_subject" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_place">地點：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_place" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_time">時間：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_time" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_detail">Detail：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_detail" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_condition">條件：</label>
                        <div class="col-sm-5">
                            <input class="form-control" type="text" name="txt_condition" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label" for="txt_ps">備註：</label>
                        <div class="col-sm-5">
                            <textarea class="form-control" rows="6" type="text" name="txt_ps" required></textarea>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-lg active" name="action" value="add_post">確認</button>
                    <button class="btn btn-default btn-lg active" onclick="txt_title.value='';txt_subject.value='';txt_place.value='';txt_time.value='';txt_detail.value='';txt_condition.value='';txt_ps.value='';">清除</button>
                    <button class="btn btn-default btn-lg active" onclick="javascript:location.href='search.php'">Back To Search</button>
                    
                </form>


        <!--請務必刪除這兩個div
        <div style="position: absolute;right: -50pt;bottom: 0;border:1px solid black;height: 520px;width: 200px;text-align: center;">
            這<br><br>裡<br><br>一<br><br>定<br><br>要<br><br>放<br><br>個<br><br>廣<br><br>告<br><br>
        </div>
        <div style="position: absolute;left: -50pt;bottom: 0;border:1px solid black;height: 520px;width: 200px;text-align: center;">
            這<br><br>裡<br><br>一<br><br>定<br><br>要<br><br>放<br><br>個<br><br>廣<br><br>告<br><br>
        </div-->

                </div>
            </div>
        </div>
    </div>

    <br><br><br>

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