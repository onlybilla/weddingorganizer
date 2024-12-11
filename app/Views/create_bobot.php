<div class="content">
<div class="container-fluid">
<h2>Tambah Bobot</h2>
<form action="/bobot/store" method="post">
    <div class="form-group">
        <label>ID Kriteria</label>
        <select name="id_kriteria" class="form-control" required>
            <?php foreach ($kriterias as $kriteria): ?>
                <option value="<?= $kriteria['id_kriteria']; ?>"><?= $kriteria['nama_kriteria']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Bobot</label>
        <input type="number" step="0.01" name="bobot" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/bobot" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>