<?php
class AboutController extends Controller {
    
    public function index(){
        $this->view('templates/header', ['title' => 'about', 'style' => 'mahasiswa']);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}
?>