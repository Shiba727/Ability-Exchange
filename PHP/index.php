<?php
require('function.php');
if (!isset($_SESSION['id'])) {
    header("location:/login.php");
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



    <!--首頁Main Content-->
    <!--首頁Picture-->
    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/homepage1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/homepage2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/homepage3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/homepage5.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/homepage6.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">ABILITY EXCHANGE</h1>
                    <hr class="tagline-divider">
                    
                </div>
            </div>
        </div>

            <!--首頁Main Content-->
            
            <div class="row">
            <div class="box">
            <div class="col-lg-12">
            <hr>
                    <h2 class="intro-text text-center">
                        <strong>Introduction</strong>
                    </h2>
                    <hr>
            <div class="Introductionpanel">
                <div class="centercontent">
                    <h1>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1 class="panel-title" style="font-size:15pt">ability exchange</h1>
                        </div>
                        <div class="panel-body lead" style="font-size:13pt">
                            <font face="微軟正黑體">AE是台科大能力交換系統，讓台科大學生能夠在更安全的環境下，交換彼此的特長，讓學習變得更有效率!</font><br><br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            <h1 class="panel-title" style="font-size:15pt"><font face="微軟正黑體">如何使用</font></h1>
                        </div>
                        <div class="panel-body lead" style="font-size:13pt">
                            <font face="微軟正黑體">登入會員，在網站上寫出你擁有的特長以及你想學習的能力，透過此網站你將可以認識不同系的人，擴展你的視野人脈，還可以得到你所想學習的能力喔!</font><br><br><br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h1 class="panel-title" style="font-size:15pt"><font face="微軟正黑體">作者群</font></h1>
                        </div>
                        <div class="panel-body lead" style="font-size:14pt">
                            <font face="微軟正黑體">系統分析與設計 第九組--</font> <br><font face="微軟正黑體">陳威利 楊瑾容 陳芝妘</font> <br><font face="微軟正黑體">王敏馨 廖心萍</font><br><br>
                            <p class="pull-right" style="font-size:12pt"><font face="微軟正黑體">作者群敬上</font></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
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