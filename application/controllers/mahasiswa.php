<?php
class Mahasiswa extends CI_Controller
{
    public function index()

    {
        $this->load->view('view-form-Mahasiswa');
    }

    public function cetak()
    {
         {    

        $data = [
            'nama'=> $this->input->post('nama'),
            'nis => $this->input->post('nis'),   
            'kelas' => $this->input->post('kelas'),
            'tgl' => $this->input->post('tgl'),
            'tempat' => $this->input->post('tempat'),
            'jenis_kelamin => $this->input->post('jenis_kelamin'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('viewdatatugas7', $data);
        }
    }