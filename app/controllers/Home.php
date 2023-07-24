<?php
class Home extends Controler {
    public function index()
    {
        $data['login'] = $this->model(USER)->getSession();
        $data['post'] = $this->model(POST)->homeSkipper();
        $data['hero'] = $this->model(POST)->getAllPost();
        $data['category'] = $this->model(POST)->getAllCategory();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

}