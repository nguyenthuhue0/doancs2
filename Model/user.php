<?php 
    class user {
        private $db;
        private $username;
        private $password;
        private $email;

        public function __construct(PDO $db) {
            $this->db = $db;
        }
        public function getUsername() {
            return $this->username;
        }

        public function setUsername($username) {
            $this->username = $username;
        }

        public function getPassword() {
            return $this->password;
        }

        public function setPassword($password) {
            $this->password = $password;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }
        public function checkUser($username, $password){
            try {
                $stmt = $this->db->prepare("SELECT * FROM user WHERE username = :username AND password = :password");
                $stmt->bindValue(':username', $username);
                $stmt->bindValue(':password', $password);
                $stmt->execute();
                
                $rowCount = $stmt->rowCount();
            
                if ($rowCount > 0) {
                    $result = $stmt->fetch();
                    $role = $result['role'];
                    return $role;
                } else {
                    return $role = 3;
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        public function isUsernameTaken($username)
        {
            $stmt = $this->db->prepare("SELECT COUNT(*) as count FROM user WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result['count'] > 0;
        }

        public function insertUser($username, $password, $email)
        {
            try {
                $stmt = $this->db->prepare("INSERT INTO user (username, password, email, role) VALUES (?, ?, ?, 0)");

                $stmt->bindParam(1, $username, PDO::PARAM_STR);
                $stmt->bindParam(2, $password, PDO::PARAM_STR);
                $stmt->bindParam(3, $email, PDO::PARAM_STR);

                $stmt->execute();

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        public function getUserId($username)
        {
            $stmt = $this->db->prepare("SELECT userId FROM user WHERE username = :username");
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $result = $stmt->fetch();
            $userId = $result['userId'];

            return $userId;
        }
    }
?>