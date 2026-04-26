<?php

    /*
    * PDO database Class
    * nak connect ke database
    * nak create prepared statement
    * nak bind values
    * nak return vows dan results
    */

    class Database{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){
            //nak set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );

            //nak create pdo instance
            try{
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

            } catch(PDOException $e){
                $this->error = $e->getMessage();
                echo $this->error;
            }

        }
    }