<!-- index.php -->
<div class="content">
<div class="container-fluid">
<h2>Data Paket Wedding</h2>
<a href="/paket/create" class="btn btn-primary mb-2">Tambah Paket</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Kode Paket</th>
            <th>Nama Paket</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($pakets as $paket): ?>
        <tr>
            <td><?= $paket['kode_paket']; ?></td>
            <td><?= $paket['nama_paket']; ?></td>
            <td>
    <a href="/paket/edit/<?= $paket['kode_paket']; ?>" class="btn btn-warning">Edit</a>
    <a href="/paket/delete/<?= $paket['kode_paket']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Delete</a>
</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
