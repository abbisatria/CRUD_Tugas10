<div class="container">
 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
 <?php if ($this->session->flashdata('flash')) : ?>
  <div class="row mt-3">
   <div class="col-md-6">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     Data produk <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
     </button>
    </div>
   </div>
  </div>
 <?php endif; ?>
 <div class="row mt-3">
  <div class="col-md-4">
   <h2>Daftar Produk</h2>
  </div>
  <div class="col-md-4 mb-2">
   <form action="" method="post">
    <div class="input-group">
     <input type="text" class="form-control" placeholder="Cari data produk" name="keyword">
     <div class="input-group-append">
      <button class="btn btn-primary" type="submit">Cari</button>
     </div>
    </div>
   </form>
  </div>
  <div class="col-md-4 text-right">
   <a href="<?= base_url(); ?>produk/tambah" class="btn btn-primary">Tambah Data Produk</a>
  </div>
 </div>
 <div class="row mt-3">
  <table class="table table-bordered">
   <thead>
    <tr>
     <th scope="col">No</th>
     <th scope="col">Nama</th>
     <th scope="col">Harga</th>
     <th scope="col">Jumlah</th>
     <th scope="col">Aksi</th>
    </tr>
   </thead>
   <tbody>
    <?php $i = 1; ?>
    <?php foreach ($produk as $p) : ?>
     <tr>
      <th scope="row"><?= $i; ?></th>
      <td><?= $p['nama_produk']; ?></td>
      <td>Rp. <?= $p['harga']; ?></td>
      <td><?= $p['jumlah'];  ?> pcs</td>
      <td>
       <a onclick="javascript: return confirm('Yakin ingin hapus?')" href="<?= base_url(); ?>produk/hapus/<?= $p['id']; ?>" class="badge badge-danger float-right mt-1">hapus</a>
       <a href="<?= base_url(); ?>produk/ubah/<?= $p['id']; ?>" class="badge badge-success float-right mr-1 mt-1">ubah</a>
       <a href="<?= base_url(); ?>produk/detail/<?= $p['id']; ?>" class="badge badge-primary float-right mr-1 mt-1">detail</a>
      </td>
     </tr>
     <?php $i++; ?>
    <?php endforeach; ?>
   </tbody>
  </table>
 </div>
</div>