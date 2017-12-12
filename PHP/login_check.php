<?php
require('function.php');

if (!isset($_SESSION['id'])) {
    $user = [];
    switch($_POST['action']) {
        case 'log_in':
            $user = login($_POST['username'], $_POST['password']);
            break;
        case 'register':        
            $user = register($_POST['name'],$_POST['username'], $_POST['password'],$_POST['tel'], $_POST['email'], $_POST['sex']);
            break;
    }

    if (isset($user['message'])) {
        show_error($user['message']);
    }

    $_SESSION['id'] = $user['id'];
    $_SESSION['name'] = $user['name'];
    header('location:/index.php');
}
else{

    header('location:/index.php');
}

?>