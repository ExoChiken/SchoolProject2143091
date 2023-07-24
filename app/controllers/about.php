<?php

class About extends Controler  {

    public function index($nama = 'Kurniawan', $pekerjaan = "Anime", $umur = 32){
       $data['nama'] = $nama;
       $data['pekerjaan'] = $pekerjaan;
       $data['umur'] = $umur;
       $data['judul'] = 'About';
       $this->view('template/header', $data);
        $this->view('about/index', $data);
        $this->view('template/footer');
    }

    public function page(){
        $data['judul'] = 'page';
        $this->view('template/header', $data);
        $this->view ('about/page');
        $this->view('template/footer');
    }

    public function test()
    {
        $data['test'] = $_POST;
        $this->view('test/index', $data);

    }
}