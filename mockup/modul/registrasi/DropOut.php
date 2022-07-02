<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <!-- Page-header end -->
        <!-- Page-body start -->
        <div class="page-body">
            <!-- Awal Konten -->
            <div class="pcoded-main-container">
                <!-- Main-body start -->
                <div class="page-wrapper">
                    <!-- Page body start -->
                    <div class="page-body">
                        <!-- Job application card start -->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-block">
                                        <div class="j-wrapper j-wrapper-640">
                                            <form class=" .form-control" action="j-pro/php/action.php" method="post"
                                                class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate="">
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

                                                            </select>
                                                            <label for="floatingSelectGrid">Tahun Akademik</label>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <div class="j-footer">
                                                        <a class="btn btn-primary" href="#" role="button">Filter
                                                            Daftar</a>
                                                    </div>
                                                    <br />
                                                    <!-- end tahun akademik -->
                                                    <!-- start Program dan Program Studi -->
                                                    <div class="j-row1">
                                                        <div class="j-span6 j-unit">
                                                            <span>Kosongkan jika ingin Melihat semua</span>
                                                            <div class="form-floating">
                                                                <select class="form-select" aria-label="Tahun Akademik">
                                                                    <option value="301"></option>
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
                                                            <span>Kosongkan jika ingin Melihat semua</span>
                                                            <div class="form-floating">
                                                                <select class="form-select" aria-label="Tahun Akademik">
                                                                    <option value="301"></option>
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
                                                        <br />
                                                    </div>
                                                    <br />
                                                    <!-- End Program dan Program Studi -->
                                                    <!-- start Dari Tanggal dan Sampai Tanggal  -->
                                                    <form>
                                                        <div class="j-span6 j-unit">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control"
                                                                    id="floatingInputGrid" placeholder="A" value="">
                                                                <label for="floatingInputGrid">Nomor SK</label>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div class="j-span6 j-unit">
                                                            <div class="form-floating">
                                                                <h5 class="sub-title text-center">Tanggal SK</h5>
                                                                <input class="form-control" type="date">
                                                            </div>
                                                        </div>
                                                        <!--  -->
                                                        <br />
                                                </div>
                                                <!-- end /.content -->
                                                <div class="j-footer">
                                                    <a class="btn btn-primary" href="#" role="button">Set Mahasiswa Yang
                                                        Akan dipilih</a>
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
                                        <h5>Update Terbaru</h5>
                                        <span>Status Mahasiswa Universitas Pasundan Real Time</span>
                                    </div>
                                    <!-- <div class="card-block">
                                                        <canvas id="newuserchart" height="250"></canvas>
                                                    </div> -->
                                    <div class="card-footer ">
                                        <div class="row text-center b-t-default">
                                            <div class="card table-card">

                                                <div class="card-block">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover table-borderless">
                                                            <thead>
                                                                <tr>
                                                                    <th>Status</th>
                                                                    <th>NRP</th>
                                                                    <th>Nama Mahasiswa</th>
                                                                    <th>Prodi</th>
                                                                    <th>Tanggal Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <th><label class="label label-success">Aktif</label>
                                                                    </th>
                                                                    <th>123040210</th>
                                                                    <th>jajang januar</th>
                                                                    <th>Teknik Informatika</th>
                                                                    <th>Today 2:00</th>
                                                                </tr>
                                                                <tr>
                                                                    <th><label
                                                                            class="label label-danger">Drop-out</label>
                                                                    </th>
                                                                    <th>113040210</th>
                                                                    <th>januarin</th>
                                                                    <th>Teknik Informatika</th>
                                                                    <th>Today 2:00</th>
                                                                </tr>
                                                                <tr>
                                                                    <th><label
                                                                            class="label label-warning">Non-aktif</label>
                                                                    </th>
                                                                    <th>123040210</th>
                                                                    <th>manaking</th>
                                                                    <th>Teknik Informatika</th>
                                                                    <th>Today 3:49</th>
                                                                </tr>

                                                            </tbody>
                                                        </table>
                                                        <div class="text-right m-r-20">
                                                            <a href="#!" class=" b-b-primary text-primary">View
                                                                all
                                                                Projects</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Mulai Table -->
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5> Daftar Mahasiswa</h5>
                                        <span>
                                            SK Drop Out
                                        </span>

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
                                                <table
                                                    class="table row-hover table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th class="ttl" nowrap="true">#</th>
                                                            <th class="ttl" nowrap="true">N.P.M</th>
                                                            <th class="ttl" nowrap="true">Nama Mahasiswa</th>
                                                            <th class="ttl" nowrap="true">Status</th>
                                                            <th class="ttl" nowrap="true">Non Aktif</th>
                                                            <th class="ttl" nowrap="true">IPK</th>
                                                            <th class="ttl" nowrap="true">SKS</th>
                                                            <th class="ttl" nowrap="true">Program Studi</th>
                                                            <th class="ttl" nowrap="true">Program</th>
                                                            <th class="ttl" nowrap="true">Dosen Wali</th>
                                                            <th class="ttl" nowrap="true">SK Drop Out</th>
                                                            <th class="ttl" nowrap="true">Tgl Drop Out</th>
                                                            <th class="ttl" nowrap="true">Pilih</th>
                                                        </tr>

                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-label="#">1</td>
                                                            <td data-label="N.P.M">103040900</td>
                                                            <td data-label="Nama Mahasiswa">Fulan</td>
                                                            <td data-label="Status">DO</td>
                                                            <td data-label="Non Aktif">-</td>
                                                            <td data-label="IPK">1.22</td>
                                                            <td data-label="SKS">56</td>
                                                            <td data-label="Program Studi"></td>
                                                            <td data-label="Program">Reg-pagi</td>
                                                            <td data-label="Dosen Wali">Fulan ST.,MT.</td>
                                                            <td data-label="SK Drop Out">-</td>
                                                            <td data-label="Tgl Drop Out">-</td>
                                                            <td data-label="Pilih">-</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="#">2</td>
                                                            <td data-label="N.P.M">103040901</td>
                                                            <td data-label="Nama Mahasiswa">fidalk</td>
                                                            <td data-label="Status">Non-Aktif</td>
                                                            <td data-label="Non Aktif">-</td>
                                                            <td data-label="IPK">1.22</td>
                                                            <td data-label="SKS">56</td>
                                                            <td data-label="Program Studi"></td>
                                                            <td data-label="Program">Reg-pagi</td>
                                                            <td data-label="Dosen Wali">Fulan ST.,MT.</td>
                                                            <td data-label="SK Drop Out">-</td>
                                                            <td data-label="Tgl Drop Out">-</td>
                                                            <td data-label="Pilih">-</td>
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
                        <div class="col-sm-12"></div>
                    </div>
                </div>
                <!-- Page body end -->
            </div>
            <!-- Main-body end -->
            <!-- Akhir Konten -->
        </div>
    </div>
</div>
<?php include('konten/footer.php'); ?>
<?php include('konten/js.php'); ?>