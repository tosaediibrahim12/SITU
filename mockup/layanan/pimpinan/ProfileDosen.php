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
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInputGrid">Cari Dosen</label>
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
                    </div>

                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="#" role="button">NIP</a>
                        <a class="btn btn-primary" href="#" role="button">Nama</a>
                        <a class="btn btn-primary" href="#" role="button">Semua</a>
                    </div>
                </div>
                <br />
                <h5>Urutkan berdasarkan</h5>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                    <label class="form-check-label" for="inlineRadio1">Nama</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                        value="option2">
                    <label class="form-check-label" for="inlineRadio2">Login NIP</label>
                </div>
                <a class="btn btn-primary" href="#" role="button"> Urutkan</a>
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
                            <h5>Profile Dosen</h5>
                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>

                                                <th class="ttl" nowrap="true">#</th>
                                                <th class="ttl" nowrap="true">Login/NIP</th>
                                                <th class="ttl" nowrap="true">NIDN</th>
                                                <th class="ttl" nowrap="true">Nama</th>
                                                <th class="ttl" nowrap="true">Gelar</th>
                                                <th class="ttl" nowrap="true">Program Studi</th>
                                                <th class="ttl" nowrap="true">Homebase</th>
                                                <th class="ttl" nowrap="true">Telepon</th>
                                                <th class="ttl" nowrap="true">Alamat</th>
                                                <th class="ttl" nowrap="true">NA</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>

                                                <td class="row12" data-label="#">2</td>
                                                <td class="cell12" data-label="NIP/Login">
                                                    <a href="profil.php"> 0016076701</a>
                                                   
                                                </td>
                                                <td class="cell12" data-label="NIDN">
                                                    0016076701
                                                </td>
                                                <td class="cell12" data-label="Nama">
                                                SANDRA ISLAMA PUTRA, S.Si., M.Kom.
                                                </td>
                                                <td class="cell12" data-label="Gelar">
                                                    S.Kom
                                                </td>
                                                <td class="cell12" data-label="Program Studi">
                                                    REG-Reguler Pagi
                                                    304-Teknik Informatika
                                                </td>
                                                <td class="cell12" data-label="Home Base">
                                                    304
                                                </td>
                                                <td class="cell12" data-label="Telepon">
                                                    -
                                                </td>
                                                <td class="cell12" data-label="Alamat">
                                                    -
                                                </td>
                                                <td class="cell12" data-label="NA">
                                                    <i class="ti-book"></i>
                                                </td>
                                            </tr>
                                            <!-- 2 -->
                                            <tr>

                                                <td class="row12" data-label="#">1</td>
                                                <td class="cell12" data-label="NIP/Login">
                                                    0016076701
                                                </td>
                                                <td class="cell12" data-label="NIDN">
                                                    0016076701
                                                </td>
                                                <td class="cell12" data-label="Nama">
                                                    ASEP EDI KUSNADI
                                                </td>
                                                <td class="cell12" data-label="Gelar">
                                                    Ir.,M.Si.
                                                </td>
                                                <td class="cell12" data-label="Program Studi">
                                                    302 - Teknologi Pertambangan
                                                </td>
                                                <td class="cell12" data-label="Home Base">
                                                    302
                                                </td>
                                                <td class="cell12" data-label="Telepon">
                                                    -
                                                </td>
                                                <td class="cell12" data-label="Alamat">
                                                    GEGER KALONG TENGAH II NO. 53/C 173/B BANDUNG
                                                </td>
                                                <td class="cell12" data-label="NA">
                                                    <i class="ti-book"></i>
                                                </td>
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