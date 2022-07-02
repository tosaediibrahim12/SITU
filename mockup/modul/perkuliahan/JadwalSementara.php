<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div class="card-header fg-white" style="background-color: #404E67; color: #fff; ">
        <h3>Jadwal Perkuliahan</h3>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <!-- form  start -->
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
                                <option value="20162">20162 - Semester Genap 2016 - 2017</option>
                                <option value="20161">20161 - Semester Gasal 2016 - 2017</option>
                                <option value="20160">20160 - Semester Transisi 2016 - 2017</option>
                                <option value="20153">20153 - Semester Sisipan 2015 - 2016</option>
                                <option value="20152">20152 - Semester Genap 2015 - 2016</option>
                                <option value="20151">20151 - Semester Gasal 2015 - 2016</option>
                                <option value="20150">20150 - Semester Transisi 2015 - 2016</option>
                                <option value="20143">20143 - Semester Sisipan 2014 - 2015</option>
                                <option value="20142">20142 - Semester Genap 2014 - 2015</option>
                                <option value="20141">20141 - Semester Gasal 2014 - 2015</option>
                                <option value="20140">20140 - Semester Transisi 2014 - 2015</option>
                            </select>
                            <label for="floatingSelectGrid">Tahun Akademik</label>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                <option value="KER">KER - Kerjasama</option>
                                <option value="NON">NON - Reguler Sore</option>
                                <option value="REG">REG - Reguler Pagi</option>
                                <option value="TES">TES - Program Tes</option>
                            </select>
                            <label for="floatingSelectGrid">Program</label>
                        </div>
                    </div>

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

                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                </div>
                <!-- end form -->
                <br />
                <br />
                <div class="btn-group">
                    <a href="JadwalSementara.php" class="btn btn-primary" aria-current="page">Jadwal
                        Sementara</a>
                    <a href="TambahJadwalPerkuliahan.php" class="btn btn-primary">Tambah Jadwal</a>
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Utk Mahasiswa</a>
                    <a href="#" class="btn btn-primary">Per Dosen</a>
                </div>
                <div class="btn-group">
                    <a href="#" class="btn btn-primary">Hanya MataKuliah </a>
                    <a href="#" class="btn btn-primary">MataKuliah/Responsi</a>
                </div>
                <br />
                <br />

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Praktikum Mahasiswa</h5>
                                <span>Jika tombol proses KRS tidak muncul, kemungkinan mahasiswa dalam status
                                    Non-Aktif,
                                    silahkan aktifkan terlebih dahulu, status mahasiswa tersebut</span>
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
                                    <div class="dt-responsive table-responsive" style="color: #516091;">
                                        <table class="table row-hover table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Ubah</th>
                                                    <th colspan="4">Matakuliah</th>
                                                    <th colspan="9">Mahasiswa</th>
                                                    <th>Print</th>
                                                    <th>Hapus</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th>Kode</th>
                                                    <th>Nama MataKuliah</th>
                                                    <th>Semester</th>
                                                    <th>sks</th>
                                                    <th>KK</th>
                                                    <th>PK</th>
                                                    <th>PP</th>
                                                    <th>JK/Kap</th>
                                                    <th>Estimasi</th>
                                                    <th>Teralokasi</th>
                                                    <th>Hitung</th>
                                                    <th>Bagi</th>
                                                    <th>Riset</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="Edit"><a href="#"><i class="ti-pencil-alt"></i></a>
                                                    </td>
                                                    <td data-label="Kode">IF161201</td>
                                                    <td data-label="Nama">DASAR PEMROGRAMAN</td>
                                                    <td data-label="Smts">2</td>
                                                    <td data-label="sks">4</td>
                                                    <td data-label="KK">3(tiga)</td>
                                                    <td data-label="PK">3(tiga)</td>
                                                    <td data-label="PP">3(tiga)</td>
                                                    <td data-label="JK/kap">6/210</td>
                                                    <td data-label="Estimasi">1/1</td>
                                                    <td data-label="Teralokasi">210/205</td>

                                                    <td data-label="Hitung"> <a href="#"><i
                                                                class="fa fa-calculator"></i> </a></td>
                                                    <td data-label="Bagi"><a href="#"><i class="ti-bar-chart"></i> </a>
                                                    </td>
                                                    <td data-label="Riset"><a href="#"><i class="ti-brush-alt"></i></a>
                                                    </td>
                                                    <td data-label="Print"><a href="">Peserta</a></td>
                                                    <td data-label="Hapus"><a href="#"><i class="ti-trash"></i></a></td>

                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                </div>
                <!-- Config. table end -->
            </div>
    </div>










    </main>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>