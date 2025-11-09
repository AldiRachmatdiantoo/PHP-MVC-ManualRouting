<?php
class Controller {
    
    public function view($view, $data = []){
        require_once __DIR__ . "/../views/" . $view . ".php";
    }
}
?>