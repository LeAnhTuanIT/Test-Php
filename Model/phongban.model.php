<?php
// IDEA:
require_once ("../config/db.class.php");
class PhongBan
{
    public $MaPhongBan;
    public $TenPhongBan;

    public function __construct($cate_name, $des)
    {
        $this->cateName = $cate_name;
        $this->description = $des;
    }


    public function save()
    {
        $db = new Db();

        // thêm product vào CSDL
        $sql = "INSERT INTO category (CategoryID, CategoryName, Description) VALUES ('$this->cateName', '$this->description')";

        $result = $db->query_execute($sql);

        return $result;
    }

    public static function getAllCategories()
    {
        $db = new Db();
        $sql = "SELECT * FROM phongban";
        $result = $db->select_to_array($sql);
        return $result;
    }
    public static function getId()
    {
        $db = new Db();
        $sql = "SELECT MA_PhongBan FROM phongban";
        $result = $db->select_to_array($sql);
        return $result;
    }
}