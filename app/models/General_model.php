<?php 

class General_model {

    private $db;
    private $table = " posts";
    private $link = " shortlink";

    public function __construct(){
        $this->db = new Database;
    }
    public function content($template) {
        return file_get_contents('../app/views/template/' . $template . '.php');
    }

    public function SearchQuerry($data){
        $this->db->query("SELECT * FROM " . $this->table . " WHERE title LIKE :title OR body LIKE :body");
        $this->db->bind('title', '%' . $data['search'] . '%');
        $this->db->bind('body', '%' . $data['search'] . '%');
        return $this->db->Allset();
    }
    
    public function generateLink($link)
    {
        $generateUrl = substr(md5(uniqid()), 0, 6);
        $shrtUrl = $generateUrl;

        $this->db->query('SELECT * FROM ' . $this->link . ' WHERE shortLink = :shrt');
        $this->db->bind('shrt' , $shrtUrl);
        $this->db->execute();
        $this->db->countRow();

        while ($this->db->countRow() > 0)
        {
            $generateUrl = substr(md5(uniqid()), 0, 6);
            $shrtUrl = $generateUrl;

            $this->db->query('SELECT * FROM ' . $this->link . ' WHERE shortLink = :shrt');
            $this->db->bind('shrt' , $shrtUrl);
            $this->db->execute();
            $this->db->countRow();
        }

        //insert link to database
        $this->db->query('INSERT INTO ' . $this->link . ' (shortLink, LongLink, user_id) VALUES (:shortLink, :LongLink, :user_id)');
        $this->db->bind('LongLink', $link['link']);
        $this->db->bind('user_id', $link['user_id']);
        $this->db->bind('shortLink', $shrtUrl);
        $this->db->execute();
    }

    public function countDownPage($dataID)
    {
        $this->db->query('SELECT * FROM ' . $this->link . ' WHERE shortLink =:dataID');
        $this->db->bind('dataID', $dataID);
        $this->db->execute();
        return $this->db->singleSet();
    }
}
