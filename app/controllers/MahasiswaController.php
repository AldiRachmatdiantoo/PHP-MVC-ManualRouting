<?php
class MahasiswaController extends Controller
{

    public function index()
    {
        $this->view('templates/header', ['title' => 'List Mahasiswa', 'style' => 'mahasiswa']);
        $this->view('mahasiswa/mahasiswa', ['mahasiswa' => $this->model('Mahasiswa')->all()]);
        $this->view('templates/footer');
    }
    public function create()
    {
        $this->view('templates/header', ['title' => 'Tambah Mahasiswa', 'style' => 'tambah-mahasiswa']);
        $this->view('mahasiswa/create');
        $this->view('templates/footer');
    }
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && $this->model('Mahasiswa')->create() > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function edit($nim = null)
    {
        $this->view('templates/header', ['title' => 'Edit Mahasiswa', 'style' => 'tambah-mahasiswa']);
        $data['mhsTarget'] = $this->model('Mahasiswa')->getData($nim);
        if ($data['mhsTarget']) {
            $this->view('mahasiswa/edit', ['mhsTarget' => $data['mhsTarget']]);
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
        $this->view('templates/footer');
    }
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST" && $this->model('Mahasiswa')->update() > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
    public function delete($nim = null)
    {
        if ($_SERVER['REQUEST_METHOD'] === "GET" && $this->model('Mahasiswa')->delete($nim) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        }
    }
}
