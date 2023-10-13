<?php
require APP_ROOT.'/app/services/DoctorService.php';

class DoctorController{
    public function index(){
        $doctorService = new DoctorService();
        $doctors = $doctorService->getAllDoctors();
        include APP_ROOT.'/app/views/doctor/index.php';
    }

    public function add(){
        include APP_ROOT.'/app/views/doctor/add.php';
    }
    public function store(){
        if(isset($_POST['tenBacSi']) && isset($_POST['chuyenKhoa'])){
            $tenBacSi = trim($_POST['tenBacSi']);
            $chuyenKhoa = trim($_POST['chuyenKhoa']);

            $doctorService = new DoctorService();
            $doctor = $doctorService->addDoctor($tenBacSi,$chuyenKhoa);
            header("location:".DOMAIN."/public/index.php?controller=doctor&action=index");
        }
        else{
            require APP_ROOT.'/app/views/class/add.php';
        }
    }
    public function delete(){
        $id = $_GET['id'];
        $doctorService = new DoctorService();
        $doctorService->deleteDoctor($id);
        $doctorService->deleteAllPatientByDoctor($id);
        header("location:".DOMAIN."/public/index.php?controller=doctor&action=index");
    }
}