<?php

class Users extends Controler{

    public function index($id) {
        $data['judul'] = 'Home';
        $data['post'] = $this->model(POST)->userSkipper($id);
        $data['hero'] = $this->model(POST)->getUser($id);
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}