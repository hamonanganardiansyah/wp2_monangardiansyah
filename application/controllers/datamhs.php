<?php
class datamhs extends CI_Controller
{
    public function index()
    {
        $this->load->view('views_form_datamhs');
    }
    public function cetak()
    {
        
        
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl' => $this->input->post('tgl'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jenkel' => $this->input->post('jenkel'),
                'agama' => $this->input->post('agama')

                
            ];
            $this->load->view('view_tampilan_datamhs', $data);
        
    }
}
