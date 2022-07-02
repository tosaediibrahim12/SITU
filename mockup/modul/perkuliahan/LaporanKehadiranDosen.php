﻿<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">


    <!-- konten -->
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="card-header fg-white">
            <h3>Laporan Kehadiran Dosen</h3>
            <span>Universitas Pasundan</span>
        </div>
        <!-- Page-header end -->
        <!-- Page body start -->
        <div class="page-body">
            <!-- Job application card start -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-block">
                            <div class="j-wrapper j-wrapper-640">
                                <form class=" .form-control" action="j-pro/php/action.php" method="post" class="j-pro"
                                    id="j-pro" enctype="multipart/form-data" novalidate="">
                                    <!-- end /.header-->
                                    <div class="j-content">
                                        <!-- start tahun akademik -->
                                        <div class="j-row1">
                                            <div class="form-floating">
                                                <select class="form-select" aria-label="Tahun Akademik">
                                                    <option value="20211">20211 - Semester Gasal 2021 - 2022
                                                    </option>
                                                    <option value="2020">2020 - Semester Transisi 2020 -
                                                        2021</option>
                                                    <option value="20192">20192 - Semester Genap 2019 - 2020
                                                    </option>
                                                    <option value="20191">20191 - Semester Gasal 2019 - 2020
                                                    </option>
                                                    <option value="20190">20190 - Semester Transisi 2019 -
                                                        2020</option>
                                                    <option value="20183">20183 - Semester Sisipan 2018 -
                                                        2019</option>
                                                    <option value="20182">20182 - Semester Genap 2018 - 2019
                                                    </option>
                                                    <option value="20181">20181 - Semester Gasal 2018 - 2019
                                                    </option>
                                                    <option value="20180">20180 - Semester Transisi 2018 -
                                                        2019</option>
                                                    <option value="20173">20173 - Semester Sisipan 2017 -
                                                        2018</option>
                                                    <option value="20172">20172 - Semester Genap 2017 - 2018
                                                    </option>
                                                    <option value="20171">20171 - Semester Gasal 2017 - 2018
                                                    </option>
                                                    <option value="20163">20163 - Semester Sisipan 2016 -
                                                        2017</option>
                                                    <option value="20162">20162 - Semester Genap 2016 - 2017
                                                    </option>
                                                    <option value="20161">20161 - Semester Gasal 2016 - 2017
                                                    </option>
                                                    <option value="20160">20160 - Semester Transisi 2016 -
                                                        2017</option>
                                                    <option value="20153">20153 - Semester Sisipan 2015 -
                                                        2016</option>
                                                    <option value="20152">20152 - Semester Genap 2015 - 2016
                                                    </option>
                                                    <option value="20151">20151 - Semester Gasal 2015 - 2016
                                                    </option>
                                                    <option value="20150">20150 - Semester Transisi 2015 -
                                                        2016</option>
                                                    <option value="20143">20143 - Semester Sisipan 2014 -
                                                        2015</option>
                                                    <option value="20142">20142 - Semester Genap 2014 - 2015
                                                    </option>
                                                    <option value="20141">20141 - Semester Gasal 2014 - 2015
                                                    </option>
                                                    <option value="20140">20140 - Semester Transisi 2014 -
                                                        2015</option>
                                                </select>
                                                <label for="floatingSelectGrid">Tahun Akademik</label>
                                            </div>
                                        </div>
                                        <br />
                                        <!-- end tahun akademik -->
                                        <!-- start Program dan Program Studi -->
                                        <div class="j-row1">
                                            <div class="j-span6 j-unit">
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
                                            <br />
                                            <div class="j-span6 j-unit">
                                                <div class="form-floating">
                                                    <select class="form-select" aria-label="Tahun Akademik">
                                                        <option value="301">301 - Teknik Kimia</option>
                                                        <option value="302">302 - Teknologi Pertambangan
                                                        </option>
                                                        <option value="303">303 - Teknik Sipil</option>
                                                        <option value="304">304 - Teknik Informatika
                                                        </option>
                                                        <option value="305">305 - Teknik Lingkungan</option>
                                                        <option value="306">306 - Perencanaan Wilayah dan
                                                            Kota</option>
                                                        <option value="444">444 - Prodi Tes</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Prodi</label>
                                                </div>
                                            </div>
                                        </div>
                                        <br />
                                        <!-- End Program dan Program Studi -->
                                        <!-- start Dari Tanggal dan Sampai Tanggal  -->
                                        <form>
                                            <div class="j-span6 j-unit">
                                                <div class="form-floating">
                                                    <h5 class="sub-title text-center">Dari Tanggal</h5>
                                                    <input class="form-control" type="date">

                                                </div>
                                            </div>
                                            <br />
                                            <div class="j-span6 j-unit">
                                                <div class="form-floating">
                                                    <h5 class="sub-title text-center">Sampai Tanggal</h5>
                                                    <input class="form-control" type="date">
                                                </div>
                                            </div>
                                            <!--  -->
                                            <br />
                                    </div>
                                    <!-- end /.content -->
                                    <div class="j-footer">
                                        <button style="font-family: cursive;" type="submit"
                                            class="btn btn-primary">Tampilkan</button>
                                    </div>
                                    <!-- end /.footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">
                            <h5>Persentase</h5>
                        </div>
                        <!-- <div class="card-block">
                                                        <canvas id="newuserchart" height="250"></canvas>
                                                    </div> -->
                        <div class="card-footer ">
                            <div class="row text-center b-t-default">
                                <div class="col-4 b-r-default m-t-15">
                                    <h5>60%</h5>
                                    <p class="text-muted m-b-0">Teknik Informatika</p>
                                </div>
                                <div class="col-4 b-r-default m-t-15">
                                    <h5>6%</h5>
                                    <p class="text-muted m-b-0">Teknik Pangan</p>
                                </div>
                                <div class="col-4 m-t-15">
                                    <h5>9%</h5>
                                    <p class="text-muted m-b-0">Teknik Mesin</p>
                                </div>
                                <div class="col-4 m-t-15">
                                    <h5>15%</h5>
                                    <p class="text-muted m-b-0">Teknik Industri</p>
                                </div>
                                <div class="col-4 m-t-15">
                                    <h5>5%</h5>
                                    <p class="text-muted m-b-0">Teknik Lingkungan</p>
                                </div>
                                <div class="col-4 m-t-15">
                                    <h5>5%</h5>
                                    <p class="text-muted m-b-0">Teknik PWK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table card full -->
            <div class="container-fluid">
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5> Daftar Kehadiran Mahasiswa</h5>
                            <tbody>
                                <tr>
                                    <span>
                                        Matakuliah
                                    </span>
                                    <td>
                                        <a href="#">Rekap Kehadiran per MK</a> |
                                        <a href="#">Rincian Kehadiran per MK</a> |
                                    </td>
                                </tr>
                                <br />
                                <tr>
                                    <span>
                                        Dosen
                                    </span>
                                    <td>
                                        <a href="#">Rekap Kehadiran Dosen</a> |
                                        <a href="#">Rincian Kehadiran Dosen</a> |
                                    </td>
                                </tr>
                            </tbody>
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
                    </div>
                    <!-- tabel -->
                </div>
            </div>
            <!-- Config. table end -->
            <!-- Job application card end -->
        </div>
    </div>
    <?php include('konten/footer.php'); ?>
</div>
<!-- Page-body end -->

<?php include('konten/js.php'); ?>