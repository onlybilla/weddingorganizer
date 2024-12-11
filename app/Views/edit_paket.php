<!-- edit.php -->
<div class="content">
<div class="container-fluid">
<h2>Edit Data Paket</h2>
<form action="/paket/update/<?= $paket['kode_paket']; ?>" method="post">
    <div class="form-group">
        <label>Kode Paket</label>
        <input type="text" name="kode_paket" class="form-control" value="<?= $paket['kode_paket']; ?>" required>
    </div>
    <div class="form-group">
        <label>Nama Paket</label>
        <input type="text" name="nama_paket" class="form-control" value="<?= $paket['nama_paket']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/paket" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>
