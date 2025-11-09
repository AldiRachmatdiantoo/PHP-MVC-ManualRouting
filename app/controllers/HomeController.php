<?php
class HomeController extends Controller {
    
    public function index(){
        $this->view('templates/header', ['title' => 'Home', 'style' => 'mahasiswa']);
        $this->view('home/index');
        $this->view('templates/footer');
    }
}
?>