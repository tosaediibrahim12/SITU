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
                                <option value="304">304 - Teknik Informatika</option>
                                <option value="301">301 - Teknik Kimia</option>
                                <option value="302">302 - Teknologi Pertambangan</option>
                                <option value="303">303 - Teknik Sipil</option>
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
                            <a class="btn btn-primary" href="NilaiTambah.php" role="button">Tambah
                                Nilai</a>
                            <a class="btn btn-primary" href="#" role="button">Cetak</a>
                            <br />
                            <br />
                            <br />
                            <div class="row g-2">
                                <div class="col-md">
                                    <h5>Teknik Informatika</h5>
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="name@example.com" value="22">
                                        <label for="floatingInput">Default SKS</label>
                                    </div>
                                </div>
                                <div class="col-md">
                                </div>
                                <div class="col-md">
                                </div>
                            </div>
                            <br />
                            <a class="btn btn-primary" href="#" role="button">Simpan</a>

                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="ttl" nowrap="true">Nilai</th>
                                                <th class="ttl" nowrap="true">Bobot</th>
                                                <th class="ttl" nowrap="true">Lulus</th>
                                                <th class="ttl" nowrap="true">Batas Bawah</th>
                                                <th class="ttl" nowrap="true">Batas Atas</th>
                                                <th class="ttl" nowrap="true">Max SKS</th>
                                                <th class="ttl" nowrap="true">Hitung Dalam IPK</th>
                                                <th class="ttl" nowrap="true">Deskripsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> A</a></td>
                                                <td data-label="Bobot">4.00</td>
                                                <td data-label="Lulus?"><i class="ti-check"></i></td>
                                                <td data-label="Batas Bawah">75.00</td>
                                                <td data-label="Batas Atas">100.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-check"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> B</a></td>
                                                <td data-label="Bobot">3.00</td>
                                                <td data-label="Lulus?"><i class="ti-check"></i></td>
                                                <td data-label="Batas Bawah">65.00</td>
                                                <td data-label="Batas Atas">750.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-check"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> C</a></td>
                                                <td data-label="Bobot">2.00</td>
                                                <td data-label="Lulus?"><i class="ti-check"></i></td>
                                                <td data-label="Batas Bawah">40.00</td>
                                                <td data-label="Batas Atas">65.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-check"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> D</a></td>
                                                <td data-label="Bobot">1.00</td>
                                                <td data-label="Lulus?"><i class="ti-check"></i></td>
                                                <td data-label="Batas Bawah">30.00</td>
                                                <td data-label="Batas Atas">40.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-check"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> E</a></td>
                                                <td data-label="Bobot">0.00</td>
                                                <td data-label="Lulus?"><i class="ti-minus"></i></td>
                                                <td data-label="Batas Bawah">0.00</td>
                                                <td data-label="Batas Atas">30.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-check"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> K</a></td>
                                                <td data-label="Bobot">0.00</td>
                                                <td data-label="Lulus?"><i class="ti-minus"></i></td>
                                                <td data-label="Batas Bawah">0.00</td>
                                                <td data-label="Batas Atas">0.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-minus"></i></td>
                                                <td data-label="Deskripsi"></td>

                                            </tr>
                                            <tr>
                                                <td data-label="Singkatan"><a href="NilaiEdit.php"><i
                                                            class="ti-pencil"></i> T</a></td>
                                                <td data-label="Bobot">0.00</td>
                                                <td data-label="Lulus?"><i class="ti-minus"></i></td>
                                                <td data-label="Batas Bawah">0.00</td>
                                                <td data-label="Batas Atas">0.00</td>
                                                <td data-label="Max SKS">0</td>
                                                <td data-label="Hitung IPK"><i class="ti-minus"></i></td>
                                                <td data-label="Deskripsi"></td>

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