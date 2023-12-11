<?php
class database
{
    private static $dsn = 'mysql:host=localhost;dbname=pte';
    private static $username = 'root';
    private static $password = '';
    private static $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

// connect to database with PDO
    public function conn(){
        try {
            // Create a PDO instance
            $conn = new PDO(self::$dsn, self::$username, self::$password);
        
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
            echo "console.log('Connected successfully')";
        } catch (PDOException $e) {
            echo "console.log('Connection failed: " . $e->getMessage() . "')";
            die("Connection failed: " . $e->getMessage());
        }
    }

    public static function getDB()
    {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(
                    self::$dsn,
                    self::$username,
                    self::$password
                );
                self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "console.log('Connected to database')";
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                exit();
            }
        }
        return self::$db;
    }

}
