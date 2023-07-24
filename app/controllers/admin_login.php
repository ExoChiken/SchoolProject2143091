<?php
class Admin_login extends Controler{
    
    public function index() 
    {
        $this->signIn();
    }

    public function signIn() 
    {
        // Cek keberadaan session sebelum proses login
        if ($this->model(USER)->getSession()) {
            // Pengguna sudah login, arahkan atau berikan pesan sesuai kebutuhan
            header('Location: http://localhost:8080/uas/public/admin_login/homepage');
            exit();
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) 
        {
            // will check user login status, if the password && username corrent
            // then user will be redirect to homepage
            if($this->model(USER)->loginAccount($_POST) === true)
            {
                header('Location: http://localhost:8080/uas/public/admin_login/homepage');
                exit();
            }
            else
            {
                $data['err'] = "check your input";
                $this->view('template/header');
                $this->view('login/index', $data);
            }
        }

        // Menampilkan halaman login
        $this->view('template/header');
        $this->view('login/index');

    }


    public function logOut()
    {
        $this->model(USER)->logOutAccount();
    }
    
    
    public function controlPanel() //cant be access yet, use post instead
    {
        if ($this->model(USER)->getSession() === true) 
        {
            $data['login'] = $_SESSION['session_username'];
            $data['login_id'] = $_SESSION['session_username_id'];
            $data['category'] = $this->model(POST)->getAllCategory();
            $this->view('controlPanel/index', $data);
        }
    }    

    public function savePost() // save new post
    {
        if($this->model(POST)->saveNewPost($_POST) > 0)
        {

            header('Location:http://localhost:8080/uas/public/');
            exit();
        }
        
    }

    public function post()
    {
        session_start();
        $data['ControlPanelTemplate'] = NEWPOST;
        $data['login_id'] = $_SESSION['session_username_id'];
        $data['login'] = $_SESSION['session_username'];
        $data['category'] = $this->model(POST)->getAllCategory();
        $this->view('ControlPanel/index', $data);
    }

    public function user()
    { 
        session_start();
        $data['ControlPanelTemplate'] = USERS;
        $data['login_id'] = $_SESSION['session_username_id'];
        $data['login'] = $_SESSION['session_username'];
        $data['user'] = $this->model(POST)->getAllUsers($_SESSION['session_username_id']);
        $this->view('ControlPanel/index', $data);
    }

    public function homepage()
    { 
        session_start();
        $data['ControlPanelTemplate'] = HOMEPAGE;
        $data['login_id'] = $_SESSION['session_username_id'];
        $data['login'] = $_SESSION['session_username'];
        $data['post'] = $this->model(POST)->getUser($data ['login_id']); 
        $data['shrtLink'] = $this->model(POST)->shrtLink($data ['login_id']); 
        $this->view('ControlPanel/index', $data);
    }

    public function update() //update user
    {
        if ($this->model(USER)->updateData($_POST))
        {
            header('Location: http://localhost:8080/uas/public/admin_login/user');
            exit();
        }
    }

    public function updatePost($id)// redirect user to edit post page
    {
        session_start();
        $data['ControlPanelTemplate'] = UPDATEPOST;
        $data['login_id'] = $_SESSION['session_username_id'];
        $data['login'] = $_SESSION['session_username'];
        $data['category'] = $this->model(POST)->getAllCategory();
        $data['post'] = $this->model(POST)->getPostBody($id);
        $this->view('ControlPanel/index', $data);
    }

    public function updateDataPost() //save post from edit post page
    {
        if($this->model(POST)->updateData($_POST))
        {
            $this->model(POST)->ifSuccess($_POST['id']);
        }
    }

    public function deletePost($id)//delete data from posts table
    {
        if($this->model(POST)->deleteData($id))
        {
            header('Location:http://localhost:8080/uas/public/admin_login/homepage');
            exit();
        }
    }

    public function shortLinkNoAds()
    {
        $this->model(GENERAL)->generateLink($_POST);
    }

}