<?php
class AboutController extends Controller {
    
    public function index(){
        $this->view('templates/header', ['judul' => 'about']);
        $this->view('about/index');
        $this->view('templates/footer');
    }
}
?>