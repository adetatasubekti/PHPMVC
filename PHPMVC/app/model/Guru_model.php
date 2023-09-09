<?php
class Guru_model
{
    private $table = 'guru';
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
    public function tambahDataGuru($data)
        {
            $query = "INSERT INTO guru VALUES 
            ('', :kode_guru, :nama_guru, :mapel, :prod_noprod ) ";
            $this->db->query($query);
            $this->db->bind('kode_guru', $data['kode_guru']);
            $this->db->bind('nama_guru', $data['nama_guru']);
            $this->db->bind('mapel', $data['mapel']);
            $this->db->bind('prod_noprod', $data['prod_noprod']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataGuru($data)
    {
        $query = "UPDATE guru SET
        kode_guru = :kode_guru,
        nama_guru = :nama_guru,
        mapel = :mapel,
        prod_noprod = :prodnoprod
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('prod_noprod', $data['prod_noprod']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        
}
}