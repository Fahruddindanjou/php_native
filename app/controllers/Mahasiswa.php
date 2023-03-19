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

    public function tambah()
    {
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $email = $_POST['email'];
        $db= new Database;
        $db->insert('mahasiswa' , "'','$nama','$nip','$email'");
        
        header('location:../mahasiswa');
        exit;
    }

    public function delete($id)
    {
        $db = new Database;
        $db->delete('mahasiswa' , $id);

        header('location:../mahasiswa');
        exit;
    }

    public function update($id)
    {
        $db = new Database;
        
        
        $nama = $_POST['nama'];
        $nip = $_POST['nip'];
        $email = $_POST['email'];

        $db->update('mahasiswa' , "nama='$nama',nip='$nip',email='$email'" , $id);
        header('location:../mahasiswa');
        exit;

    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->view('layouts/header', $data);
        $this->view('mahasiswa/index',$data);
        $this->view('layouts/footer');
    }
}