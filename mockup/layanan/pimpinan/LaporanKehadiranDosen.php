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
                                <select class="form-select" aria-label="Tahun Akademik">
                                    <option value="20211">20211 - Semester Gasal 2021 - 2022</option>
                                    <option value="2020">2020 - Semester Transisi 2020 - 2021</option>
                                    <option value="20192">20192 - Semester Genap 2019 - 2020</option>
                                    <option value="20191">20191 - Semester Gasal 2019 - 2020</option>
                                    <option value="20190">20190 - Semester Transisi 2019 - 2020</option>
                                    <option value="20183">20183 - Semester Sisipan 2018 - 2019</option>
                                    <option value="20182">20182 - Semester Genap 2018 - 2019</option>
                                    <option value="20181">20181 - Semester Gasal 2018 - 2019</option>
                                    <option value="20180">20180 - Semester Transisi 2018 - 2019</option>
                                    <option value="20173">20173 - Semester Sisipan 2017 - 2018</option>
                                    <option value="20172">20172 - Semester Genap 2017 - 2018</option>
                                    <option value="20171">20171 - Semester Gasal 2017 - 2018</option>
                                    <option value="20163">20163 - Semester Sisipan 2016 - 2017</option>
                                </select>
                                <label for="floatingSelectGrid">Tahun Akademik</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Mulai Tanggal</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Sampai Tanggal</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
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
                            <div class="form-floating">
                                <select class="form-select" aria-label="Tahun Akademik">
                                    <option value=""></option>
                                    <option value="H">H - Kontrak</option>
                                    <option value="L">L - Tidak Tetap</option>
                                    <option value="T">T - Tetap</option>
                                </select>
                                <label for="floatingSelectGrid">Status Dosen</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Tahun Akademik">
                                    <option value=""></option>
                                    <option value="A">A - Dosen Tetap</option>
                                    <option value="B">B - Dosen PNS Dipekerjakan</option>
                                    <option value="C">C - Dosen Honorer PNS-PTN</option>
                                    <option value="D">D - Dosen Honorer Non-PNS-PTN</option>
                                    <option value="E">E - Dosen Kontrak</option>
                                    <option value="F">F - Dosen Kontrak BHMN</option>
                                </select>
                                <label for="floatingSelectGrid">Status Kerja</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2">
                        <!-- button -->
                        <div class="col-md">
                            <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                        </div>
                    </div>
                    <br />
                </div>
                <div class="row g-3">
                </div>
                <!-- end form -->
                <br />

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><b>Laporan Kehadiran Dosen</b></h5>
                                <a class="btn btn-primary" href="#" role="button">Rekap Kehadiran Per MK</a>
                                <a class="btn btn-primary" href="#" role="button">Rincian Kehadiran Per MK</a>
                                <a class="btn btn-primary" href="#" role="button">Rekap kehadiran Dosen</a>
                                <a class="btn btn-primary" href="#" role="button">Rincian Kehadiran Dosen</a>
                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="dt-responsive table-responsive" style="color: #516091;">
                                        <table class="table row-hover table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th class="tbl">#</th>
                                                    <th class="tbl">Kode</th>
                                                    <th class="tbl">Matakuliah</th>
                                                    <th class="tbl">Kelas</th>
                                                    <th class="tbl">K/R</th>
                                                    <th class="tbl">Dosen</th>
                                                    <th class="tbl">Hadir (P)</th>
                                                    <th class="tbl" width="4%">A</th>
                                                    <th class="tbl" width="4%">B</th>
                                                    <th class="tbl" width="4%">C</th>
                                                    <th class="tbl">Hadir (S)</th>
                                                    <th class="tbl">Rencana</th>
                                                    <th class="tbl">Persen</th>
                                                    <th class="tbl">Presensi<br>Mahasiswa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="tbl" data-label="#">1</td>
                                                    <td class="tbl" data-label="Kode">IF164606</td>
                                                    <td class="tbl" data-label="MataKuliah">Dasar pemrograman </td>
                                                    <td class="tbl" data-label="Kelas">C</td>
                                                    <td class="tbl" data-label="K/R">R</td>
                                                    <td class="tbl" data-label="Dosen">DR. AYI PURBASARI, ST., MT.</td>
                                                    <td class="tbl" data-label="Hadir(S)">0</td>
                                                    <td class="tbl" widtd="4%" data-label="A">0</td>
                                                    <td class="tbl" widtd="4%" data-label="B">0</td>
                                                    <td class="tbl" widtd="4%" data-label="C">0</td>
                                                    <td class="tbl" data-label="Hadir (S)">0</td>
                                                    <td class="tbl" data-label="Rencana">14</td>
                                                    <td class="tbl" data-label="Persen">0%</td>
                                                </tr>
                                                <tr>
                                                    <td class="tbl" data-label="#">1</td>
                                                    <td class="tbl" data-label="Kode">IF164606</td>
                                                    <td class="tbl" data-label="MataKuliah">Dasar pemrograman </td>
                                                    <td class="tbl" data-label="Kelas">C</td>
                                                    <td class="tbl" data-label="K/R">R</td>
                                                    <td class="tbl" data-label="Dosen">DR. AYI PURBASARI, ST., MT.</td>
                                                    <td class="tbl" data-label="Hadir(S)">0</td>
                                                    <td class="tbl" widtd="4%" data-label="A">0</td>
                                                    <td class="tbl" widtd="4%" data-label="B">0</td>
                                                    <td class="tbl" widtd="4%" data-label="C">0</td>
                                                    <td class="tbl" data-label="Hadir (S)">0</td>
                                                    <td class="tbl" data-label="Rencana">14</td>
                                                    <td class="tbl" data-label="Persen">0%</td>
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