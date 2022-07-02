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
                            <a class="btn btn-primary" href="#" role="button">Tampilkan</a>
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
                                <h5><b>Daftar Lulusan Pertahun</b></h5>

                            </div>
                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <th class="ttl" nowrap="true">No</th>
                                                <th class="ttl" nowrap="true">NRP</th>
                                                <th class="ttl" nowrap="true">Nama</th>
                                                <th class="ttl" nowrap="true">Tgl Mulai TA</th>
                                                <th class="ttl" nowrap="true">Tgl Sidang</th>
                                                <th class="ttl" nowrap="true">Lama TA</th>
                                                <th class="ttl" nowrap="true">Lama Studi</th>
                                                <th class="ttl" nowrap="true">SKS</th>
                                                <th class="ttl" nowrap="true">IPK</th>
                                                <th class="ttl" nowrap="true">Yudisium</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr class="table-success">
                                                <td align="center" data-label="No">1</td>
                                                <td align="center" data-label="NRP">153040158</td>
                                                <td align="left" data-label="Nama">MUHAMMAD NUR ALI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">3.88</td>
                                                <td align="left" data-label="Yudisium">DENGAN PUJIAN</td>
                                            </tr>

                                            <tr class="table-success">
                                                <td align="center" data-label="No">2</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">3.88</td>
                                                <td align="left" data-label="Yudisium">DENGAN PUJIAN</td>
                                            </tr>
                                            <tr class="table-success">
                                                <td align="center" data-label="No">3</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">3.88</td>
                                                <td align="left" data-label="Yudisium">DENGAN PUJIAN</td>
                                            </tr>
                                            <tr>
                                                <td align="center" data-label="No">4</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">3.88</td>
                                                <td align="left" data-label="Yudisium">SANGAT MEMUASKAN</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <td align="center" data-label="No">5</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">2.74</td>
                                                <td align="left" data-label="Yudisium">MEMUASKAN</td>
                                            </tr>
                                            <tr>
                                                <td align="center" data-label="No">6</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">3.88</td>
                                                <td align="left" data-label="Yudisium">SANGAT MEMUASKAN</td>
                                            </tr>
                                            <tr class="table-danger">
                                                <td align="center" data-label="No">7</td>
                                                <td align="center" data-label="NRP">153040151</td>
                                                <td align="left" data-label="Nama">MOCH AIDIL FITRI</td>
                                                <td align="center" data-label="Tgl Mulai TA">01-07-2018</td>
                                                <td align="center" data-label="Tgl Sidang">30-12-2019</td>
                                                <td align="left" data-label="Lama TA">1 tahun 5 bulan</td>
                                                <td align="left" data-label="Lama Studi">4 tahun 3 bulan</td>
                                                <td align="center" data-label="SKS">144</td>
                                                <td align="center" data-label="IPK">2.70</td>
                                                <td align="left" data-label="Yudisium">MEMUASKAN</td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <br />
                    <br />
                    <br />
                    <br />
                    <!-- table 2 -->
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="dt-responsive table-responsive" style="color: #f76700;">
                                        <table class="table row-hover table table-striped">
                                            <thead>
                                                <tr>
                                                    <th colspan="2" class="ttl" nowrap="true">Wisuda</th>
                                                    <th colspan="4" class="ttl" nowrap="true">Lama Studi</th>
                                                    <th colspan="4" class="ttl" nowrap="true">Lama TA</th>
                                                    <th colspan="3" class="ttl" nowrap="true">IPK</th>
                                                    <th colspan="3" class="ttl" nowrap="true">Jumlah Lulusan dengan IPK
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th class="lulus">Ikut</th>
                                                    <th class="lulus">Tidak Ikut</th>
                                                    <th class="lulus"> &lt;= 4 tahun</th>
                                                    <th class="lulus">Terlama</th>
                                                    <th class="lulus">Rata-rata</th>
                                                    <th class="lulus">Tercepat</th>
                                                    <th class="lulus"> &lt;= 6 bulan</th>
                                                    <th class="lulus">Terlama</th>
                                                    <th class="lulus">Rata-rata</th>
                                                    <th class="lulus">Tercepat</th>
                                                    <th class="lulus">Terendah</th>
                                                    <th class="lulus">Rata-rata</th>
                                                    <th class="lulus">Tertinggi</th>
                                                    <th class="lulus">&lt; 2.75</th>
                                                    <th class="lulus">2.75 - 3.50</th>
                                                    <th class="lulus">&gt; 3.50</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th data-label="Ikut">1 orang</th>
                                                    <th data-label="Tidak Ikut">9 orang</th>
                                                    <th data-label="&lt;= 4">4 orang</th>
                                                    <th data-label="Terlama">8 tahun 1 bulan</th>
                                                    <th data-label="Rata-rata">5 tahun 1 bulan</th>
                                                    <th data-label="Tercepat">2 tahun</th>
                                                    <th data-label="&lt;= 6 bulan">8 orang</th>
                                                    <th data-label="Terlama">3 tahun 3 bulan</th>
                                                    <th data-label="Rata-rata">1 tahun 4 bulan</th>
                                                    <th data-label="Tercepat">0 bulan</th>
                                                    <th data-label="Terendah">2.33</th>
                                                    <th data-label="Rata-rata">3.25</th>
                                                    <th data-label="Tertinggi">4.00</th>
                                                    <th data-label="&lt; 2.75">3 orang</th>
                                                    <th data-label="2.75 - 3.50">232 orang</th>
                                                    <th data-label="&gt; 3.50">84</th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- tabel -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>