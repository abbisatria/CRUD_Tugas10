<?php

class Produk_model  extends CI_Model
{
 public function getAllProduk()
 {
  return $this->db->get('produk')->result_array();
 }

 public function tambahDataProduk()
 {
  $data = [
   "nama_produk" => $this->input->post('nama_produk', true),
   "harga" => $this->input->post('harga', true),
   "jumlah" => $this->input->post('jumlah', true),
   "keterangan" => $this->input->post('keterangan', true)
  ];

  $this->db->insert('produk', $data);
 }

 public function getProdukById($id)
 {
  return $this->db->get_where('produk', ['id' => $id])->row_array();
 }

 public function ubahDataProduk()
 {
  $data = [
   "nama_produk" => $this->input->post('nama_produk', true),
   "harga" => $this->input->post('harga', true),
   "jumlah" => $this->input->post('jumlah', true),
   "keterangan" => $this->input->post('keterangan', true)
  ];

  $this->db->where('id', $this->input->post('id'));
  $this->db->update('produk', $data);
 }

 public function hapusDataProduk($id)
 {
  $this->db->delete('produk', ['id' => $id]);
 }

 public function cariDataProduk()
 {
  $keyword = $this->input->post('keyword', true);
  $this->db->like('nama_produk', $keyword);
  $this->db->or_like('harga', $keyword);
  $this->db->or_like('jumlah', $keyword);
  return $this->db->get('produk')->result_array();
 }
}
