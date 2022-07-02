<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- Content Row -->
            <br />
            <!-- form  start -->
            <div class="container-fluid">
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="301">301 - Teknik Kimia</option>
                                <option value="302">302 - Teknologi Pertambangan</option>
                                <option value="303">303 - Teknik Sipil</option>
                                <option value="304">304 - Teknik Informatika</option>
                                <option value="305">305 - Teknik Lingkungan</option>
                                <option value="306">306 - Perencanaan Wilayah dan Kota</option>
                                <option value="444">444 - Prodi Tes</option>
                            </select>
                            <label for="floatingSelectGrid">Prodi</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                    <div class="col-md">

                    </div>
                    <!-- button -->

                </div>
            </div>
            <div class="row g-3">
            </div>
            <!-- end form -->
            <br />
            <br />
            <br />
            <div class="col-md">
                <a class="btn btn-primary" href="Kurikulum.php" role="button">Mata Kuliah</a>
                <a class="btn btn-primary" href="MkSetara.php" role="button">MK Setara</a>
                <a class="btn btn-primary" href="Kurikulum1.php" role="button">Kurikulum</a>
                <a class="btn btn-primary" href="Konsentrasi.php" role="button">Konsentrasi</a>
                <a class="btn btn-primary" href="JenisMatakuliah.php" role="button">jenis matakuliah</a>
                <a class="btn btn-primary" href="PilihanWajib.php" role="button">Pilihan Wajib</a>
                <a class="btn btn-primary" href="JenisKurikulum.php" role="button">Jenis Kurikulum</a>
                <a class="btn btn-primary" href="Nilai.php" role="button">Nilai</a>
                <a class="btn btn-primary" href="MaxSKS.php" role="button">MaxSKS</a>
                <a class="btn btn-primary" href="PaketMatakuliah.php" role="button">Paket matakuliah</a>
                <a class="btn btn-primary" href="Predikat.php" role="button">Predikat</a>

            </div>
            <br />
            <br />

            <!-- table card full -->
            <div class="container-fluid">
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="pilihanWajibTambah.php" role="button">Tambah
                                Pilihan Wajib</a>
                            <a class="btn btn-primary" href="#" role="button">Cetak</a>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="ttl" nowrap="true">Kode</th>
                                                <th class="ttl" nowrap="true">Nama</th>
                                                <th class="ttl" title="Kerja Praktek?" nowrap="true">KP?</th>
                                                <th class="ttl" title="Tugas Akhir?" nowrap="true">TA?</th>
                                                <th class="ttl" title="Tidak Aktif?" nowrap="true">NA</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> A</a>
                                                </td>
                                                <td data-label="Nama">WAJIB</td>
                                                <td data-label="KP"><i class="ti-minus"></i></td>
                                                <td data-label="TA"><i class="ti-minus"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> B</a>
                                                </td>
                                                <td data-label="Nama">PILIHAN</td>
                                                <td data-label="KP"><i class="ti-minus"></i></td>
                                                <td data-label="TA"><i class="ti-minus"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> C</a>
                                                </td>
                                                <td data-label="Nama">WAJIB PEMINATAN</td>
                                                <td data-label="KP"><i class="ti-minus"></i></td>
                                                <td data-label="TA"><i class="ti-minus"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> D</a>
                                                </td>
                                                <td data-label="Nama">PILIHAN PEMINATAN</td>
                                                <td data-label="KP"><i class="ti-minus"></i></td>
                                                <td data-label="TA"><i class="ti-minus"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> K</a>
                                                </td>
                                                <td data-label="Nama">KERJA PRAKTEK</td>
                                                <td data-label="KP"><i class="ti-check"></i></td>
                                                <td data-label="TA"><i class="ti-minus"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
                                            <tr>
                                                <td data-label="Kode">
                                                    <a href="PilihanWajibEdit.php"><i class="ti-write"></i> S</a>
                                                </td>
                                                <td data-label="Nama">TA/SKRIPSI/TESIS/DISERTASI</td>
                                                <td data-label="KP"><i class="ti-minus"></i></td>
                                                <td data-label="TA"><i class="ti-check"></i></td>
                                                <td data-label="NA"><i class="ti-book"></i></td>
                                            </tr>
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