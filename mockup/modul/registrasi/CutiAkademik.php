<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <!-- form jadwal mengajar start -->
                <div class="row g-2">
                    <!-- no Surat -->
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid"
                                placeholder="name@example.com" value="">
                            <label for="floatingInputGrid">NRP/NPM</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="#" role="button">Tampilkan</a>
                    </div>
                </div>
                <br />
                <br />
                <!-- Start Profile -->
                <div class="container-md">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">

                                            <img src="https://prototipe.unpas.ac.id/situ/assets/img/user.png"
                                                alt="Admin" class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4>Tosaedi Ibrahim</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">NPM</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">173040102</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Program</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">Pagi(REG)</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Prodi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">Teknik Informatika(304)</div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Master Biaya & Potongan</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">Tahun 2020 Gasal</div>
                                        </div>
                                        <hr>

                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Dosen Wali</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">DODDY FERDIANSYAH, ST., MT., </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end profile -->
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5> Daftar Mahasiswa Permohonan Cuti</h5>

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
                                            <div class="card-content p-2" style="color: #516091;">
                                                <table class="table row-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="ttl" nowrap="true">Smt</th>
                                                            <th class="ttl" nowrap="true">Tahun</th>
                                                            <th class="ttl" nowrap="true">Saldo Awal</th>
                                                            <th class="ttl" nowrap="true">Biaya2</th>
                                                            <th class="ttl" nowrap="true">Potongan2</th>
                                                            <th class="ttl" nowrap="true">Bayar2</th>
                                                            <th class="ttl" nowrap="true">Tarikan2</th>
                                                            <th class="ttl" nowrap="true">Total</th>
                                                            <th class="ttl" nowrap="true">Status</th>
                                                            <th class="ttl" nowrap="true">Frm Cuti</th>
                                                            <th class="ttl" nowrap="true">SK Cuti</th>
                                                            <th class="ttl" nowrap="true">Keterangan</th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <tr>
                                                            <td data-label="#">1</td>
                                                            <td data-label="Semester">20181</td>
                                                            <td data-label="Tahun" align="right">0</td>
                                                            <td data-label="Saldo Awal" align="right">0</td>
                                                            <td data-label="Biaya2" align="right">19,500,000</td>
                                                            <td data-label="Potongan2" align="right">0</td>
                                                            <td data-label="Tarikan2" align="right">0</td>
                                                            <td class="Total" align="right">19,500,000</td>
                                                            <td data-label="Status">Aktif</td>
                                                            <td data-label="Form Cuti" align="center"><a href="#"><i
                                                                        class="ti-printer"></i></a></td>
                                                            <td data-label="SK Cuti" align="center"><a
                                                                    href="CutiAkademikEdit.php"><i
                                                                        class="ti-id-badge"></i></a></td>
                                                            <td data-label="">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td data-label="#">2</td>
                                                            <td data-label="Semester">20182</td>
                                                            <td data-label="Tahun" align="right">0</td>
                                                            <td data-label="Saldo Awal" align="right">0</td>
                                                            <td data-label="Biaya2" align="right">19,500,000</td>
                                                            <td data-label="Potongan2" align="right">0</td>
                                                            <td data-label="Tarikan2" align="right">0</td>
                                                            <td class="Total" align="right">19,500,000</td>
                                                            <td data-label="Status">Aktif</td>
                                                            <td data-label="Form Cuti" align="center"><a href="#"><i
                                                                        class="ti-printer"></i></a></td>
                                                            <td data-label="SK Cuti" align="center"><a
                                                                    href="CutiAkademikEdit.php"><i
                                                                        class="ti-id-badge"></i></a></td>
                                                            <td data-label="">&nbsp;</td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="7" align="right">Saldo Akhir :</td>
                                                            <td class="ul" align="right"><b>78,000,000</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </div>
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
    </div>
    <!-- end  -->
    </main>
    <!-- footer start -->
    <?php include('konten/footer.php'); ?>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>