<div class="container">

<div class="row-mt-3">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Tambah Data Mahasiswa
  </div> 
  <form action="" method="post">
<div class="form-group">
    <label for="Nama">Nama</label>
    <input type="txt" name="Nama" class="form-control" id="Nama">
    <small class="form-text text-danger"><?= form_error('Nama');?></small>
  </div>
<div class="form-group">
    <label for="Nrp">NRP</label>
    <input type="txt" name="Nrp" class="form-control" id="Nrp">
    <small class="form-text text-danger"><?= form_error('Nrp');?></small>
  </div>
<div class="form-group">
    <label for="Email">Email</label>
    <input type="txt" name="Email" class="form-control" id="Email">
    <small class="form-text text-danger"><?= form_error('Email');?></small>
  </div>
  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select class="form-control" id="Jurusan" name="Jurusan">
      <option value="Teknik Industri">Teknik Industri</option>
      <option value="Teknologi Pangan">Teknologi Pangan</option>
      <option value="Teknik Mesin">Teknik Mesin</option>
      <option value="Teknik Informatika">Teknik Informatika</option>
      <option value="Teknik Industri">Teknik Lingkungan</option>
      <option value="Perncangan Wilayah Dan Kota">Perncangan Wilayah Dan Kota</option>
    </select>
  </div>
  <button type="submit" name="tambah" class="btn btn-primary float-right" >Tambah Data</button>
</form>
  </div>
</div>



</div>
</div>
</div>