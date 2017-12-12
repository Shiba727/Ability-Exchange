<?php
session_start();

function check_login() {
    if (!isset($_SESSION['id'])) {
        header('location:/login.php');
        exit();
    }

    return get_user_by_id($_SESSION['id']);
}
//db connect
function get_db_connection() {
    $db = new mysqli('sql109.byethost33.com', 'b33_20231384', 'aeteam09', 'b33_20231384_abilityexchange');
    $db->query('SET NAMES utf8;');
    return $db;
}
function show_error($message) {
    $_SESSION['message'] = $message;
    header('location:/error.php');
    exit();
}
function login($username, $password) {
    $db = get_db_connection();
    $username = $db->real_escape_string($username);
    $password = $db->real_escape_string($password);
    $result = $db->query("SELECT * FROM member WHERE username='$username' AND password='$password'");
    $user = $result->fetch_assoc();
    if ($user == null) {
        return ['message' => "USERNAME OR PASSWORD IS WRONG"];
    }
    return $user;

}
function register($name,$username, $password,$tel, $email, $sex) {
    $db = get_db_connection();
    $email = $db->real_escape_string($email);
    $result = $db->query("SELECT * FROM member WHERE username='$username'");    
    if ($result->num_rows > 0) {
        return ['message' => "USERNAME ALREADY EXISTED"];
    }
    $statement = "INSERT INTO `member` (name,username, password,tel,email,gender) VALUES ('$name','$username','$password','$tel','$email','$sex')";
    $result2 = $db->query($statement);  
    $user = get_user_by_name($username);    
    return $user;
}

function get_user_by_name($username) {
    $db = get_db_connection();
    $result = $db->query("SELECT * FROM member WHERE username='$username'");
    return $result->fetch_assoc();
}

function show_post_content($article_id){
    $db=get_db_connection();
    $sql="SELECT *,member.username as username,member.gender as gender FROM article left join member on article.id=member.id WHERE article_Id='$article_id';";
    $result=$db->query($sql);
    $user=$result->fetch_assoc();
    return $user;
}

//search頁面顯示
function get_post_list(){
    $db=get_db_connection();
    $sql = "SELECT * FROM article;";
    $result = $db->query($sql);

    $array=[];
    while ($article=$result->fetch_assoc()){
        $array[]=$article;
    }
    return $array;
}

function add_post($user_id,$title,$subject,$time,$place,$self_description,$other_description,$remark){
    $date=date("Y-m-d");
    
    $db=get_db_connection();
    $sql="INSERT INTO article(id,title,subjectName,expectedplace,expectedTime,descofUser,descofOthers,remark,Timestampe) VALUES (?,?,?,?,?,?,?,?,?);";
    $statement= $db->prepare($sql);
    $statement->bind_param('issssssss',$user_id,$title,$subject,$time,$place,$self_description,$other_description,$remark,$date);
    $statement->execute();

    header('location:/search.php');
   
}
//My post 頁面顯示
function get_mypost($id){
    $db = get_db_connection();
    $sql="SELECT * FROM article WHERE id='$id';";
    $result=$db->query($sql);
    $array = [];
    while ($article = $result->fetch_assoc()) {
        $array[] = $article;
    }

    return $array;
}


function delete_post($article_Id){
    $db = get_db_connection();
    $sql = "DELETE FROM article WHERE article_Id='$article_Id';";
    $result=$db->query($sql);
    header("Refresh:0; url=myPost.php");
}

function leave_message($article_id){
    $db=get_db_connection();
    $sql="INSERT INTO message(article_id, name, contact, context, created_time) VALUES ('$article_id', '$name', '$contact', '$context', '$datetime');";
    $result=$db->query($sql);
    $user=$result->fetch_assoc();
    return $user;
}

function search($title){
    $db=get_db_connection();
    $sql="SELECT * FROM article WHERE title LIKE '%$title%';";
    $result=$db->query($sql);

    $array = [];
    while ($article = $result->fetch_assoc()) {
        $array[] = $article;
    }
    return $array;
}


