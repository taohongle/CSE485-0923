<?php
require APP_ROOT.'/app/model/patient.php';
require APP_ROOT.'/app/lib/DBconnection.php';

class PatientService{
    public function getAllPatients(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn!=null){
            $sql = "SELECT * FROM benhnhan";
            $stmt = $conn->query($sql);
            $result = $stmt->fetchAll();

            $patients = [];
            foreach($result as $row){
                $patient = new Patient($row[0],$row[1],$row[2],$row[3],$row[4]);
                $patients[] = $patient;
            }
            return $patients;
        }
    }
    public function getNameDoctorByPatient($std){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $id = $std->getId();
            $query = "SELECT tenBacSi FROM bacsi INNER JOIN benhnhan ON benhnhan.idBacSi = bacsi.id WHERE benhnhan.id = '$id'";
            $stmt = $conn->query($query);
            $tenBacSi = $stmt->fetch()[0];
            return $tenBacSi;
        }
    }
    public function getAllDoctorName(){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $query = "SELECT * FROM bacsi";
            $stmt = $conn->query($query);
            $result = $stmt->fetchAll();
            return $result;
        }
    }

    public function addPatient($tenBenhNhan,$ngayKham,$trieuChung,$idBacSi){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $query = "INSERT INTO benhnhan(tenBenhNhan,ngayKham,trieuChung,idBacSi) VALUES ('$tenBenhNhan','$ngayKham','$trieuChung','$idBacSi')";
            $stmt = $conn->query($query);
            return true;
        }
    }

    public function deletePatient($id){
        $dbConnection = new DBConnection();
        $conn = $dbConnection->getConnection();

        if($conn != null){
            $query = "DELETE FROM benhnhan WHERE id = '$id'";
            $stmt = $conn->query($query);
        }
    }
}