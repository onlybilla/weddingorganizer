<div class="content">
<div class="container-fluid">
<h2>Edit Data Alternatif</h2>
<form action="/alternatif/update/<?= $alternatif['id_konversi']; ?>" method="post">
    <div class="form-group">
        <label>ID Kriteria</label>
        <select name="id_kriteria" class="form-control" required>
            <?php foreach ($kriterias as $kriteria): ?>
                <option value="<?= $kriteria['id_kriteria']; ?>" 
                    <?= ($kriteria['id_kriteria'] == $alternatif['id_kriteria']) ? 'selected' : ''; ?>>
                    <?= $kriteria['nama_kriteria']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Kode Paket</label>
        <select name="kode_paket" class="form-control" required>
            <?php foreach ($pakets as $paket): ?>
                <option value="<?= $paket['kode_paket']; ?>" 
                    <?= ($paket['kode_paket'] == $alternatif['kode_paket']) ? 'selected' : ''; ?>>
                    <?= $paket['nama_paket']; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <label>Value</label>
        <input type="number" name="value" class="form-control" value="<?= $alternatif['value']; ?>" required>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
    <a href="/alternatif" class="btn btn-secondary">Batal</a>
</form>
</div>
</div>