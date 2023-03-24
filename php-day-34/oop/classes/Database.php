<?php

class Database
{
    public $conn, $tableName;

    function __construct($tableName)
    {
        $hostname = "localhost";
        $username = "mmn";
        $password = "myominnaing";
        $database = "profile";
        $this->conn = mysqli_connect($hostname, $username, $password, $database);
        $this->tableName = $tableName;
    }

    public function create(array $data)
    {
        //  INSERT INTO $tableName (name,money) VALUES ("values","values")
        // return [array_keys($data), array_values($data)];


        $sql = "INSERT INTO " . $this->tableName . " ";
        // "INSERT INTO fruits "

        $sql .= "(" . join(",", array_keys($data)) . ") VALUES" . " ";
        //"INSERT INTO fruits (name,money) VALUES"

        $value = "'" . join("','", array_values($data)) . "'";
        $sql .= "($value)";
        //"INSERT INTO fruits (name,money) VALUES ("values", "values") "

        mysqli_query($this->conn, $sql);
        return $this->conn->insert_id;
    }

    public function index(): array
    {
        $sql = "SELECT * FROM $this->tableName";
        $query = mysqli_query($this->conn, $sql);
        $rows = [];

        while ($row = mysqli_fetch_object($query)) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function oneRow(int $id): object
    {
        $sql = "SELECT * FROM $this->tableName WHERE id = $id";
        $query = mysqli_query($this->conn, $sql);
        $row = mysqli_fetch_object($query);

        return $row;
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM $this->tableName WHERE id = $id";
        $query = mysqli_query($this->conn, $sql);

        return $query;
    }


    public function update(int $id, array $data)

    {

        //  "UPDATE fruits SET name= 'khaing thin thin htay', money='5000000' WHERE id = 107";
        $key = array_keys($data);
        $value = array_values($data);
        $sql = "UPDATE $this->tableName SET $key[0] =$value[0] , $key[1]=$value[1] WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
}
