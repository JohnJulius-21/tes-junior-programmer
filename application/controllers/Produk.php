<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Produk_model'); // Load model produk
        $this->load->model('Kategori_model'); // Load model kategori
        $this->load->model('Status_model'); // Load model status
        $this->load->database(); // Load database
        $this->load->helper('url'); // Load helper URL
        $this->load->library('session'); // Load library session
        $this->load->library('form_validation'); // Load library validasi form
    }

    /**
     * Menampilkan daftar produk yang bisa dijual
     */
    public function index()
    {
        $data['produk'] = $this->Produk_model->get_produk_by_status('bisa dijual');
        $this->load->view('produk/index', $data);
    }

    /**
     * Menampilkan halaman form untuk menambahkan produk baru
     */
    public function create()
    {
        $data['kategori'] = $this->Kategori_model->get_all_kategori();
        $data['status'] = $this->Status_model->get_all_status();
        $this->load->view('produk/create', $data);
    }

    /**
     * Menyimpan produk baru ke dalam database
     */
    public function store()
    {
        // Validasi input
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
        $this->form_validation->set_rules('status_id', 'Status', 'required');

        // Jika validasi gagal, kembali ke form create
        if ($this->form_validation->run() == FALSE) {
            $data['kategori'] = $this->Kategori_model->get_all_kategori();
            $data['status'] = $this->Status_model->get_all_status();
            $this->load->view('produk/create', $data);
        } else {
            // Simpan produk ke database
            $new_data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'kategori_id' => $this->input->post('kategori_id'),
                'status_id' => $this->input->post('status_id'),
            ];
            $this->Produk_model->insert_produk($new_data);
            $this->session->set_flashdata('success', 'Produk berhasil ditambahkan.');
            redirect('produk/index');
        }
    }

    /**
     * Menampilkan halaman edit produk berdasarkan ID
     */
    public function edit($id)
    {
        $data['produk'] = $this->Produk_model->get_produk_by_id($id);
        $data['kategori'] = $this->Kategori_model->get_all_kategori();
        $data['status'] = $this->Status_model->get_all_status();

        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('produk/edit', $data);
        } else {
            $update_data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'kategori_id' => $this->input->post('kategori_id'),
                'status_id' => $this->input->post('status_id')
            ];
            $this->Produk_model->update_produk($id, $update_data);
            redirect('produk');
        }
    }

    /**
     * Memproses update data produk berdasarkan ID
     */
    public function update($id)
    {
        $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
        $this->form_validation->set_rules('status_id', 'Status', 'required');

        $data['produk'] = $this->Produk_model->get_produk_by_id($id);
        $data['kategori'] = $this->Kategori_model->get_all_kategori();
        $data['status'] = $this->Status_model->get_all_status();

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('produk/edit', $data);
        } else {
            $update_data = [
                'nama_produk' => $this->input->post('nama_produk'),
                'harga' => $this->input->post('harga'),
                'kategori_id' => $this->input->post('kategori_id'),
                'status_id' => $this->input->post('status_id'),
            ];
            $this->Produk_model->update_produk($id, $update_data);
            $this->session->set_flashdata('success', 'Berhasil mengupdate produk');
            redirect('produk/index');
        }
    }

    /**
     * Menghapus produk berdasarkan ID
     */
    public function hapus($id)
    {
        $this->Produk_model->delete_produk($id);
        $this->session->set_flashdata('success', 'Berhasil menghapus produk');
        redirect('produk');
    }
}