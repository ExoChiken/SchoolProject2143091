<?php
class Post_model {
    private $db;
    private $table = ' posts';
    private $user = ' users';
    private $category = ' category';
    private $link = ' shortlink';

    public function __construct(){
        $this->db = new Database;   
    }
// Singlepost 
    public function getPostBody($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' 
            JOIN ' . $this->user . ' ON ' . $this->table . '.user_id = ' . $this->user .'.user_id 
            JOIN ' . $this->category . ' ON ' . $this->table . '.category_id = ' . $this->category .'.category_id 
            WHERE ' . $this->table .'.id=:id');
        
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }
    public function getPostAuthor($id) 
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' 
            JOIN ' . $this->user . ' ON ' . $this->table . '.user_id = ' . $this->user .'.user_id 
            WHERE ' . $this->table .'.id=:id');
        
        $this->db->bind('id', $id);
        return $this->db->singleSet();
    }
//category 
    public function getCategory($id) {
        $this->db->query('SELECT * FROM ' . $this->category . 
            ' JOIN ' . $this->table . ' ON ' . $this->category . '.category_id = ' . $this->table. '.category_id
            WHERE ' . $this->category. '.category_id = :id');
        $this->db->bind('id', $id);
        return $this->db->Allset();
    }
//users
    public function getUser($id) // get post base on author
    {
        $this->db->query('SELECT * FROM ' . $this->user . 
            ' JOIN ' . $this->table . ' ON ' . $this->user . '.user_id = ' . $this->table . '.user_id
            WHERE ' . $this->user. '.user_id = :id');
        $this->db->bind('id', $id);
        return $this->db->Allset();
    }

    public function getUserInfo($id) {
        $this->db->query('SELECT * FROM ' . $this->user . 
            ' JOIN ' . $this->table . ' ON ' . $this->user . '.user_id = ' . $this->table . '.user_id
            WHERE ' . $this->user. '.user_id = :id');
        $this->db->bind('id', $id);
        return $this->db->Allset();
    }
    
//get post from database but will skip the first array, the data will by use for Hero
    public function homeSkipper(){
        $postValue = $this->getAllPost();
        $skipPostValue = array_slice($postValue, 1);
        return $skipPostValue;
    }
    public function HomeCategorySkipper(){
        $postValue = $this->getAllCategory();
        $skipPostValue = array_slice($postValue, 1);
        return $skipPostValue;
    }

    public function CategorySkipper($id) {
        $postValue = $this->getCategory($id);
        $skipPostValue = array_slice($postValue, 1);
        return $skipPostValue;
    }

    public function userSkipper($id) {
        $postValue = $this->getUser($id);
        $skipPostValue = array_slice($postValue, 1);
        return $skipPostValue;
    }
    
//Get all data from database
    public function getAllPost(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->Allset();
    }
    //Save new post from admin_login
    public function getAllCategory(){
        $this->db->query('SELECT * FROM ' . $this->category);
        return $this->db->Allset();
    }

    public function getAllUsers($data){
        $this->db->query('SELECT * FROM ' . $this->user . ' WHERE user_id=:id');
        $this->db->bind('id', $data);
        return $this->db->singleSet();
    }

    public function saveNewPost($data){
        $this->db->query('INSERT INTO ' . $this->table . ' (category_id, user_id, body, title) VALUES (:category_id, :user_id, :body, :title)');
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->bind('body', $data['body']);
        $this->db->bind('title', $data['title']);
        $this->db->execute();
        return $this->db->countRow() ;
    }

    public function updateData($data) //edit post
    {
        $this->db->query('UPDATE ' . $this->table . ' SET title = :title, body = :body, category_id = :category_id, user_id = :user_id WHERE id = :id');
        $this->db->bind('id', $data['id']);
        $this->db->bind('title', $data['title']);
        $this->db->bind('body', $data['body']);
        $this->db->bind('category_id', $data['category_id']);
        $this->db->bind('user_id', $data['user_id']);
        $this->db->execute();
        return $data['id'];
    }

    public function ifSuccess($id)// redirect when update data success
    {
        header('Location:http://localhost:8080/uas/public/post/' . $id);
        exit();
    }
    
    public function deleteData($id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id =:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return true;
    }

    //shortLink

    public function shrtLink($user)
    {
        $this->db->query('SELECT * FROM ' . $this->link . ' WHERE user_id =:user');
        $this->db->bind('user', $user);
        return $this->db->Allset();
    }
}