<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/home/index" class="btn btn-primary mt-3">Tambah Data Menu </a>
            <h1 class="mt-2">LIST PAKET</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Penerima / Penghuni</th>
      <th scope="col">Tanggal Datang</th>
      <th scope="col">Tanggal Diterima</th>
      <th scope="col">Isi Paket</th>
      <th scope="col">Nama Karyawan</th>
      <th scope="col">NIP</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

      <?php $i = 1 ; foreach($paket as $row) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['penghuni']; ?></td>
      <td><?= $row['tanggal_diterima']; ?></td>
      <td><?= $row['tanggal']; ?></td>
      <td><?= $row['isipaket']; ?></td>
      <td><?= $row['nama_karyawan']; ?></td>
      <td><?= $row['nip']; ?></td>
      <td><button class="btn btn-danger"><?= $row['status']; ?></button></td>
      <td>
      <a title="UPDATE" href="/home/editpaket/<?= $row['id']; ?>"class="btn btn-info">Update</a>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>