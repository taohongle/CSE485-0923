<?php
require APP_ROOT.'/app/model/doctor.php';
require APP_ROOT.'/app/lib/DBconnection.php';

class DoctorService{
    public function getAllDoctors(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn!=null){
            $sql = "SELECT * FROM bacsi";
            $stmt = $conn->query($sql);
            $result = $stmt->fetchAll();

            $doctors = [];
            foreach($result as $row){
                $doctor = new Doctor($row[0],$row[1],$row[2]);
                $doctors[] = $doctor;
            }
            return $doctors;
        }
    }

    public function addDoctor($tenBacSi,$chuyenKhoa){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn!=null){
            $sql = "INSERT INTO bacsi(tenBacSi,chuyenKhoa) VALUES('$tenBacSi','$chuyenKhoa')";
            $stmt = $conn->query($sql);
            return true;
        }

    }

    public function deleteDoctor($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $query = "DELETE FROM bacsi WHERE id = '$id'";
            $conn->query($query);
        }
    }

    public function deleteAllPatientByDoctor($id)
    {
        try {
        $dbconnection = new DBConnection();
        $conn = $dbconnection->getConnection();

        if ($conn != null) {
            $query = "DELETE FROM benhnhan where idBacSi = '$id'";
            $conn->query($query);
        }
        } catch (PDOException $e) {
        $e->getMessage();
        }
    }
    
}