<?php
class Connect {
    private $host;
    private $user;
    private $pass;
    private $db;
    public $conn;

    // Konstruktor untuk menginisialisasi variabel dan membuat koneksi
    public function __construct($host, $user, $pass, $db) {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->db = $db;
        $this->connect();
    }

    // Metode untuk menghubungkan ke database
    private function connect() {
        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        if ($this->conn->connect_error) {
            die("Failed to connect to DB: " . $this->conn->connect_error);
        }
    }

    // Metode untuk menutup koneksi
    public function close() {
        $this->conn->close();
    }

    // Metode untuk menjalankan query
    public function query($sql, $params = null) {
        if ($params) {
            $stmt = $this->conn->prepare($sql);
            if ($stmt === false) {
                die("Failed to prepare statement: " . $this->conn->error);
            }
            $types = str_repeat('s', count($params));
            $stmt->bind_param($types, ...$params);
            $stmt->execute();
            return $stmt->get_result();
        } else {
            return $this->conn->query($sql);
        }
    }

    // Metode untuk memeriksa hasil query
    public function checkResult($result) {
        if ($result === TRUE) {
            return "Query executed successfully";
        } elseif ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return "No results found";
        }
    }
}
?>
