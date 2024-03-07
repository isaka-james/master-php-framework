<?php

class Database {
    private $host;
    private $username;
    private $password;
    private $database;
    private $connection;

    public function __construct($host, $username, $password, $database) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection=$pdo;
            //echo "Connected successfully";
        } catch (PDOException $e) {
            die("Connection failed: host: ${host}, username: ${username},password: ${password},db: ${database} " . $e->getMessage());
        }

        $this->connection=$pdo;

        

    }

    public function test(){
        
    $stmt = $this->connection->query("SELECT * FROM users");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Username: " . $row['username'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        // Add more fields as needed
        echo "<br>";
    }

    }


    
}

// Get the instance
$database_instance = new Database($SERVER_NAME, $USERNAME, $PASSWORD, $DATABASE);

