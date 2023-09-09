<?php
class Siswa_model
{
    private $table = 'siswa';
    private $db;
    // private $dbh;
    // private $stmt;
    public function __construct()
    {
        $this->db = new Database;
    }
    //     //data source name
    //     $dsn = "mysql:host=127.0.0.1;dbname=phpmvc";
    //     try {
    //         $this->dbh = new PDO($dsn, 'root', '');
    //     } catch (PDOException $e) {
    //         die($e->getMessage());
    //     }
    // }
    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
        // $this->stmt = $this->dbh->prepare('SELECT * FROM siswa');
        // $this->stmt->execute();
        // return $this->stmt->fetcAll(PDO::FETCH_ASSOC);
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDatasiswa($data)
        {
            $query = "INSERT INTO siswa VALUES 
            ('', :nama, :jenis_kelamin, :alamat ) ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM siswa WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data)
    {
        $query = "UPDATE siswa SET
        nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        alamat = :alamat
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
}
}