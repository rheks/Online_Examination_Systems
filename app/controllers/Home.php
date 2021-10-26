<?php

class Home extends Controller {
    public function index() {
        $data['title'] = 'Online Examination Systems';
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function login() {
        $data['title'] = 'Login | Online Examination Systems';
        $this->view('templates/header', $data);
        $this->view('home/login', $data);
        $this->view('templates/footer');
    }
}