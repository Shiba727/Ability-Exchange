<?php
    require('function.php');
    if (!isset($_SESSION['id'])) {
    header("location:/login.php");
    exit();
    }
    else{
        switch($_POST['action']){
            case 'show_content':
            $content=show_post_content($_POST['id']);
            break;
        }
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
        .p{
            font-family: 微軟正黑體;
        }
        .box{
            width:20cm;
            margin:0 auto;
            margin-top:50px;
            margin-bottom:100px;
        }
        .content_table{
            border-top:dashed 2pt #486B8A;
            font-size:15pt;
            margin-top:10px;
        }
        .title_username{
            font-size:20pt;
        }
        .title_title{            
            font-size:20pt;
        }
        .title_date{
            font-size:14pt;
            margin-top:5px;
            padding-top:12px;
            padding-bottom:5px;
        }
        .title_click{
            text-align:right;
            font-size:14pt;
            margin-top:5px;
            padding-top:12px;
            padding-bottom:5px;          
        }
        .container-message{
            align:center;
            margin:auto;
            padding: 20px;
            padding-bottom: 20px;
        }
        /* Full-width input fields */
        input[type=text], textarea{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: #4CAF50;
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

        /* Extra styles for the cancel button */
        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        .list-group {
            margin-left:16%;
            width:68%;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 40%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)} 
            to {-webkit-transform: scale(1)}
        }
            
        @keyframes animatezoom {
            from {transform: scale(0)} 
            to {transform: scale(1)}
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
        .icon{
            float: left;
        }


    </style>
<!--                <div class="title_click col-1g-4 col-md-4 col-xs-4 col-sm-4"><?php echo $content['clicks'];?></div>-->
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

    <!--MAIN_CONTENT-->
    <div class="container">
        <div class="box">
            <!--可改進-->
            <img src="img/transfer.png"  class"img-responsive col-md-2">
            <h3 class="col-md-3" >Exchange</h3>
            <div class="title">
                <div class="title_title col-lg-10 col-md-10 col-xs-10 col-sm-10 p"><?php echo $content['title'];?></div>
                <div class="title_username col-lg-2 col-md-2 col-xs-2 col-sm-2 p"><?php echo $content['username'];?></div>
                

                
                <div class="title_date col-1g-8 col-md-8 col-xs-8 col-sm-8 p"><?php echo $content['Timestampe'];?></div>
                <div class="title_click col-1g-4 col-md-4 col-xs-4 col-sm-4 p">點擊次數 : <?php echo $content['clicks'];?></div>

            </div>

            <!--content-->
            <table class='table table_show_content content_table'>
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/handshake.png"  class"img-responsive col-md-1"> 科目: </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['subjectName'];?></td>
                </tr>
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/office.png"  class"img-responsive col-md-1"> 地點 : </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['expectedplace'];?></td>
                </tr> 
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/time.png"  class"img-responsive col-md-1"> 時間 : </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['expectedTime'];?></td>
                </tr>
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/user.png"  class"img-responsive col-md-1"> 自述 : </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['descofUser'];?></td>
                </tr>
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/speech.png"  class"img-responsive col-md-1"> 要求 : </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['descofOthers'];?></td>
                </tr>
                <tr>
                    <td class='col-lg-2 col-md-2 col-xs-2 col-sm-2 p'><img src="img/list.png"  class"img-responsive col-md-1"> 附註 : </td>
                    <td class='col-lg-10 col-md-10 col-xs-10 col-sm-10 p'><?php echo $content['remark'];?></td>
                </tr>
            </table>
            <div align="right">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">留言</button>
            </div>             
        </div>
    </div>

    <div>
         <?php
            $connect = new mysqli('sql109.byethost33.com', 'b33_20231384', 'aeteam09', 'b33_20231384_abilityexchange');
            mysqli_set_charset($connect, 'utf8');

            if($connect->connect_error){
                die("Connection Error!".$connect->connect_error);
            }

            //echo "Connection Sueccessfully !";
            //echo "<br/>";
            
            //QUERY
            $article_id = $content['article_Id'];
            $sql = "SELECT * FROM message WHERE article_id='$article_id' ORDER BY guest_id DESC;";
            $result = $connect->query($sql);

            //echo "COUNT: {$result->num_rows}";
            //echo "<br/>";
            
            while($message = $result->fetch_assoc()) { ?>
            
                <div class="container">
                    <ul style="list-style: none; padding: 0">
                        <li id="c_259" class="panel-body">
                            <div class="list-group" >
                                <div class="list-group-item">
                                    <h3><?php echo $message['name']?></h3>						
                                    <p>
                                        <?php
                                            date_default_timezone_set("Asia/Taipei");
                                            echo date("F d,Y h:ia", strtotime($message['created_time']))."</br>";
                                        ?>
                                        <?php echo "Contact info: ".$message['contact']?>
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <p><p><?php echo $message['context']?></p></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

            <?php }  
            echo "<br/>";
            $connect->close();  
            
        ?>

        <!--留言區塊-->
        <div id="id01" class="modal">
        
        <form class="modal-content animate" id="form1" name="form1" method="post" action="">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>

            <div class="container-message">
                <div>
                    <label><b>Name</b></label>
                    <?php
                        if(isset($_SESSION['name'])){
                            echo $_SESSION['name']."</br>"."</br>";
                            
                        }
                        else{
                            echo "NULL"."</br>"."</br>";
                        }
                    ?>
                    <input type="hidden" name="name" value="<?php echo $_SESSION['name'];?>" required></input>
                </div>

                <div>
                    <label><b>Contact</b></label></br>
                    <input type="text" placeholder="Enter your contact information" name="contact" id="contact" required>
                    <input type="hidden" name="article_id" value="<?php echo $content['article_Id'];?>" required></input><!--LINE 314 的article_id-->
                </div>

                <div>
                    <label><b>Context</b></label></br>
                    <textarea class="col-sm-12 col-md-12 " placeholder="Enter Context" name="context" id="context" rows="5" required></textarea>
                </div>

                <div>
                    <button type="submit" name="button" id="button" onclick="form1.action='add.php';form1.submit();">Send</button>
                </div>
            </div>

            <!--<div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
            </div>-->
        </form>
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

    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    </script>

</body>