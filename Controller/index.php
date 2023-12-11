<?php
    session_start();
    if (isset($_SESSION['role'])) {
        $role = $_SESSION['role'];
    }
    if (isset($_SESSION['action'])) {
        $action = $_SESSION['action'];
    } else {
        $action = 'login'; 
    }
    switch ($action) {
        case 'login':
            include('../View/login.php');
            break;
        case 'view':
            if ($role == 1) {
                include('../View/index.php');
                break;
            }
            elseif($role == 0){
                include('../View/index.php');
                break;
            }
            break;
        case 'register':
            include('../View/register.php');
            break;
        // case 'editArticle':
        //     include('../View/edit-article.php');
        //     break;
        // case 'addArticle':
        //     include('../View/article-upload-form.php');
        //     break;
    }
?>