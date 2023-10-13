<?php
class Doctor{
    private $id,$tenBacSi,$chuyenKhoa;
    public function __construct($id,$tenBacSi,$chuyenKhoa)
    {
        $this->id = $id;
        $this->tenBacSi = $tenBacSi;
        $this->chuyenKhoa = $chuyenKhoa;
    }

    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getTenBacSi(){
        return $this->tenBacSi;
    }
    public function setTenBacSi($tenBacSi){
        $this->tenBacSi = $tenBacSi;
    }
    public function getChuyenKhoa(){
        return $this->chuyenKhoa;
    }
    public function setChuyenKhoa($chuyenKhoa){
        $this->chuyenKhoa = $chuyenKhoa;
    }

}