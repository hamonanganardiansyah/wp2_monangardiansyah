<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-matakuliah');
 }
 public function cetak()
 {
    $this->form_validation->set_rules('kode,' 'kode mata kuliah'required|min_length[3]',[
        'required' => 'kode matakuliah harus diisi',
        'min_length' => 'kode terlalu pendek'
    
    $this->form_validation->set_rules('nama', 'nama matakuliah 
    'required|min_length[3]', [
                 'required' => 'nama matakuliah harus diisi
                 min_length' => 'nama terlalu pendek
    ]);

    if ($this->form_validation->run() != true) {
        $thid->load->view('view-form-matakuliah');
    } else {
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
        $this->load->view('-data-matakuliah', $data);
    }
 }
}
