<?php
    require('function.php');
    
    $connect = new mysqli('sql109.byethost33.com', 'b33_20231384', 'aeteam09', 'b33_20231384_abilityexchange');
    mysqli_set_charset($connect, 'utf8');

    if($connect->connect_error){
        die("Connection Error!".$connect->connect_error);
    }

    if(isset($_POST['article_id'])){
        $article_id=$_POST['article_id'];
    }
    if(isset($_POST['contact'])){
        $contact=$_POST['contact'];
    }
    if(isset($_POST['context'])){
        $context=$_POST['context'];
    }
    if(isset($_POST['name'])){
        $name=$_POST['name'];
        if($name != ""){
            //INSERT    
            date_default_timezone_set("Asia/Taipei");
            $created_time = date("Y-m-d h:i:s");
            $sql = "INSERT INTO message(article_id, name, contact, context, created_time) VALUES ('$article_id', '$name', '$contact', '$context', '$created_time');";
            $result = $connect->query($sql);

            if(isset($name)){
                if($result) {
                    echo "<br/>";
                }
            }
        }
    }
    
    $connect->close(); 
    
?>
<form method="post" action="post_content.php">
    <input type="hidden" name="id" value="<?php echo $article_id;?>" required></input>
    <button style="visibility:hidden;" type="submit" class="btn btn-default" name="action" id="action1" value="show_content" visable=false>詳細內容</button>
</form>
<script>
    document.getElementById('action1').click();
</script>
