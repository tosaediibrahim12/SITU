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
                            </select>
                            <label for="floatingSelectGrid">Tahun Akademik</label>
                        </div>
                    </div>
                    <div class="col-md">

                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="A" value="">
                            <label for="floatingInputGrid">NRP</label>
                        </div>

                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                </div>
                <!-- end form -->
                <br />
                <!-- end Presensi Perkuliahan -->

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Perkuliahan Mahasiswa</h5>

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
                                                    <th>No</th>
                                                    <th>Hari</th>
                                                    <th>Jam</th>
                                                    <th>Kode MK</th>
                                                    <th>Matakuliah</th>
                                                    <th>SKS</th>
                                                    <th>Kelas</th>
                                                    <th>Ruang</th>
                                                    <th width="25%">Dosen</th>
                                                    <th title="Kehadiran Kuliah">Presensi</th>
                                                    <th width="10%" colspan="2" title="Pindah Kelas">Pindah
                                                        Kelas</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="Hari">Kamis</td>
                                                    <td data-label="Jam">07:00 ~ 08:40</td>
                                                    <td data-label="Kode">IF164505</td>
                                                    <td data-label="Matkul">PSI</td>
                                                    <td data-label="SKS">2 (3)</td>
                                                    <td data-label="Kelas">&nbsp;</td>
                                                    <td data-label="Ruangan">SB 604</td>
                                                    <td data-label="Dosen">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Pertemuan">(80.00 %)</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">2</td>
                                                    <td data-label="Hari">Jumat</td>
                                                    <td data-label="Jam">07:00 ~ 08:40</td>
                                                    <td data-label="Kode">IF164505</td>
                                                    <td data-label="Matkul">PSBO</td>
                                                    <td data-label="SKS">2 (3)</td>
                                                    <td data-label="Kelas">&nbsp;</td>
                                                    <td data-label="Ruangan">SB 604</td>
                                                    <td data-label="Dosen">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Pertemuan">(80.00 %)</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">3</td>
                                                    <td data-label="Hari">sabtu</td>
                                                    <td data-label="Jam">07:00 ~ 08:40</td>
                                                    <td data-label="Kode">IF164505</td>
                                                    <td data-label="Matkul">DASPRO</td>
                                                    <td data-label="SKS">2 (3)</td>
                                                    <td data-label="Kelas">&nbsp;</td>
                                                    <td data-label="Ruangan">SB 604</td>
                                                    <td data-label="Dosen">HELMI ILHAM FAUZI, </td>
                                                    <td data-label="Pertemuan">(80.00 %)</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4">Total SKS :</td>
                                                    <td><b>12</b></td>
                                                    <td colspan="6"></td>
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



    </main>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>