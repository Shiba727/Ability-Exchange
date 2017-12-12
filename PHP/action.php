<?php
require('function.php');

if (!isset($_SESSION['id'])) {
    $user = [];
    switch($_POST['action']) {
        case 'log_in':
            $user = get_user_by_email_password($_POST['email'], $_POST['password']);
            break;
        case 'register':        
            $user = register($_POST['email'], $_POST['password'], $_POST['name'], $_POST['tel'], $_POST['re_password']);
            break;
    }

    if (isset($user['message'])) {
        show_error($user['message']);
    }

    $_SESSION['id'] = $user['id'];
    header('location:/');
} else {
    $user_id = $_SESSION['id'];
    switch($_POST['action']) {
        case 'to_Add_page':
            header('location:/CreateNewPost.php');
            break;
        case 'add_post':
            add_post($user_id,$_POST['txt_title'],$_POST['txt_subject'],$_POST['txt_time'],$_POST['txt_place'],$_POST['txt_detail'],$_POST['txt_condition'],$_POST['txt_ps']);
            break;
        case 'delete_post':
            delete_post($_POST['id']);
            break;
    }

}