<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Normalisasi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Normalisasi</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">[Note: B = Benefit | C = Cost]</h3>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Paket</th>
                                        <th>C1 - Dekorasi [C]</th>
                                        <th>C2 - Katering [C]</th>
                                        <th>C3 - Rias Pengantin [C]</th>
                                        <th>C4 - Dokumentasi [C]</th>
                                        <th>C5 - Jumlah Tamu [B]</th>
                                        <th>C6 - Harga Paket [C]</th>
                                    </tr>
                                </thead>
                                <tbody>
    <?php 
    $no = 1;
    foreach ($dataMb['all'] as $row): 
        $maxMin = $dataMb['maxmin']; // Ambil nilai max/min
    ?>
    <tr>
        <td class="text-center"><?= $no++; ?></td>
        <td><?= $row->kode_paket; ?></td>

        <!-- Normalisasi C1 -->
        <td class="text-center">
            <?= $maxMin->minK1; ?>/<?= $row->C1; ?> = 
            <strong><?= round($maxMin->minK1 / $row->C1, 3); ?></strong>
        </td>
        <!-- Normalisasi C2 -->
        <td class="text-center">
            <?= $maxMin->minK2; ?>/<?= $row->C2; ?> = 
            <strong><?= round($maxMin->minK2 / $row->C2, 3); ?></strong>
        </td>
        <!-- Normalisasi C3 -->
        <td class="text-center">
            <?= $maxMin->minK3; ?>/<?= $row->C3; ?> = 
            <strong><?= round($maxMin->minK3 / $row->C3, 3); ?></strong>
        </td>
        <!-- Normalisasi C4 -->
        <td class="text-center">
            <?= $maxMin->minK4; ?>/<?= $row->C4; ?> = 
            <strong><?= round($maxMin->minK4 / $row->C4, 3); ?></strong>
        </td>
        <!-- Normalisasi C5 -->
        <td class="text-center">
            <?= $row->C5; ?>/<?= $maxMin->maxK5; ?> = 
            <strong><?= round($row->C5 / $maxMin->maxK5, 3); ?></strong>
        </td>
        <!-- Normalisasi C6 -->
        <td class="text-center">
            <?= $maxMin->minK6; ?>/<?= $row->C6; ?> = 
            <strong><?= round($maxMin->minK6 / $row->C6, 3); ?></strong>
        </td>
    </tr>
    <?php endforeach; ?>
</tbody>

                            </table>
                        </div>
                        <div class="card-footer">
                            Sistem Pendukung Keputusan Pemilihan Paket Wedding Organisasi | SAW Method
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
