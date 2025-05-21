<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = 'Infografis';
        $data['main_view'] = 'v_home'; // view konten utama
        $this->load->view('v_template', $data);
    }

    public function petir($tab = '')
    {
        $data['judul'] = 'Infografis Petir';

        // Tentukan konten mana yang akan ditampilkan di dalam v_petir
        switch ($tab) {
            case 'peta':
                $data['tab'] = 'v_peta_petir';
                break;
            case 'jumlah':
                $data['tab'] = 'v_sambaran_petir';
                break;
            case 'laporan':
                $data['tab'] = 'v_laporan_petir';
                break;
            default:
                $data['tab'] = 'v_input_petir';
        }

        // Load template + v_petir sebagai konten utama
        $data['main_view'] = 'v_petir';
        $this->load->view('v_template', $data);
    }
}
