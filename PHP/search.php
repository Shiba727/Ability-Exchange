<?php
    require('function.php');
    if (!isset($_SESSION['id'])) {
    header("location:/login.php");
    exit();
    }
    if(isset($_POST['title'])){
        $articles=search($_POST['title']);
    }
    else{
        $articles=get_post_list();
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

    <title>ABILITY EXCHANGE_Search</title>

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

        .table_show_content{
            margin-top:50px;
          
        }
        .main_content{
            background:#fff;
            margin-top:50px;
            margin-bottom:100px;
        }

        form{
            margin-top:10px;
        }

        .button_create{
            width:40px;
            height:40px;
            border-radius:99em;
            font-size:16pt;
            border:none;
            background-color:#F79D2D;
            margin-bottom:5px;
        }
        .button_create:hover{
            background-color:#32B9B5;
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
    
    <!--content-->
    <div class="container main_content">
        <div class="col-md-4">
            <div class="col-xs-12 col-sm-8 col-md-2 col-sm-offset-2 col-md-offset-0">
                <h2>Search</h2>
            </div>
        </div>
        <div class="col-md-4">
            <form accept-charset="UTF-8" class="form-inline" method="post" action="search.php">
                <div class="form-group">
                    <input class="form-control input-sm" name="title" placeholder="Search Title" type="text" required>
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>
        <form method="post" action="action.php" class="add">
            <button type="submit" class="btn btn-default btn-large button_create" style="float:right" name="action" value="to_Add_page">+</button>
        </form>
        <!--post表格-->
        <table class="table table-striped table_show_content">
            <tr>
                <th>標題</th>
                <th>內容</th>
                <th></th>
            </tr>
            <?php
                foreach($articles as $article){
            ?>
            <form method="post" action="post_content.php">
            <tr>
            <input type="hidden" name="id" value="<?php echo $article['article_Id'];?>" required></input>
            <td class="col-md-2"><?php echo $article['title'];?></td>
            <td class="col-md-9"><?php echo $article['remark'];?></td>
            <td class="col-md-1"><button type="submit" class="btn btn-default" name="action" value="show_content">詳細內容</button></td>
            </tr>
            </form>
            <?php
                }
            ?>
        </table>
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

</body>