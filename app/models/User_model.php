<?php 
class User_model {
    private $db;
    private $table = ' posts';
    private $user = ' users';
    private $category = ' category';

    public function __construct(){
        $this->db = new Database;   
    }

    public function getSession() 
    {   
    session_start();        
    if (!empty($_SESSION['session_username']) && !empty($_SESSION['session_username'])) {
        return true;
    }
    return false;
    }


    public function loginAccount($data) 
    {
        $this->db->query('SELECT * FROM ' . $this->user . ' WHERE username = :username');
        $this->db->bind('username', $data['username']);
        $user = $this->db->singleSet();
        
        if ($user) {
            if ($data['password'] === $user['password']) {
                $_SESSION['session_username'] = $data['username'];
                $_SESSION['session_username_id'] = $user['user_id'];
                return true;
            } else {    
                return false;
            }
        } 
    }
    
    public function logOutAccount() {
        session_start();
        session_destroy();
        header('Location: http://localhost:8080/uas/public/');
        exit();
    }    
    
    public function updateData($data) {
        $this->db->query('UPDATE ' . $this->user . ' SET username = :username, password = :password WHERE id = :id');
        $this->db->bind('id', $data['id']);
        $this->db->bind('username', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return true;
    }
    
}