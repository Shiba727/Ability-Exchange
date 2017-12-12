<?php
require('function.php');
if (!isset($_SESSION['id'])) {
    header("location:/login.php");
    exit();
}

$articles = get_myPost($_SESSION['id']);

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
        .p{
            font-family: 微軟正黑體;
        }
        .col-md-4 {
            width: 33.33333333%;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        .main_content {
            position: absolute;
            left: 50%;
            top: 50%;
            margin-top: 30px;
            margin-left: -500px;
            float: left;
            width: 1020px;
            padding: 10px;
            background: #fff;
            border: 1px solid #cecece;
        }
    </style>
</head>

<body>
    <!--頁首開始-->
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
        
    <div class="main_content">
        <div class="col-md-4">
            <div class="col-xs-12 col-sm-8 col-md-2 col-sm-offset-2 col-md-offset-0">
                <h2>Your Post</h2>
            </div>
        </div>
            <div class="col-md-8 .col-md-offset-8">
                <br><br>            
                <button type="submit" class="btn btn-default" style="float:right;  background-color: #FF4545"><a href="CreateNewPost.php" target="_parent">Create</a></button>    
            </div>

                <div class="col-md-12">
                    <table class="table table-striped">
                       <thead> 
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>More</th>
                            <th>Action</th>
                        </tr>
                       </thead> 
                       <tbody>
                        <?php
                        foreach($articles as $article) {
                        ?>
                        
                        <tr>
                        
                                <th><?= $article['title'] ?></th>
                                <th><?= $article['remark'] ?></th>
                         <form method="post" action="post_content.php">
                            <input type="hidden" name="id" value="<?php echo $article['article_Id'] ?>" required></input>       
                                <th><button type="submit" name="action" value="show_content" class="btn btn-primary btn-sm">顯示文章</button></th>
                         </form>
                         <form method="post" action="action.php">
                            <input type="hidden" name="id" value="<?php echo $article['article_Id'] ?>" required></input>
                                <th><button type="submit" name="action" value="delete_post"  class="btn btn-danger btn-sm">刪除</button></th>
                        </form>
                        </tr>
                        <?php
                            }
                        ?>
                       </tbody> 
                    </table>
            </div>
        </div>
    </div>



    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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