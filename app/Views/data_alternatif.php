<div class="content">
<div class="container-fluid">
<h2>Data Alternatif</h2>
<a href="/alternatif/create" class="btn btn-primary mb-2">Tambah Alternatif</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>ID Kriteria</th>
            <th>Kode Paket</th>
            <th>Value</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($alternatifs as $key => $alternatif): ?>
        <tr>
            <td><?= $key + 1; ?></td> <!-- Nomor urut berdasarkan index -->
            <td><?= $alternatif['id_kriteria']; ?></td>
            <td><?= $alternatif['kode_paket']; ?></td>
            <td><?= $alternatif['value']; ?></td>
            <td>
                <a href="/alternatif/edit/<?= $alternatif['id_konversi']; ?>" class="btn btn-warning">Edit</a>
                <a href="/alternatif/delete/<?= $alternatif['id_konversi']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>