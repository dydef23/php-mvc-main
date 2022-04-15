<?php

class Matkul extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mata Kuliah yang Diikuti Mahasiswa';
        $data['matkul_mhs'] = $this->model('MatkulMhs_model')->getAllData();
        $dataMhs['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $dataMatkul['matkul'] = $this->model('MatkulMhs_model')->getAllMatkul();

        $this->view('templates/header', $data);
        $this->view('matkul_mhs/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mata Kuliah';
        $data['matkul_mhs'] = $this->model('MatkulMhs_model')->getMatkulById($id);

        $this->view('templates/header', $data);
        $this->view('matkul_mhs/index', $data);
        $this->view('templates/footer');
    }
}
