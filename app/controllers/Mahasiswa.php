<?php

class Mahasiswa extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index',$data);
        $this->view('layouts/footer');
    }
}