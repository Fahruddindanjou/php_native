<?php

class Mahasiswa extends Controller 
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index',$data);
        $this->view('layouts/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/detail',$data);
        $this->view('layouts/footer');
    }
}