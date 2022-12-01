<?php

class db{

    private $connection;
    private $sql;

    public function __construct()
    {
        $this->connection = mysqli_connect("localhost","root","","amit");
    }
    public function insert(string $table,array $data):object
    {
        $columns = "";
        $values = "";
        foreach($data as $key => $value){
            $columns .= "`$key` ,";
            $values .= " '$value' ,";
        }

        $columns = rtrim($columns,",");
        $values = rtrim($values,",");

        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $this;
    }

    public function update(string $table,array $data):object
    {
        $row = "";
        foreach($data as $key => $value){
            $row .= "`$key` = '$value' ,";
        }

        $row = rtrim($row,",");

        $this->sql = "UPDATE `$table` SET $row ";

        return $this;
    }
    
    public function delete(string $table):object
    {
        $this->sql = "DELETE FROM `$table`";
        return $this;
    }

    public function select(string $table,string $columns):object
    {
        $this->sql = "SELECT $columns from `$table`";
        return $this;
    }

    public function where(string $column,string $operator,mixed $value):object
    {
        $this->sql .= "WHERE `$column` $operator $value";
        return $this;
    }

    public function first():array
    {
        $q = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_assoc($q);
    }

    public function all():array
    {
        $q = mysqli_query($this->connection,$this->sql);
        return mysqli_fetch_all($q,MYSQLI_ASSOC);
    }

    public function excute():bool
    {
        mysqli_query($this->connection,$this->sql);
        return mysqli_affected_rows($this->connection);
    }

    public function __destruct()
    {
        mysqli_close($this->connection);
    }
}