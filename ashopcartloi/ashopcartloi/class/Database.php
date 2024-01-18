<?php
require('configs/database.php');

class Database{
    protected $table_name;
    protected $conn;
    function __construct()
    {
        $this->conn = mysqli_connect(HOST_NAME, USERNAME, PASSWORD) or die('Lỗi kết nối!');
        mysqli_select_db($this->conn, DB_NAME);
    }

    //Lấy tất cả các bản ghi
    function getAll(){
        $sql = "select * from ". $this->table_name;
        $rows = mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");
        return $rows;
    }

    // Lấy bản ghi theo ID
    function getById($id){
        $sql = "select * from ". $this->table_name. " where id = $id";
        $rows = mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");
        $row=mysqli_fetch_array($rows);
        return $row;
    }

    function insert($fields, $values){
        $field_string = implode(", ", $fields);
        $value_string = implode("', '", $values);
        $value_string = "'$value_string'";
        $sql = "insert into ".$this->table_name." ($field_string) values ($value_string)";   
        mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");      
    }

    function update($fields, $values, $id){
        $tmp = array();
        for($i = 0; $i< count($fields); $i++)
            $tmp[] = "{$fields[$i]} = '{$values[$i]}'";
        $tmp_string = implode(', ', $tmp);
        $sql ="update ".$this->table_name. " set $tmp_string where id = $id";      
        mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");      
    }

    function delete($id){
        $sql = "delete from ". $this->table_name. " where id = $id";
        
        mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");      
    }

    function query($sql){
        
        $rows = mysqli_query($this->conn, $sql) or die("Lỗi truy vấn: $sql");
     
        return $rows;
    }
}

