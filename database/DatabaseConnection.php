<?php

class DatabaseConnection {
    private $conn;

    function startConnection() {
        $servername = "DESKTOP-F2BVPQ5"; 
        $db = "Web_Dev"; 
        $username = ""; 
        $password = ""; 

        try {
            $this->conn = new PDO("sqlsrv:Server=$servername;Database=$db", $username, $password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection Failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>
