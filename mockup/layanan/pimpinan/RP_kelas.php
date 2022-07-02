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
                                <h5>Rekap Perwalian Perkelas</h5>
                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="dt-responsive table-responsive" style="color: #f76700;">
                                        <table class="table row-hover table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="ttl" rowspan="2" nowrap="true">ID</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Kode</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Matakuliah</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Kelas</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Isi KRS</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Belum<br>Perwalian</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Sudah<br>Perwalian</th>
                                                    <th class="ttl" colspan="7" nowrap="true">Distribusi Kelas</th>
                                                    <th class="ttl" rowspan="2" nowrap="true"><i class="ti-printer"></i>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="ttl" nowrap="true">Kls</th>
                                                    <th class="ttl" nowrap="true">Ruang</th>
                                                    <th class="ttl" nowrap="true">Kap</th>
                                                    <th class="ttl" nowrap="true">Mhs</th>
                                                    <th class="ttl" nowrap="true">Dari</th>
                                                    <th class="ttl" nowrap="true">sd</th>
                                                    <th class="ttl" nowrap="true">Sampai</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="ID">1</td>
                                                    <td data-label="Kode">IF163737</td>
                                                    <td data-label="Matakuliah">ADM INFRASTRUKTUR IT</td>
                                                    <td data-label="Kelas">1&nbsp;</td>
                                                    <td data-label="Isi Krs">24</td>
                                                    <td data-label="Belum Perwalian">0</td>
                                                    <td data-label="Sudah Perwalian">24</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="Ruang">SB408</td>
                                                    <td data-label="Kapasitas">24</td>
                                                    <td data-label="Mahasiswa">24</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="ID">1</td>
                                                    <td data-label="Kode">IF165107</td>
                                                    <td data-label="Matakuliah">AGAMA</td>
                                                    <td data-label="Kelas">5&nbsp;</td>
                                                    <td data-label="Isi Krs">24</td>
                                                    <td data-label="Belum Perwalian">0</td>
                                                    <td data-label="Sudah Perwalian">24</td>
                                                    <td data-label="Kelas">A</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Kapasitas">43</td>
                                                    <td data-label="Mahasiswa">42</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="ul" colspan="7">&nbsp;</td>
                                                    <td data-label="Kelas">B</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Kapasitas">43</td>
                                                    <td data-label="Mahasiswa">42</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="ul" colspan="7">&nbsp;</td>
                                                    <td data-label="Kelas">C</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Kapasitas">43</td>
                                                    <td data-label="Mahasiswa">42</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="ul" colspan="7">&nbsp;</td>
                                                    <td data-label="Kelas">D</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Kapasitas">43</td>
                                                    <td data-label="Mahasiswa">42</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
                                                </tr>
                                                <tr>
                                                    <td class="ul" colspan="7">&nbsp;</td>
                                                    <td data-label="Kelas">E</td>
                                                    <td data-label="Ruang">SB204</td>
                                                    <td data-label="Kapasitas">43</td>
                                                    <td data-label="Mahasiswa">42</td>
                                                    <td data-label="Dari">153040015</td>
                                                    <td data-label="">-</td>
                                                    <td data-label="Sampai">193044919</td>
                                                    <td data-label="Print"><a href="#">Peserta</a></td>
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