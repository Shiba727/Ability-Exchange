<?php   
 $dbhost = 'localhost';   
 $dbuser = 'root';   
 $dbpass = '';   
 $dbname = 'ae';

if(isset($_REQUEST['title'])){
    $title = $_REQUEST['title'];
}else{
    $title = "";
}
if(isset($_REQUEST['remark'])){
    $remark = $_REQUEST['remark'];
}else{
    $remark = "";
}

 
 $connect = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    mysqli_set_charset($connect, 'utf8');

    if($connect->connect_error){
        die("Connection Error!".$connect->connect_error);
    }

    echo "Connection Sueccessfully !";
    echo "<br/>"; 
  
    //DELETE     
    $sql = "DELETE FROM article WHERE title='$title' or remark='$remark'";
    $result = $connect->query($sql);
    if($result) {
        echo "<br/>";
    }

    //QUERY
    $sql = "SELECT * FROM article;";
    $result = $connect->query($sql);

    echo "COUNT: {$result->num_rows}";
    echo "<br/>";

    echo "<table>";
    echo "<tr>"."<th>"."serialNumber"."</th>"."<th>"."title"."</th>"."<th>"."contents"."</th>";
    
    while($user = $result->fetch_assoc()) {

        echo "<tr>";
        echo "<td>".$user['serialNum']."</td>";
        echo "<td>".$user['title']."</td>";
        echo "<td>".$user['remark']."</td>";
        echo "</tr>";
    }
    echo "<br/>";
    echo "</table>";

    $connect->close();

    //Back to homepage & do refresh
    header("Refresh:0; url=CRUD.php");
?>