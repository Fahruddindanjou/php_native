<?php

class Mahasiswa_model{
    // private $mhs = [
    //     [
    //         "nama" => "haha",
    //         "nip" => "826386284",
    //         "email" => "haha@gmail.com"
    //     ],
    //     [
    //         "nama" => "asdasd",
    //         "nip" => "8263asdasd",
    //         "email" => "asdasds@gmail.com"
    //     ]
    // ];
    private $dbh; //database hadler
    private $stmt; //statement

    public function __construct()
    {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try{
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa()
    {
        //menjalankan query
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}