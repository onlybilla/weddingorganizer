<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Perhitungan Nilai Minimum dan Maksimum</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Perhitungan</li>
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
                        <p>[Note: B = Benefit | C = Cost]</p>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Keterangan</th>
                                    <th>C1 - Dekorasi [C] | min</th>
                                    <th>C2 - Katering [C] | min</th>
                                    <th>C3 - Busana dan Rias [C] | min</th>
                                    <th>C4 - Dokumentasi [C] | min</th>
                                    <th>C5 - Jumlah Tamu [B] | max</th>
                                    <th>C6 - Harga Paket [C] | min</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nilai Max/Min Kriteria</th>
                                    <td><?= $dataMb->minK1 ?></td>
                                    <td><?= $dataMb->minK2 ?></td>
                                    <td><?= $dataMb->minK3 ?></td>
                                    <td><?= $dataMb->minK4 ?></td>
                                    <td><?= $dataMb->maxK5 ?></td>
                                    <td><?= $dataMb->minK6 ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
