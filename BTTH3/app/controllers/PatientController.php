<?php
require APP_ROOT.'/app/services/PatientService.php';

class PatientController{
    public function index(){
        $patientService = new PatientService();
        $patients = $patientService->getAllPatients();
        include APP_ROOT.'/app/views/patient/index.php';
    }

    public function add(){
        include APP_ROOT.'/app/views/patient/add.php';
    }

    public function store(){
        if(isset($_POST['tenBenhNhan']) && isset($_POST['ngayKham']) && isset($_POST['trieuChung']) && isset($_POST['idBacSi'])){
            $tenBenhNhan = trim($_POST['tenBenhNhan']);
            $ngayKham = trim($_POST['ngayKham']);
            $trieuChung = trim($_POST['trieuChung']);
            $idBacSi = trim($_POST['idBacSi']);
            $patientService = new PatientService();
            $patient = $patientService->addPatient($tenBenhNhan,$ngayKham,$trieuChung,$idBacSi);
            header("location:".DOMAIN."/public/index.php?controller=patient&action=index");
        }
        else{
            require APP_ROOT.'/app/views/patient/add.php';
        }
    }

    public function delete(){
        $id = $_GET['id'];
        $patientService = new PatientService();
        $patientService->deletePatient($id);
        header("location:".DOMAIN."/public/index.php?controller=patient&action=index");
    }
}

