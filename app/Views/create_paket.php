<!-- create.php -->
<div class="content">
<div class="container-fluid">
<h2>Tambah Paket</h2>
<form action="/paket/store" method="post">
<div class="form-group">
        <label for="kode_paket">Kode Paket</label>
        <input type="text" name="kode_paket" id="kode_paket" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="nama_paket">Nama Paket</label>
        <input type="text" name="nama_paket" id="nama_paket" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/paket" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>