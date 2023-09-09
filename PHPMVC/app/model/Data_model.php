<?php
class Data_model
{
    private $data_siswa = [
        [
            "penulis" => "bray",
            "judul" => "low",
            "tulisan" => "ckarang"
        ],
        [
            "penulis" => "Khar ",
            "judul" => "Makan",
            "tulisan" => "surodakan"
        ],
        [
            "penulis" => "ade tata subekti",
            "judul" => "Olahraga",
            "tulisan" => "ngantru"
        ]
        ];
        public function getAllSiswa()
        {
            return $this->data_siswa;
        }

    }