<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <!-- Begin Page Content -->
        <br />
        <div class="container-fluid">
            <legend>Presensi Perkuliahan</legend>
            <form class="form-inline">
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option value="1">- Pilih Tahun Akademik -</option>
                    <option value="2">2019 - 2 - Semester Genap - (2019-2020)</option>
                    <option value="3">2019 - 1 - Semester Ganjil - (2019-2020)</option>
                    <option value="4">2018 - 2 - Semester Genap - (2018-2019)</option>
                    <option value="5">2018 - 1 - Semester Ganjil - (2018-2019)</option>
                    <option value="6">2017 - 2 - Semester Genap - (2017-2018)</option>
                    <option value="7">2017 - 1 - Semester Ganjil - (2017-2018)</option>
                    <option value="8">2016 - 2 - Semester Genap - (2016-2017)</option>
                    <option value="9">2016 - 1 - Semester Ganjil - (2016-2017)</option>
                </select>
                <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                    <option selected>- Pilih Mata Kuliah -</option>
                    <option value="1">IF164205 - Perancangan Basis Data - C (kamis - 13.00) </option>
                    <option value="2">-</option>
                    <option value="3">-</option>
                </select>
                <br />
                <a class="btn btn-info" href="TampilPresensiPerkuliahan.html" role="button"><i class="fa fa-search"></i>
                    Tampilkan</a>
            </form>
        </div>
        <!-- end Presensi Perkuliahan -->
        <br />
        <br />
        <!-- start Profile -->
        <div class="row">
            <div class="container-fluid">
                <div class="main-body">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                            class="rounded-circle" width="150">
                                        <div class="mt-3">
                                            <h4>SANDRA ISLAMA PUTRA, S.Si., M.Kom.</h4>

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
                                            <h6 class="mb-0">Matakuliah</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">IF164205 - PERANCANGAN BASIS DATA</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Waktu Kuliah</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">Jumat, 13:00 ~ 15:30</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Dosen Koordinator</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">SANDRA ISLAMA PUTRA, S.Si., M.Kom.
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">SKS</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">3 dari 3 SKS</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Lokasi</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">Kampus Empat, SB110</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Kehadiran</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">1/14</div>
                                    </div>
                                    <hr>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Pertemuan</h6>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <small id="emailHelp" class="form-text text-muted">pertemuan diisi dengan angka
                                            1-14</small>
                                    </div>
                                    <input class="form-control" type="date" placeholder="No. Surat">
                                    <br />
                                    <div class="col-right">
                                        <a class="btn btn-primary" href="#" role="button"><i
                                                class="fa fa-plus-square"></i> Tambahkan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="table12">
                        <div class="row12 header12 green">
                            <div class="cell12">Pertemuan</div>
                            <div class="cell12">Tanggal</div>
                            <div class="cell12">Jam</div>
                            <div class="cell12">Hadir</div>
                            <div class="cell12">Presentase</div>
                            <div class="cell12">Cetak</div>
                        </div>
                        <div class="row12">
                            <div class="cell12" data-title="Pertemuan">2</div>
                            <div class="cell12" data-title="Tanggal">31-01-2020</div>
                            <div class="cell12" data-title="Jam">13:00 ~ 14:23</div>
                            <div class="cell12" data-title="Hadir">30 dari 38</div>
                            <div class="cell12" data-title="Presentase">90%</div>
                            <div class="cell12" data-title="Crud">
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#" role="button"><i class="fa fa-file"></i>
                                        Cetak</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end profile -->
            </div>
        </div>
    </main>
    <br />
    <!-- footer start -->
    <?php include('konten/footer.php'); ?>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>