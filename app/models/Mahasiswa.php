<?php
class Mahasiswa
{

    private $mahasiswa = [
        [
            "nama" => "Aldi Rachmatdianto",
            "nim" => "123456",
            "jurusan" => "Teknik Informatika",
            "email" => "aldi@example.com"
        ],
        [
            "nama" => "Siti Nurhaliza",
            "nim" => "654321",
            "jurusan" => "Manajemen",
            "email" => "siti@example.com"
        ],
        [
            "nama" => "Budi Santoso",
            "nim" => "112233",
            "jurusan" => "Sistem Informasi",
            "email" => "budi@example.com"
        ],
        [
            "nama" => "Dewi Lestari",
            "nim" => "445566",
            "jurusan" => "Akuntansi",
            "email" => "dewi@example.com"
        ]
    ];
    public function index(){
        return $this->mahasiswa;
    }
}
