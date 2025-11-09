<?php
class Mahasiswa
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function all()
    {
        $this->db->query("SELECT * FROM mahasiswa");
        return $this->db->resultSet();
    }
    public function create()
    {
        $this->db->query("INSERT INTO mahasiswa (nama, nim, jurusan, email) VALUES (:nama, :nim, :jurusan, :email)");
        $this->db->bind(':nama', $_POST['nama']);
        $this->db->bind(':nim', $_POST['nim']);
        $this->db->bind(':jurusan', $_POST['jurusan']);
        $this->db->bind(':email', $_POST['email']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function getData($nim)
    {
        $this->db->query("SELECT * FROM mahasiswa WHERE nim = :nim");
        $this->db->bind(':nim', $nim);
        return $this->db->single();
    }
    public function update(){
        $this->db->query("UPDATE mahasiswa SET nama = :nama, jurusan = :jurusan, email = :email WHERE nim = :nim");
        $this->db->bind(':nama', $_POST['nama']);
        $this->db->bind(':jurusan', $_POST['jurusan']);
        $this->db->bind(':email', $_POST['email']);
        $this->db->bind(':nim', $_POST['nim']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function delete($nim){
        $this->db->query("DELETE FROM mahasiswa WHERE nim = :nim");
        $this->db->bind(':nim', $nim);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
