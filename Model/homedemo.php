<?php
include_once 'db.php';
class Homedemo
{
    private $articleID;
    private $title;
    private $content;
    private $img;
    private $userId;
    private $datePosted;
    private $approved;
    // construct
    public function __construct($articleID, $title, $content, $img, $userId, $datePosted, $approved)
    {
        $this->articleID = $articleID;
        $this->title = $title;
        $this->content = $content;
        $this->img = $img;
        $this->userId = $userId;
        $this->datePosted = $datePosted;
        $this->approved = $approved;
    }
    public function getArticleID()
    {
        return $this->articleID;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getContent()
    {
        return $this->content;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getUserId()
    {
        return $this->userId;
    }
    public function getDatePosted()
    {
        return $this->datePosted;
    }
    public function getApproved()
    {
        return $this->approved;
    }
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setContent($content)
    {
        $this->content = $content;
    }
    public function setImg($img)
    {
        $this->img = $img;
    }
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }
    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
    }
    public function setApproved($approved)
    {
        $this->approved = $approved;
    }
    public function getAll()
    {
        $db = db::connect();
        $sql = "SELECT * FROM article JOIN user ON user.userId = article.userId WHERE approved = 1 ORDER BY datePosted DESC";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $hd = new Homedemo(null, null, null, null, null, null, null);
    $result = $hd->getAll();


    ?>
</body>

</html>