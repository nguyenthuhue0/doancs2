<?php

class db extends PDO
{
    // 
    private function __construct($dsn, $username, $password)
    {
        parent::__construct($dsn, $username, $password);
    }
    static function connect()
    {
        $dsn = 'mysql:host=localhost;dbname=pte';
        $username = 'root';
        $password = '';
        try {
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "console.log('Connected successfully')";
        } catch (PDOException $e) {
            echo "console.log('Connection failed: " . $e->getMessage() . "')";
            die("Connection failed: " . $e->getMessage());
        }
        return $conn;
    }
    public function select($sql, $array = array(), $fetchMode = PDO::FETCH_ASSOC)
    {
        $stmt = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $stmt->bindValue("$key", $value);
        }
        $stmt->execute();
        return $stmt->fetchAll($fetchMode);
    }


}
