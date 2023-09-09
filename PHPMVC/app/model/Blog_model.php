<?php
class Blog_model
{
    private $blog = [
        [
            "penulis" => "APRI EKO PAMBUDI",
            "judul" => "TKP",
            "tulisan" => "TEKNIK KONTRUKSI DAN PERUMAHAN"
        ],
        [
            "penulis" => "WAHYU TRI WULANSARI",
            "judul" => "RPL",
            "tulisan" => "REKAYASA PERANGKAT LUNAK"
        ],
        [
            "penulis" => "DEDIK PRASETYA BUDI.A.MA",
            "judul" => "DPIB",
            "tulisan" => "DESAIN PEMODELAN DAN INFROMASI BANGUNAN"
        ],
        [
            "penulis" => "ABU TOLIB.A.MA",
            "judul" => "TPTU",
            "tulisan" => "PEMANASAN TATA UDARA DAN PENDINGIN"
        ]
        ];
        public function getAllBlog()
        {
            return $this->blog;
        }
        public function tambahData($data)
        {
            $query = "INSERT INTO siswa VALUES
            ('', :nama, :jenis_kelamin, :alamat) ";
            $this->db->query($query);
            $this->db->bind('nama', $data['nama']);
            $this->db->bind('jenis_kelamin', $data['jenis_kelamim']);
            $this->db->bind('alamat', $data['alamat']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        public function tambahDataGuru($data)
        {
            $query = "INSERT INTO guru VALUES
            ('', :kode_guru, :nama_guru, :mapel, :prod_noprod) ";
            $this->db->query($query);
            $this->db->bind('kode_guru', $data['kode_guru']);
            $this->db->bind('nama_guru', $data['nama_guru']);
            $this->db->bind('mapel', $data['mapel']);
            $this->db->bind('prod_noprod', $data['prod_noprod']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        

}