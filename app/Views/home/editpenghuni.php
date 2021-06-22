<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Data Penghuni</h2>
<form action="/home/updatepenghuni/<?= $penghuni['id']; ?>" method="post" enctype="multipart/form-data">
<?=  csrf_field(); ?>
  <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label ">Nama Penghuni</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ?
      'is-invalid' : ''; ?>" id="nama" name="nama" autofocus value="<?= $penghuni['nama']; ?>"> 
      <div class="invalid-feedback">
          <?= $validation->getError('nama'); ?>
      </div>
    </div>
  </div>

  <div class="form-group row my-2">
    <label for="unit" class="col-sm-2 col-form-label">Unit</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="unit" name="unit" value="<?= $penghuni['unit']; ?>">
    </div>
  </div>

  <div class="form-group row my-2">
    <label for="no_ktp" class="col-sm-2 col-form-label">No KTP</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="no_ktp" name="no_ktp" value="<?= $penghuni['no_ktp']; ?>">
    </div>
  </div>
  <div class="form-group row my-2">
    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
    <div class="col-sm-10">
    <div class="custom-file">
          <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ?
      'is-invalid' : ''; ?>" id="foto" name="foto" value="<?= $penghuni['foto']; ?>">
        
    </div>
    </div>
    </div>
  <div class="form-group row my-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Tambah Data</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>