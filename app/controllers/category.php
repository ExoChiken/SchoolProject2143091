<?php

class Category extends Controler {


    public function index($id) {
        $data['judul'] = 'Home';
        $data['post'] = $this->model(POST)->CategorySkipper($id);
        $data['hero'] = $this->model(POST)->getCategory($id);
        $data['category'] = $this->model(POST)->getAllCategory();

        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }

    public function category(){
        $data['judul'] = 'Home';
        $data['post'] = $this->model(POST)->HomeCategorySkipper();
        $data['hero'] = $this->model(POST)->getAllCategory();
        $data['category'] = $this->model(POST)->getAllCategory();
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer');
    }
}