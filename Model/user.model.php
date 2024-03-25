<?php
// IDEA:
require_once ("../config/db.class.php");
class Account
{
    public $id;
    public $username;
    public $password;
    public $role;
    public $email;

    public function __construct($id, $username, $password, $role, $email)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->email = $email;
    }


    public function save()
    {
        $db = new Db();

        // thêm product vào CSDL
        $sql = "INSERT INTO `account`(`id`, `username`, `password`, `role`, `email`) VALUES ($this->id,$this->username, $this->password, $this->role, $this->email)";

        $result = $db->query_execute($sql);

        return $result;
    }

    public static function Login($username, $password)
    {
        $db = new Db();
        $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
        $result = $db->query_execute($sql);
        return $result;
    }
}