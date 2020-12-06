<div class="container mt-3">
 <div class="card">
  <div class="card-header">
   <?= $judul; ?>
  </div>
  <div class="card-body">
   <form action="" method="post">
    <div class="form-group">
     <label for="nama_produk">Nama Produk</label>
     <input type="text" name="nama_produk" class="form-control" id="nama_produk">
     <small class="form-text text-danger"><?= form_error('nama_produk'); ?></small>
    </div>
    <div class="row">
     <div class="col-md-6">
      <div class="form-group">
       <label for="harga">Harga</label>
       <input type="number" name="harga" class="form-control" id="harga">
       <small class="form-text text-danger"><?= form_error('harga'); ?></small>
      </div>
     </div>
     <div class="col-md-6">
      <div class="form-group">
       <label for="jumlah">Jumlah</label>
       <input type="number" name="jumlah" class="form-control" id="jumlah">
       <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
      </div>
     </div>
    </div>
    <div class="form-group">
     <label for="keterangan">Keterangan</label>
     <textarea name="keterangan" id="keterangan" rows="8" class="form-control"></textarea>
     <small class="form-text text-danger"><?= form_error('keterangan'); ?></small>
    </div>
    <div class="text-right">
     <a href="<?= base_url(); ?>" class="btn btn-secondary">Batal</a>
     <button type="submit" name="tambah" class="btn btn-primary">Simpan Data</button>
    </div>
   </form>
  </div>
 </div>
</div>