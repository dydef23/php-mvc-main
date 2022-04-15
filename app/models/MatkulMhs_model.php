<?php

class Matkulmhs_model
{
    private $table = 'matkul_mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllData()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getDataByNrp($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE nrp_mhs=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getDataByIdMt($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_matkul=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }

    public function getRow($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_matkul=:id');
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function tambahMatkul($data)
    {
        // $query = "INSERT INTO mahasiswa
        //             VALUES
        //           (null, :nama, :nrp, :email, :jurusan)";

        // $this->db->query($query);
        // $this->db->bind('nama', $data['nama']);
        // $this->db->bind('nrp', $data['nrp']);
        // $this->db->bind('email', $data['email']);
        // $this->db->bind('jurusan', $data['jurusan']);

        // $this->db->execute();

        // return $this->db->rowCount();
    }

    // public function hapusDataMahasiswa($id)
    // {
    //     $query = "DELETE FROM mahasiswa WHERE id = :id";

    //     $this->db->query($query);
    //     $this->db->bind('id', $id);

    //     $this->db->execute();

    //     return $this->db->rowCount();
    // }


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
