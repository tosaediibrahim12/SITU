<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- Content Row -->
            <br />
            <!-- form  start -->
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInputGrid">Cari Mahasiswa</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Npm</a>
                        </div>
                        <div class="col-md">

                        </div>

                    </div>
                    <!-- button -->

                </div>
                <br />
            </div>
            <div class="row g-3">
            </div>
            <!-- end form -->
            <br />

            <!-- table card full -->
            <div class="container-fluid">
                <table class="table">
                    <tbody>
                        <tr>
                            <td class="tbl" colspan="4"><b>Data Mahasiswa</b></td>
                            <td class="box" rowspan="7" style="padding: 2pt"><img src="..\..\..\assets\image\logo.png"
                                    width="180" height="180"></td>
                        </tr>
                        <tr>
                            <td>NPM</td>
                            <td class="ul"><b>173040082</b></td>
                            <td class="ul">Nama</td>
                            <td class="ul"><b>MUHAMAD GEMA MADANI</b></td>
                        </tr>
                        <tr>
                            <td class="ul">Program</td>
                            <td class="ul"><b>Reguler Pagi</b> (REG)</td>
                            <td class="ul">Program Studi</td>
                            <td class="ul"><b>Teknik Informatika</b> (304)</td>
                        </tr>
                        <tr>
                            <td class="ul">Master Biaya &amp; Potongan</td>
                            <td class="ul"><b>Tahun 2017 Gasal</b></td>
                            <td class="ul">Dosen Wali</td>
                            <td class="ul"><b>DR. IR. LEONY LIDYA, MT., Dr., Ir., M.T.
                                    (IF007)</b></td>
                        </tr>
                    </tbody>

                    <tbody>
                        <tr>
                            <td class="tbl"><b>Status Mahasiswa Saat Ini</b></td>
                            <td class="tbl1">&nbsp;&nbsp;Aktif&nbsp;&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5><b>Status Akademik Mahasiswa</b></h5>

                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="tbl">#</th>
                                                <th rowspan="2" class="tbl">Semester</th>
                                                <th rowspan="2" class="tbl">Status</th>
                                                <th colspan="4" class="tbl">DPP</th>
                                                <th colspan="4" class="tbl">SKS</th>
                                                <th colspan="2" class="tbl">Indeks Prestasi</th>
                                                <th colspan="3" rowspan="2" class="tbl">Aksi</th>
                                            </tr>
                                            <tr>
                                                <th class="tbl">Kewajiban</th>
                                                <th class="tbl">Bayar</th>
                                                <th class="tbl">Status</th>
                                                <th class="tbl">0 SKS</th>
                                                <th class="tbl">Max</th>
                                                <th class="tbl">Kontrak</th>
                                                <th class="tbl">Lulus</th>
                                                <th class="tbl">Kumulatif</th>
                                                <th class="tbl">IPS</th>
                                                <th class="tbl">IPK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#">1.</td>
                                                <td data-label="Semester">20192</td>
                                                <td data-label="Status">Aktif</td>
                                                <td data-label="Kewajiban">18,000,000</td>
                                                <td data-label="Bayar">13,500,000</td>
                                                <td data-label="Status">75 %</td>
                                                <td data-label="0 sks">0 %</td>
                                                <td data-label="Max">24</td>
                                                <td data-label="Kontrak">21</td>
                                                <td data-label="Lulus">0</td>
                                                <td data-label="Komulatif">89</td>
                                                <td data-label="IPS">0.00</td>
                                                <td data-label="IPK">3.22</td>
                                                <td data-label="Aksi"><a class="button" href="#">Proses
                                                        DPP</a></td>
                                                <td class="ul" align="center">
                                                    <a class="button" href="#">Hitung
                                                        IPK</a>
                                                </td>
                                                <td><i class="ti-minus"></i></td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">2.</td>
                                                <td data-label="Semester">20192</td>
                                                <td data-label="Status">Aktif</td>
                                                <td data-label="Kewajiban">18,000,000</td>
                                                <td data-label="Bayar">13,500,000</td>
                                                <td data-label="Status">75 %</td>
                                                <td data-label="0 sks">0 %</td>
                                                <td data-label="Max">24</td>
                                                <td data-label="Kontrak">21</td>
                                                <td data-label="Lulus">0</td>
                                                <td data-label="Komulatif">89</td>
                                                <td data-label="IPS">0.00</td>
                                                <td data-label="IPK">3.22</td>
                                                <td data-label="Aksi"><a class="button" href="#">Proses
                                                        DPP</a></td>
                                                <td class="ul" align="center">
                                                    <a class="button" href="#">Hitung
                                                        IPK</a>
                                                </td>
                                                <td><i class="ti-minus"></i></td>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                </div>
                <!-- Config. table end -->
            </div>
        </div>
    </div>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>