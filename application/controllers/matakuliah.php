<?php
class Matakuliah extends CI_Controller
{

    public function index()
    {

        $this->load->view('View_form_Matakuliah');
    }

    public function cetak()
    { 
        $this->form_validation->set_rules('Kode', 'Kode Matakuliah',
        'required|min_length[3]', [
                    'required' => 'Kode Matakuliah Harus diisi',
                    'min_lenght' => 'Kode terlalu pendek'
                ]);
        
                $this->form_validation->set_rules('Nama', 'Nama Matakuliah',
        'required|min_length[3]', [
                    'required' => 'Nama Matakuliah Harus diisi',
                    'min_lenght' => 'Nama terlalu pendek'
                ]);
        
                if ($this->form_validation->run() != true) {
                    $this->load->view('View_form_Matakuliah');
                } 
                else {
                    $data = [
                        'Kode' => $this->input->post('Kode'),
                        'Nama' => $this->input->post('Nama'),
                        'Sks' => $this->input->post('Sks')
                    ];
        
                    $this->load->view('View_data_Matakuliah', $data);
                }
            }
        } 