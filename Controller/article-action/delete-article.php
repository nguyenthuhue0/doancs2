<?php
    include_once __DIR__ . '/../../model/database.php';
    include_once __DIR__ . '/../../model/article.php';
    if (isset($_GET['id'])) {
        $articleId = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
        $db = database::getDB();
        $article = new Article($db);
        $result = $article->deleteArticle($articleId);

        if ($result) {
            header("Location: ../../View/edit-article.php");
            exit();            
        }
    } else {
        echo "Invalid article ID.";
    }
?>
