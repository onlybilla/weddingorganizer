<div class="content">
<div class="container-fluid">
<h2>Tambah Data Alternatif</h2>
<form action="/alternatif/store" method="post">
    <div class="form-group">
        <label>ID Kriteria</label>
        <select name="id_kriteria" class="form-control" required>
            <?php foreach ($kriterias as $kriteria): ?>
                <option value="<?= $kriteria['id_kriteria']; ?>"><?= $kriteria['nama_kriteria']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Kode Paket</label>
        <select name="kode_paket" class="form-control" required>
            <?php foreach ($pakets as $paket): ?>
                <option value="<?= $paket['kode_paket']; ?>"><?= $paket['nama_paket']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Value</label>
        <input type="number" name="value" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/alternatif" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>
