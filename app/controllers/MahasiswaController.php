<?php
class MahasiswaController extends Controller {

    public function index(){
        $this->view('templates/header', ['title' => 'List Mahasiswa', 'style' => 'mahasiswa']);
        $this->view('mahasiswa/mahasiswa');
        $this->view('templates/footer');
    }
    public function create(){
        $this->view('templates/header', ['title' => 'Tambah Mahasiswa', 'style' => 'tambah-mahasiswa']);
        $this->view('mahasiswa/create');
        $this->view('templates/footer');
    }
    public function edit(){
        $this->view('templates/header', ['title' => 'Edit Mahasiswa', 'style' => 'tambah-mahasiswa']);
        $this->view('mahasiswa/edit');
        $this->view('templates/footer');
    }
}
?>