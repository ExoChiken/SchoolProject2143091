<?php

class Search extends Controler {

    public function index(){
        $this->Search();
    }

    public function Search(){
        $data['post'] = $this->model(GENERAL)->searchQuerry($_POST);
        $data['category'] = $this->model(POST)->getAllCategory();
        $this->view('template/header');
        $this->view('search/index', $data);
        $this->view('template/footer');
    }
}