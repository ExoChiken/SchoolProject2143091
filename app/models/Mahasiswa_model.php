<?php

class Mahasiswa_model { 
    private $db;
    private $table = ' data';

    public function __construct(){
        $this->db = new Database;
    }

    public function getAllMahasiswa(){
        $this->db->query('SELECT * FROM' . $this->table );
        return $this->db->Allset();
    }

    public function getMahasiswa($id){
        $this->db->query('SELECT * FROM' . $this->table . ' WHERE id=:id' );
         $this->db->bind('id', $id);
         return $this->db->singleSet();
    }

    public function tambahDataMhs($data)
    {
        $query =  "INSERT INTO data 
                    VALUES
                   ('', :nama, :umur,:email,:jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();
        return $this->db->countRow();
    }

    public function hapusDataMhs($id)
{
    $query = "DELETE FROM data
              WHERE id = :id";
    
    $this->db->query($query);
    $this->db->bind('id', $id);
    $this->db->execute();
    return $this->db->countRow();
}

public function updateDataMhs($data)
{
    $query = "UPDATE data 
              SET nama=:nama,
                  umur=:umur,
                  email=:email,
                  jurusan=:jurusan 
              WHERE id=:id";
        
    $this->db->query($query);
    $this->db->bind('id', $data['id']);
    $this->db->bind('nama', $data['nama']);
    $this->db->bind('umur', $data['umur']);
    $this->db->bind('email', $data['email']);
    $this->db->bind('jurusan', $data['jurusan']);

    $this->db->execute();
    return $this->db->countRow();
}

}