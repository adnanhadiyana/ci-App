<div class="container">

<div class="row-mt-3">
<div class="col-md-6">
<div class="card">
  <div class="card-header">
    Form Ubah Data Mahasiswa
  </div> 
  <form action="" method="post">
  <input type="hidden" value="Id" value="<?= $mahasiswa['Id'];?>">
<div class="form-group">
    <label for="Nama">Nama</label>
    <input type="txt" name="Nama" class="form-control" id="Nama" value="<?=$mahasiswa['Nama'];?>">
    <small class="form-text text-danger"><?= form_error('Nama');?></small>
  </div>
<div class="form-group">
    <label for="Nrp">NRP</label>
    <input type="txt" name="Nrp" class="form-control" id="Nrp"value="<?=$mahasiswa['Nrp'];?>">
    <small class="form-text text-danger"><?= form_error('Nrp');?></small>
  </div>
<div class="form-group">
    <label for="Email">Email</label>
    <input type="txt" name="Email" class="form-control" id="Email" value="<?=$mahasiswa['Email'];?>">
    <small class="form-text text-danger"><?= form_error('Email');?></small>
  </div>
  <div class="form-group">
    <label for="Jurusan">Jurusan</label>
    <select class="form-control" id="Jurusan" name="Jurusan">
    <?php foreach($jurusan as $j) : ?>
    <?php if($j == $mahasiswa['Jurusan'] ): ?>
        <option value="<?=$j?>"selected><?= $j; ?></option>
        <?php else : ?>
        <option value="<?=$j?>"><?= $j; ?></option>
        <?php endif; ?>
        <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" name="ubah" class="btn btn-primary float-right" >Ubah Data</button>
</form>
  </div>
</div>



</div>
</div>
</div>