<?php

class About extends Controller {
    public function index ($nama = 'Melinda', $Pekerjaan = 'Mahasiswa', $umur = 20) 
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $Pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page() {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}