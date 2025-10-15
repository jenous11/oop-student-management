<?php
// here, the config and connect are at same place which is apparently not good for bigger projects
class Dbh

{
    private $host="localhost";
    private $dbname="student_DB";
    private $dbusername="root";
    private $password="chelse@11";

    protected function connect(){
        try
        {
            $pdo = new PDO('mysqli:host='.$this->host.';dbname= '.$this->dbname.';dbusername='.$this->dbusername.';password '.$this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "connected successfully";        
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}
