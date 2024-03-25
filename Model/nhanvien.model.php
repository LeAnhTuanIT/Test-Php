<?php
require ("..\config\db.class.php");
class NhanVien
{
    public $maNV;
    public $tenNV;
    public $gioiTinh;
    public $noiSinh;
    public $MaPhongBan;
    public $Luong;


    public function __construct($maNV, $tenNV, $gioiTinh, $noiSinh, $MaPhongBan, $Luong)
    {
        $this->maNV = $maNV;
        $this->tenNV = $tenNV;
        $this->gioiTinh = $gioiTinh;
        $this->noiSinh = $noiSinh;
        $this->MaPhongBan = $MaPhongBan;
        $this->Luong = $Luong;
    }

    public function save()
    {
        $db = new Db();

        // thêm product vào CSDL
        $sql = "INSERT INTO `nhanvien`(`Ma_NV`, `Ten_NV`, `Phai`, `Noi_Sinh`, `Ma_Phong`, `Luong`) VALUES ($this->maNV, $this->tenNV, $this->gioiTinh, $this->noiSinh, $this->MaPhongBan, $this->Luong)";

        $result = $db->query_execute($sql);

        return $result;
    }

    public static function listNhanVien()
    {
        $db = new Db();
        $sql = "SELECT * FROM nhanvien, phongban WHERE nhanvien.Ma_Phong = phongban.Ma_Phong";
        $result = $db->select_to_array($sql);
        return $result;
    }
}


?>