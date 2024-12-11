<div class="content">
<div class="container-fluid">
<h2>Edit Kriteria</h2>
<form action="/kriteria/update/<?= $kriteria['id_kriteria']; ?>" method="post">
    <?= csrf_field(); ?>
    <div class="form-group">
        <label>Nama Kriteria</label>
        <input type="text" name="nama_kriteria" class="form-control" value="<?= $kriteria['nama_kriteria']; ?>" required>
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?= $kriteria['keterangan']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/kriteria" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>