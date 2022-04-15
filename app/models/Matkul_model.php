<?php

class Matkul_model
{
    private $table = 'matkul';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMatkul()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMatkulById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMatkul($data)
    {
        $query = "INSERT INTO matkul
                    VALUES
                  (null, :nama_matkul, :jurusan)";

        $this->db->query($query);
        $this->db->bind('nama_matkul', $data['nama']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMatkul($id)
    {
        $query = "DELETE FROM matkul WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }


    // public function ubahDataMahasiswa($data)
    // {
    //     $query = "UPDATE mahasiswa SET
    //                 nama = :nama,
    //                 nrp = :nrp,
    //                 email = :email,
    //                 jurusan = :jurusan
    //               WHERE id = :id";

    //     $this->db->query($query);
    //     $this->db->bind('nama', $data['nama']);
    //     $this->db->bind('nrp', $data['nrp']);
    //     $this->db->bind('email', $data['email']);
    //     $this->db->bind('jurusan', $data['jurusan']);
    //     $this->db->bind('id', $data['id']);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


    public function cariDataMatkul()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM matkul WHERE nama_matkul LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
