<?php
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->model('matakuliah_model','matkul1');

        $this->matkul1->nama='Basis Data';
        $this->matkul1->sks='3';
        $this->matkul1->kode='BSD';
       
        $this->load->model('matakuliah_model','matkul2');

        $this->matkul2->nama='Jaringan Komputer';
        $this->matkul2->sks='2';
        $this->matkul2->kode='JARKOM';

        $this->load->model('matakuliah_model','matkul3');

        $this->matkul3->nama='Pemrograman Web 2';
        $this->matkul3->sks='2';
        $this->matkul3->kode='PEMWEB 2';

        $list_matkul = [$this->matkul1, $this->matkul2, $this->matkul3];

        $data['list_matkul'] = $list_matkul;

        $this->load->view('layouts/header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('layouts/footer');


    }
}
?>