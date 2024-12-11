<div class="content">
<div class="container-fluid">
<h2>Data Kriteria</h2>
<a href="/kriteria/create" class="btn btn-primary mb-2">Tambah Kriteria</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID Kriteria</th>
            <th>Nama Kriteria</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($kriterias as $kriteria): ?>
        <tr>
            <td><?= $kriteria['id_kriteria']; ?></td> <!-- Menampilkan ID Kriteria -->
            <td><?= $kriteria['nama_kriteria']; ?></td>
            <td><?= $kriteria['keterangan']; ?></td>
            <td>
                <a href="/kriteria/edit/<?= $kriteria['id_kriteria']; ?>" class="btn btn-warning">Edit</a>
                <a href="/kriteria/delete/<?= $kriteria['id_kriteria']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>