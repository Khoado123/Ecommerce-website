<?php 
    class database{
        public $conn;
        protected $severName  = "localhost:3303";
        protected $userName = "root";
        protected $passWord = "";
        protected $databaseName = "web_ban_hang";

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
    }
?>