<?php

class Short extends Controler 
{

    public function index()
    {
        $this->short();
    }

    public function short()
    {
        $data['test'] = $this->model(GENERAL)->countDownPage($_GET['post']);
        $this->view('template/header', $data);
        $this->view ('test/index', $data);
        $this->view('template/footer');
    }
}