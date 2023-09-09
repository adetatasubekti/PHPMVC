<?php
class Jurusan_model
{
    private $table = 'jurusan';
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
        // $this->stmt = $this->dbh->prepare('SELECT * FROM jurusan');
        // $this->stmt->execute();
        // return $this->stmt->fetcAll(PDO::FETCH_ASSOC);
    }
    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahDatajurusan($data)
        {
            $query = "INSERT INTO jurusan VALUES 
            ('', :kode_jurusan, :nama_jurusan, ) ";
            $this->db->query($query);
            $this->db->bind('kode_jurusan', $data['kode_jurusan']);
            $this->db->bind('nama_urusan', $data['nama_jurusan']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    public function hapusDatajurusan($id)
    {
        $query = "DELETE FROM jurusan WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDatajurusan($data)
    {
        $query = "UPDATE jurusan SET
        nama  = :nama,
        nama_jurusan = :nama_jurusan,
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('kode_jurusan', $data['kode_jurusan']);
        $this->db->bind('nama_jurusan', $data['nama_jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        
}
}