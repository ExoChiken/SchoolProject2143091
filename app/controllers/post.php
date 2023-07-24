<?php

class Post extends Controler {


    public function index($id){
            $data['post'] = $this->model(POST)->getPostBody($id);
            $data['user'] = $this->model(POST)->getPostAuthor($id);
            $data['category'] = $this->model(POST)->getAllCategory();
            $this->view('template/header', $data);
            $this->view ('post/index', $data);
            $this->view('template/footer');
    }

    public function short()
    {
        $data['test'] = $_GET['url'];
        
        $this->view ('test/index', $data);
            
    }

}