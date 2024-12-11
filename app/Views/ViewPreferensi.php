<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perankingan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Proses Perankingan</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-body">   
                        <table class="table table-bordered table-striped">
                        <thead>
    <tr>
        <th>No.</th>
        <th>Kode Paket</th>
        <th>C1</th>
        <th>C2</th>
        <th>C3</th>
        <th>C4</th>
        <th>C5</th>
        <th>C6</th>
        <th>Nilai Preferensi</th>
        <th>Ranking</th>
    </tr>
</thead>
<tbody>
    <?php 
    $no = 1;
    foreach ($preferensi as $row): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $row['kode_paket']; ?></td>
            <td><?= $row['C1']; ?></td>
            <td><?= $row['C2']; ?></td>
            <td><?= $row['C3']; ?></td>
            <td><?= $row['C4']; ?></td>
            <td><?= $row['C5']; ?></td>
            <td><?= $row['C6']; ?></td>
            <td><?= $row['nilai_preferensi']; ?></td>
            <td><?= $row['ranking']; ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
