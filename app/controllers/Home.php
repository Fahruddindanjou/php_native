<?php

class Home extends Controller{
    public function index(){
        $data['judul'] = 'Home';
        $this->view('layouts/header', $data);
        $this->view('home/index');
        $this->view('layouts/footer');
    }
    public function about(){
        $this->view('home/about');
    }
}