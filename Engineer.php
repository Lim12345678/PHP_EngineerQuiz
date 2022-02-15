<?php
require_once ("DB.php");
class Engineer
{
    private $db;

    public function __construct()
    {
        $db = new DB();
        $this->db = $db->getDB();
    }

    //contents 랜덤값 가져오기
    public function getContentsRandom($table) {
        try {
            $stmt = $this->db->prepare("select * from $table order by rand() limit 4");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(Exception $e) {
            return $e;
        }
    }

    //contents 전체 값 출력
    public function getContents($table) {
        try {
            $stmt = $this->db->prepare("select * from $table");
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch(Exception $e) {
            return $e;

        }
    }

}