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
                                                        <br />
                                                        <div class="j-span6 j-unit">
                                                            <div class="form-floating">
                                                                <select class="form-select" aria-label="Tahun Akademik">
                                                                    <option value="EI009">DR. DRS. IMAN FIRMANSYAH,
                                                                        M.SC., </option>
                                                                    <option value="EI018">DR. IR. AGUS PURNOMO, MT.,
                                                                    </option>
                                                                </select>
                                                                <label for="floatingSelectGrid">Dosen</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br />
                                                    <!-- End Program dan Program Studi -->
                                                    <!-- start Dari Tanggal dan Sampai Tanggal  -->
                                                    <form>
                                                        <div class="j-span6 j-unit">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control"
                                                                    id="floatingInputGrid" placeholder="A" value="">
                                                                <label for="floatingInputGrid">Mulai NRP</label>
                                                            </div>
                                                        </div>
                                                        <br />
                                                        <div class="j-span6 j-unit">
                                                            <div class="form-floating">
                                                                <input type="email" class="form-control"
                                                                    id="floatingInputGrid" placeholder="A" value="">
                                                                <label for="floatingInputGrid">Sampai NRP</label>
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
                        <!-- Mulai Table -->
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5> Daftar Kehadiran Mahasiswa</h5>
                                        <span>
                                            Daftra Mahasiswa
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
                                                            <th class="ttl" nowrap="true"></th>
                                                            <th class="ttl" nowrap="true">Nama Mahasiswa</th>
                                                            <th class="ttl" nowrap="true">Dosen Wali</th>
                                                            <th class="ttl" nowrap="true">IPS</th>
                                                            <th class="ttl" nowrap="true">Rerata</th>
                                                            <th class="ttl" nowrap="true">MK 1</th>
                                                            <th class="ttl" nowrap="true">MK 2</th>
                                                            <th class="ttl" nowrap="true">MK 3</th>
                                                            <th class="ttl" nowrap="true">MK 4</th>
                                                            <th class="ttl" nowrap="true">MK 5</th>
                                                            <th class="ttl" nowrap="true">MK 6</th>
                                                            <th class="ttl" nowrap="true">MK 7</th>
                                                            <th class="ttl" nowrap="true">MK 8</th>
                                                            <th class="ttl" nowrap="true">MK 9</th>
                                                            <th class="ttl" nowrap="true">MK 10</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td data-label="#" rowspan="2" class="ul">1</td>
                                                            <td data-label="NPM" rowspan="2" class="inp1">143010071</td>
                                                            <td data-label="Nama Mahasiswa" rowspan="2" class="ul">JAYAN
                                                                REZKI PERDANA
                                                            </td>
                                                            <td data-label="Dosen Wali" rowspan="2" class="ul">IR.
                                                                DADANG
                                                                HENDRIANA,
                                                                M.SC., </td>
                                                            <td data-label="IPS" rowspan="2" class="ul" align="RIGHT">
                                                                2.63
                                                            </td>
                                                            <td data-label="Rerata" rowspan="2" class="ul"
                                                                align="RIGHT">42.95
                                                            </td>
                                                            <td data-label="MK 1" class="ul" align="CENTER">TI942</td>
                                                            <td data-label="MK 2" class="ul" align="CENTER">TI943</td>
                                                            <td data-label="MK 3" class="ul" align="CENTER">TI944</td>
                                                            <td data-label="MK 4" class="ul" align="CENTER">TI945</td>
                                                            <td data-label="MK 5" class="ul" align="CENTER">TI946</td>
                                                            <td data-label="MK 6" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 7" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 8" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 9" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 10" class="ul" align="CENTER">TI947</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="MK 1" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 2" class="ul" align="RIGHT">57.14</td>
                                                            <td data-label="MK 3" class="ul" align="RIGHT">42.86</td>
                                                            <td data-label="MK 4" class="ul" align="RIGHT">28.57</td>
                                                            <td data-label="MK 5" class="ul" align="RIGHT">21.43</td>
                                                            <td data-label="MK 6" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 7" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 8" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 9" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 10" class="ul" align="RIGHT">53.85</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="#" rowspan="2" class="ul">2</td>
                                                            <td data-label="NPM" rowspan="2" class="inp1">143010071</td>
                                                            <td data-label="Nama Mahasiswa" rowspan="2" class="ul">Jaki
                                                                adbul axzizi
                                                            </td>
                                                            <td data-label="Dosen Wali" rowspan="2" class="ul">EI001 -
                                                                IR. DADANG
                                                                HENDRIANA,
                                                                M.SC., </td>
                                                            <td data-label="IPS" rowspan="2" class="ul" align="RIGHT">
                                                                2.63
                                                            </td>
                                                            <td data-label="Rerata" rowspan="2" class="ul"
                                                                align="RIGHT">42.95
                                                            </td>
                                                            <td data-label="MK 1" class="ul" align="CENTER">TI942</td>
                                                            <td data-label="MK 2" class="ul" align="CENTER">TI943</td>
                                                            <td data-label="MK 3" class="ul" align="CENTER">TI944</td>
                                                            <td data-label="MK 4" class="ul" align="CENTER">TI945</td>
                                                            <td data-label="MK 5" class="ul" align="CENTER">TI946</td>
                                                            <td data-label="MK 6" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 7" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 8" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 9" class="ul" align="CENTER">TI947</td>
                                                            <td data-label="MK 10" class="ul" align="CENTER">TI947</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="MK 1" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 2" class="ul" align="RIGHT">57.14</td>
                                                            <td data-label="MK 3" class="ul" align="RIGHT">42.86</td>
                                                            <td data-label="MK 4" class="ul" align="RIGHT">28.57</td>
                                                            <td data-label="MK 5" class="ul" align="RIGHT">21.43</td>
                                                            <td data-label="MK 6" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 7" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 8" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 9" class="ul" align="RIGHT">53.85</td>
                                                            <td data-label="MK 10" class="ul" align="RIGHT">53.85</td>
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
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body"></div>
    </div>
</div>
<!-- Page-body end -->
</div>
</div>
<div id="styleSelector"></div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php include('konten/js.php'); ?>