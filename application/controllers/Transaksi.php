<?php
class Transaksi extends CI_Controller
{

    public function index()
    {
        $this->load->view('view-form-transaksi');
    }

    public function about() {
        $harga = "";
        return view('about',compact ('harga'));
        section('content')
            if($merk=="nike") {
                $harga=375000;
            } elseif($merk=="adidas") {
                $harga=300000;
            } elseif($merk=="kickers") {
                $harga=250000;
            } elseif($merk=="eiger") {
                $harga=275000
            } else {
                $harga=400000;
            } endif
    }

    public function cetak()
    {
        // $data = [
        //     'kode' => $this->input->post('kode'),
        //     'nama' => $this->input->post('nama'),
        //     'sks' => $this->input->post('sks')
        // ];

        $this->form_validation->set_rules('nama','Nama Pembeli','required', [
            'required' => 'Nama Pembeli Harus diisi',
            // 'min_lenght' => 'Kode terlalu pendek'
        ]);

        $this->form_validation->set_rules('no_hp','No HP', 'numeric', [
            'numeric' => 'No HP Harus Diisi Angka',
            // 'min_lenght' => 'No HP terlalu pendek'
        ]);
 
        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-transaksi');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'no_hp' => $this->input->post('no_hp'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran'),
                'harga' => $this->input->post('harga')
            ];

            // $harga = "";
            // if ('merk' == "nike") {
            //     echo $harga = 375000;
            // } else if ('merk' == "adidas") {
            //     echo $harga = 300000;
            // } else if ('merk' == "kickers") {
            //     echo $harga = 250000;
            // } else if ('merk' == "eiger") {
            //     echo $harga = 275000;
            // } else {
            //     echo $harga = 400000;
            // }

            $this->load->view('view-data-transaksi', $data);
        }
        

        
        // $this->load->view('view-data-matakuliah', $data);
        // $this->load->library('form_validation');
    }

}