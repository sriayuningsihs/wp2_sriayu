<?php
class Sepatu extends CI_Controller
{
    public function index()
    {
        $data['sepatu'] = $this->sepatu_model->tampil_data()->result();

        $this->load->view("sepatu/header");
        $this->load->view("sepatu/sidebar");
        $this->load->view("sepatu/daftarpem", $data);
        $this->load->view("sepatu/footer");
    }

    public function form()
    {

        $this->load->view("sepatu/header");
        $this->load->view("sepatu/sidebar");
        $this->load->view("sepatu/form");
        $this->load->view("sepatu/footer");
    }

    public function tambah_aksi()
    {
        $nama_pem       = $this->input->post('nama');
        $alamat         = $this->input->post('alamat');
        $notelp         = $this->input->post('notelp');
        $jenis_sepatu   = $this->input->post('sepatu');
        $ukuran         = $this->input->post('ukuran');
        $jumlah         = $this->input->post('jumlah');

        if ($jenis_sepatu == 'Nike') {
            $harga = 375000;
        } elseif ($jenis_sepatu == 'Adidas') {
            $harga = 300000;
        } elseif ($jenis_sepatu == 'Kickers') {
            $harga = 250000;
        } elseif ($jenis_sepatu == 'Eiger') {
            $harga = 275000;
        } else {
            $harga = 400000;
        }

        $total          = $jumlah * $harga;

        $data = array(
            'nama_pem'      => $nama_pem,
            'alamat'        => $alamat,
            'notelp'        => $notelp,
            'jenis_sepatu'  => $jenis_sepatu,
            'ukuran'        => $ukuran,
            'jumlah'        => $jumlah,
            'harga'         => $harga,
            'total'         => $total

        );
        $this->sepatu_model->insert_data($data, 'pembelian');
        redirect('sepatu/index');
    }
}
