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
                    <!-- Page-header start -->
                    <div class="card-header fg-white">
                        <h3>Dispensasi Dosen Kehadiran</h3>
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
                                            <form class=" .form-control" action="j-pro/php/action.php" method="post"
                                                class="j-pro" id="j-pro" enctype="multipart/form-data" novalidate="">
                                                <!-- end /.header-->
                                                <div class="j-content">
                                                    <!-- start tahun akademik -->
                                                    <div class="j-row1">
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
                                        <h5>Jumlah Dispensasi Dosen</h5>
                                    </div>
                                    <!-- <div class="card-block">
                                                        <canvas id="newuserchart" height="250"></canvas>
                                                    </div> -->
                                    <div class="card-footer ">
                                        <div class="row text-center b-t-default">
                                            <div class="col-4 b-r-default m-t-15">
                                                <h5>4</h5>
                                                <p class="text-muted m-b-0">Teknik Informatika</p>
                                            </div>
                                            <div class="col-4 b-r-default m-t-15">
                                                <h5>1</h5>
                                                <p class="text-muted m-b-0">Teknik Pangan</p>
                                            </div>
                                            <div class="col-4 m-t-15">
                                                <h5>2</h5>
                                                <p class="text-muted m-b-0">Teknik Mesin</p>
                                            </div>
                                            <div class="col-4 m-t-15">
                                                <h5>3</h5>
                                                <p class="text-muted m-b-0">Teknik Industri</p>
                                            </div>
                                            <div class="col-4 m-t-15">
                                                <h5>2</h5>
                                                <p class="text-muted m-b-0">Teknik Lingkungan</p>
                                            </div>
                                            <div class="col-4 m-t-15">
                                                <h5>1</h5>
                                                <p class="text-muted m-b-0">Teknik PWK</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Job application card end -->
                    </div>
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
<?php include('konten/js.php'); ?>