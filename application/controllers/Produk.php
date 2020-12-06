<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
 function __construct()
 {
  parent::__construct();
  $this->load->model('Produk_model');
  $this->load->library('form_validation');
 }

 public function index()
 {
  $data['judul'] = 'Halaman Produk';

  $data['produk'] = $this->Produk_model->getAllProduk();

  if ($this->input->post('keyword')) {
   $data['produk'] = $this->Produk_model->cariDataProduk();
  }

  $this->load->view('produk/header', $data);
  $this->load->view('produk/index', $data);
  $this->load->view('produk/footer');
 }

 public function tambah()
 {
  $data['judul'] = 'Form Tambah Data Produk';

  $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
  $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
  $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
  $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

  if ($this->form_validation->run() == false) {
   $this->load->view('produk/header', $data);
   $this->load->view('produk/tambah');
   $this->load->view('produk/footer');
  } else {
   $this->Produk_model->tambahDataProduk();
   $this->session->set_flashdata('flash', 'Ditambahkan');
   redirect('produk');
  }
 }

 public function ubah($id)
 {
  $data['judul'] = 'Form Ubah Data Mahasiswa';
  $data['produk'] = $this->Produk_model->getProdukById($id);

  $this->form_validation->set_rules('nama_produk', 'Nama Produk', 'required');
  $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
  $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
  $this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

  if ($this->form_validation->run() == false) {
   $this->load->view('produk/header', $data);
   $this->load->view('produk/ubah', $data);
   $this->load->view('produk/footer');
  } else {
   $this->Produk_model->ubahDataProduk();
   $this->session->set_flashdata('flash', 'Diubah');
   redirect('produk');
  }
 }

 public function detail($id)
 {
  $data['judul'] = 'Detail Data Produk';
  $data['produk'] = $this->Produk_model->getProdukById($id);
  $this->load->view('produk/header', $data);
  $this->load->view('produk/detail', $data);
  $this->load->view('produk/footer');
 }

 public function hapus($id)
 {
  $this->Produk_model->hapusDataProduk($id);
  $this->session->set_flashdata('flash', 'Dihapus');
  redirect('produk');
 }
}
