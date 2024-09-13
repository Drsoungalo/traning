<?php
class Personnes extends controller {
    public function index(){
        $perso=new Personne();
        if (isset($_POST['submit'])) {
            //echo "ok";exit();
        $perso->inscription(['firstName','lastName','telephone','email']);
        }
        $this->view('inscription');
    }
}