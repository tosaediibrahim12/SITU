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

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Peserta Kuliah</h5>
                                <span>
                                    <td class="ul" nowrap=""><b>Pres (Presensi) : </b></td>
                                    <td class="ul">Jumlah Kehadiran Mengajar Dosen</td>
                                </span>
                                <span>
                                    <td class="ul" nowrap=""><b>KK : </b></td>
                                    <td class="ul">Kapasitas Kelas</td>
                                </span>
                                <span>
                                    <td class="ul" nowrap=""><b>PK : </b></td>
                                    <td class="ul">Jumlah mahasiswa yang mengisi KRS.</td>
                                    </tr>
                                </span>
                                <span>
                                    <td class="ul" nowrap=""><b>PP : </b></td>
                                    <td class="ul">Jumlah mahasiswa yang KRSnya sudah disetujui Dosen
                                        Wali.</td>
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
                                        <table class="table row-hover table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <td class="ul" colspan="18"><b>
                                                            <a name="1"></a>Senin</b>
                                                        <a href="#Atas" title="Kembali ke atas">^</a> <a
                                                            href="#0">Minggu</a>, <a href="#1">Senin</a>, <a
                                                            href="#2">Selasa</a>, <a href="#3">Rabu</a>, <a
                                                            href="#4">Kamis</a>, <a href="#5">Jumat</a>, <a
                                                            href="#6">Sabtu</a>, <a href="#7">NA</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th rowspan="2">No</th>
                                                    <th rowspan=" 2">Jam</th>
                                                    <th colspan=" 3" text=" center">Matakuliah</th>
                                                    <th rowspan="2">Kelas</th>
                                                    <th rowspan=" 2">Ruang</th>
                                                    <th rowspan=" 2">Dosen</th>
                                                    <th colspan=" 3">Mahasiswa</th>
                                                    <th rowspan=" 2" title=" Jumlah Tatap Muka">TM</th>
                                                    <th rowspan="2" colspan="6" text=" center"><img
                                                            src="gambar/printer.gif"></th>
                                                </tr>
                                                <tr>
                                                    <th class="tbl2">Kode</th>
                                                    <th class="tbl2">Nama</th>
                                                    <th class="tbl2">SKS</th>
                                                    <th class="tbl2">KK</th>
                                                    <th class="tbl2">PK</th>
                                                    <th class="tbl2">PP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="No" align="right">1</td>
                                                    <td data-label="jam">08:00 - 10:30</td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label="SKS" align="center">3</td>
                                                    <td data-label="Kelas" align="center">A&nbsp;</td>
                                                    <td data-label="Ruangan">TS17</td>
                                                    <td data-label="Dosen">DR. DRS. IMAN FIRMANSYAH, M.SC.</td>
                                                    <td data-label="KK" align="right">38</td>
                                                    <td data-label="PK" align="right">0</td>
                                                    <td data-label="PP" align="right">0</td>
                                                    <td data-label="TM" align="center">1</td>
                                                    <td data-label="" align="center"><a
                                                            href="?mnux=jadwal.cetak.mahasiswa&amp;RincianMhsw&amp;JadwalID=32822"
                                                            title="Daftar Mahasiswa" target="_blank">Peserta</a></td>
                                                    <td data-label="" align="center"><a
                                                            href="?mnux=jadwal.cetak.bap&amp;JadwalID=32822"
                                                            title="Blanko Bertia Acara Perkuliahan"
                                                            target="_blank">BAP</a></td>
                                                    <td data-label="" align="center"><a
                                                            href="?mnux=jadwal.cetak.daftarhadir.all&amp;JadwalID=32822&amp;cetak=0"
                                                            title="Daftar Hadir Kuliah" target="_blank">Pra UTS</a></td>
                                                    <td data-label="" align="center"><a
                                                            href="?mnux=jadwal.cetak.daftarhadir.all&amp;JadwalID=32822&amp;cetak=1"
                                                            title="Daftar Hadir Kuliah" target="_blank">Pra UAS</a></td>
                                                    <td data-label="" align="center"><a
                                                            href="?mnux=jadwal.cetak.daftarhadir.pdf&amp;JadwalID=32822"
                                                            title="Daftar Hadir Kuliah" target="_blank">DHK 1</a></td>
                                                    <td data-label="" align="center">DHK 2</td>

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