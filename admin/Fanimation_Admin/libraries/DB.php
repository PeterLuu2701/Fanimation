<?php
class DB {
    private $conn;
    public function __construct()
    {
        $this->conn = new Mysqli(HOST, USER, PASSWORD, DB_name);
    }
    public static function queryAll($table){
        $res = [];
        $query = $this->conn->query("SELECT * FROM $table");
        while ($r = $query->fetch_object()){
            $res[] = $r;
        }
        return $res;
    }
}