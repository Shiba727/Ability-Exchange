
<!--PHP-->
<?php
    $connect = new mysqli('localhost', 'root', '', 'ae');
    mysqli_set_charset($connect, 'utf8');

    if($connect->connect_error){
        die("Connection Error!".$connect->connect_error);
    }

    echo "Connection Sueccessfully !";
    echo "<br/>";

    //INSERT    
    /*$sql = "INSERT INTO article(title, remark) VALUES ('問號', 'wqjeq;lk');";
    $result = $connect->query($sql);
    if($result) {
        echo "<br/>";
    }*/

    //UPDATE
    /*$sql = "UPDATE article SET title = '123' WHERE serialNUM = '10';";
    $result = $connect->query($sql);
    if($result) {
        echo "<br/>";
    }*/

    //DELETE
    /*    
    $sql = "DELETE FROM article WHERE serialNum>4 and serialNum <=21";
    $result = $connect->query($sql);
    if($result) {
        echo "<br/>";
    }*/

    //QUERY
    $sql = "SELECT * FROM article;";
    $result = $connect->query($sql);

    echo "COUNT: {$result->num_rows}";
    echo "<br/>";

    $array = [];
    while($user = $result->fetch_assoc()) {
        
        echo $user['serialNum'].', '.$user['title'].', '.$user['remark'];
        echo "<br/>";
    }

    $connect->close();
?>
