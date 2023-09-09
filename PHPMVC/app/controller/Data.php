<?php
class Data extends Controller
{
   
    public function data_siswa()
    {
        $data['judul'] = "Kompetensi Keahlian";
        $data['data_siswa'] = $this->model("Data_model")->getAllSiswa();
        $this->view('templates/header', $data);
        $this->view('data/data_siswa', $data);
        $this->view('templates/footer');
    }
    public function data_guru()
    {
        $data['judul'] = "Kompetensi Keahlian";
        $data['data_siswa'] = $this->model("Data_model")->getAllGuru();
        $this->view('templates/header', $data);
        $this->view('data/data_guru', $data);
        $this->view('templates/footer');
    }
    
}