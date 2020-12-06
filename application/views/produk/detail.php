<div class="container mt-3">
 <div class="card">
  <div class="card-header">
   <?= $judul;  ?>
  </div>
  <div class="card-body">
   <table class="table table-striped table-bordered">
    <tr>
     <td>Nama Produk</td>
     <td><?= $produk['nama_produk']; ?></td>
    </tr>
    <tr>
     <td>Harga</td>
     <td><?= $produk['harga']; ?></td>
    </tr>
    <tr>
     <td>Jumlah</td>
     <td><?= $produk['jumlah']; ?></td>
    </tr>
    <tr>
     <td>keterangan</td>
     <td><?= $produk['keterangan']; ?></td>
    </tr>
   </table>
   <a href="<?= base_url(); ?>" class="btn btn-primary float-right">Kembali</a>
  </div>
 </div>
</div>