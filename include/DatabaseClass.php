<?php

// include_once 'connect.php';
include_once 'DatabaseConnectionSingleton.php';
class database
{

    private $host;
    private $dbUser;
    private $dbPass;
    private $dbName;
    public $conn;

    function __construct()
    {
        require_once 'connect.php';
        $this->host = $host;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbName = $dbName;
        $this->conn = Singleton::getinstance();
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

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
    // function select($sql) {
    //     if (!$result = $this->conn->query($sql)) {
    //         throw new Exception("can not make query :". $sql);
    //         // return false;
    //     }
    //     if ($row = $result->fetch_array(MYSQLI_ASSOC))
    //         $result->close();
    //     return $row;
    // }

    function select($sql)
    {
        if ($result = $this->conn->query($sql)) {
            if ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $result->close();
                return $row;
            }
        } else {
            throw new Exception("Can not make query : " . $sql);
            return false;
        }
    }

    // update a record in a table
    // function update($sql) {
    //     if (!$result = $this->conn->query($sql)) {
    //         throw new Exception("Error:can not execute the query");
    //     } else {
    //         return true;
    //     }
    // }

    function update($sql)
    {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            throw new Exception("Error:can not execute the query");
        }
    }

    // insert in a table
    // function insert($sql) {
    //     if ($result = $this->conn->query($sql)) {
    //         return true;
    //     } else {
    //         throw new Exception("Error :SQL:". $sql);
    //         // return false;
    //     }
    // }

    function insert($sql)
    {
        if ($this->conn->query($sql) === true) {
            return true;
        } else {
            throw new Exception("Error :SQL:" . $sql);
            return false;
        }
    }

    // // delete from table
    // function delete($sql) {
    //     if (!$result = $this->conn->query($sql)) {
    //         throw new Exception("Error: not deleted");
    //         // return false;
    //     } else {
    //         return true;
    //     }
    // }

    function delete($sql)
    {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            throw new Exception("Error: not deleted");
            return false;
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