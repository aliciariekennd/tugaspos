<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
<div id="page-wrapper" >
            <div id="page-inner">
            <h2 class="my-3">Form EDIT PAKET</h2>
<form action="/home/updatepaket/<?= $paket['id']; ?>" method="post" enctype="multipart/form-data">
<?=  csrf_field(); ?>
  <div class="form-group row my-2">
    <label for="isipaket" class="col-sm-3 col-form-label">Isi Paket</label>
    <div class="col-sm-10">
    <textarea name="isipaket" id="isipaket" class="form-control"></textarea>
 <script>
     CKEDITOR.replace( 'isipaket' );
 </script>
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-sm-3 col-form-label ">Tanggal Diterima</label>
    <div class="col-sm-10">
  <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?= $paket['tanggal']; ?>">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal_diterima" class="col-sm-3 col-form-label ">Tanggal Datang</label>
    <div class="col-sm-10">
  <input type="date" id="tanggal_diterima" name="tanggal_diterima" class="form-control" value="<?= $paket['tanggal_diterima']; ?>">
    </div>
  </div>
  <div class="form-group row">
  <label for="nama_karyawan" class="col-sm-3 col-form-label ">Karyawan Yang Menerima</label>
        <select name="nama_karyawan" id="nama_karyawan" class="form-control" >
        <?php foreach ($karyawan as $new) { ?>
            <option><?php echo $new['nama']; ?>  </option>
            <?php } ?>
        </select>
        <label for="nip" class="col-sm-3 col-form-label ">NIP</label>
        <select name="nip" id="nip" class="form-control">
        <?php foreach ($karyawan as $new) { ?>
            <option ><?php echo $new['nip']; ?>  </option>
            <?php } ?>
        </select>
        <label for="penghuni" class="col-sm-3 col-form-label ">Untuk Penghuni</label>
        <select name="penghuni" id="penghuni" class="form-control">
        <?php foreach ($penghuni as $new) { ?>
            <option><?php echo $new['unit']; ?> </option>
            <?php } ?>
        </select>
  </div>
  <div class="form-group row my-2">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" >EDIT Data</button>
    </div>
  </div>
</form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>