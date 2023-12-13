<?php

class database
{
    
    // Attributes
    private $host;
    private $dbUser;
    private $dbName;
    private $dbPass;
    public $conn;
    
    // Constructor
    function __construct()
    {
        $this->host = 'localhost';
        $this->dbName = 'db_freelancer';
        $this->dbUser = 'root';
        $this->dbPass = '';
        
        include_once 'c:\xampp\htdocs\SW1_Project\include\DatabaseConnectionSingleton.php';
        $this->conn = Singleton::getinstance($this->host, $this->dbUser, $this->dbPass, $this->dbName);
    }
    

    // Methods
    // return number of records
    function check($sql)
    {
        if ($result = $this->conn->query($sql)) {
            $num = $result->num_rows;
            return $num;
        }
    }

    // return records (in array)
    function display($sql)
    {
        if ($result = $this->conn->query($sql)) {
            $num = $result->num_rows;
            if ($num > 0) {
                for ($i = 0; $i < $num; $i++) {
                    $data[$i] = $result->fetch_array(MYSQLI_ASSOC);
                }
                return $data;
            }
        } else {
            throw new Exception("Problem in query:" . $sql);
        }
    }

    // return one record only
    function select($sql)
    {
        if ($result = $this->conn->query($sql)) {
            if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $result->close();
            }
            return $row;
        } else {
            throw new Exception("Can not make query : " . $sql);
            // return false;
        }
    }

    // update a record in a table
    function update($sql)
    {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            throw new Exception("Error:can not execute the query");
        }
    }

    // insert in a table
    function insert($sql)
    {
        if ($this->conn->query($sql) === true) {
            return true;
        } else {
            throw new Exception("Error :SQL:" . $sql);
            // return false;
        }
    }

    // delete from table
    function delete($sql)
    {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            throw new Exception("Error: not deleted");
            // return false;
        }
    }

    // return last record in a table
    function getLastRecordData($tablename , $column)
    {
        $query = "SELECT * FROM $tablename ORDER BY $column  DESC LIMIT 1";
        if ($result = $this->conn->query($query)) {
            $data = $result->fetch_array(MYSQLI_ASSOC);
        }
        return $data;
    }

    public function close() {
        $this->conn->close();
    }
}

?>