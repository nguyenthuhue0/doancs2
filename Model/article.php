<?php

class Article
{
    private $db;
    private $articleID;
    private $title;
    private $content;
    private $img;
    private $userId;
    private $datePosted;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getImg()
    {
        return $this->img;
    }

    public function setImg($img)
    {
        $this->img = $img;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getDatePosted()
    {
        return $this->datePosted;
    }

    public function setDatePosted($datePosted)
    {
        $this->datePosted = $datePosted;
    }

    public function saveToDatabase($role, $articleID = -1)
    {
        try {
            if ($role == 1) {
                if ($articleID == -1) {
                    $sql = "INSERT INTO article (title, content, userId, img, datePosted, approved)
                            VALUES (:title, :content, :userId, :img, :datePosted, 1)";
                } else {
                    $sql = "UPDATE article
                            SET title = :title,
                                content = :content,
                                userId = :userId,
                                img = :img,
                                datePosted = :datePosted,
                                approved = 1
                            WHERE articleId = :articleId;";
                }
            } else if ($role == 0) {
                $sql = "INSERT INTO article (Title, Content, userId, img, datePosted, approved)
                        VALUES (:title, :content, :userId, :img, :datePosted, 0)";
            }
            $stmt = $this->db->prepare($sql);
            if ($articleID != -1) {
                $stmt->bindParam(':articleId', $articleID);
            }
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':content', $this->content);
            $stmt->bindParam(':img', $this->img);
            $stmt->bindParam(':userId', $this->userId);
            $stmt->bindParam(':datePosted', $this->datePosted);

            $stmt->execute();
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
    public function loadArticle($id)
    {
        try {
            $sql = "SELECT * FROM article WHERE articleId = :articleID";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':articleID', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function loadAllArticleAd()
    {
        try {
            $sql = "SELECT * FROM article WHERE approved = 1";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function getArticleFromId($id)
    {
        try {
            $sql = "SELECT * FROM article WHERE articleId = :articleID";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':articleID', $id);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    public function deleteArticle($articleID)
    {
        try {
            $sql = "DELETE FROM article WHERE articleID = :articleID";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':articleID', $articleID);
            $stmt->execute();

            $rowCount = $stmt->rowCount();

            return $rowCount > 0;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
