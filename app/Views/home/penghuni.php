<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/home/create" class="btn btn-primary mt-3">Tambah Data Penghuni </a>
            <h1 class="mt-2">LIST PENGHUNI</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
                </div>
                <?php endif; ?>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Unit</th>
      <th scope="col">No KTP</th>
      <th scope="col">Foto</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>

      <?php $i = 1 ; foreach($penghuni as $row) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><?= $row['nama']; ?></td>
      <td><?= $row['unit']; ?></td>
      <td><?= $row['no_ktp']; ?></td>
      <td><img src="/img/<?= $row['foto']; ?>" alt="" class="gambar"></td>
      <td>
      <a title="UPDATE" href="/home/editpenghuni/<?= $row['id']; ?>"class="btn btn-info">Update</a>
      </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>