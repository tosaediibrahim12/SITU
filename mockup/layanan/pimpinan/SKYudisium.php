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
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Lulus Tanggal</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Sampai Dengan Tanggal</label>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="col-md">
                            <a class="btn btn-primary" href="#" role="button">Filter Data</a>
                        </div>
                    </div>
                    <br />
                </div>
                <br />
                <br />
                <div class="row g-3">
                </div>
                <div class="row g-3">
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInputGrid">SK Yudisium</label>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Tanggal Yudisium</label>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="col-md">
                            <a class="btn btn-primary" href="#" role="button">Set Mahasiswa Yang dipilih</a>
                            <a class="btn btn-primary" href="#" role="button">Cetak</a>
                        </div>
                        <div class="col-md"></div>
                        <div class="col-md"></div>

                    </div>
                    <br />
                </div>
                <!-- end form -->
                <br />

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><b>SK Yudisium</b> </h5>

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
                                                    <th class="ttl" nowrap="true">N.P.M</th>
                                                    <th class="ttl" nowrap="true">Nama Mahasiswa</th>
                                                    <th class="ttl" nowrap="true">Program</th>
                                                    <th class="ttl" nowrap="true">Tgl Ujian</th>
                                                    <th class="ttl" nowrap="true">Lama Studi</th>
                                                    <th class="ttl" nowrap="true">Lama TA</th>
                                                    <th class="ttl" nowrap="true">Nilai TA</th>
                                                    <th class="ttl" nowrap="true">SKS</th>
                                                    <th class="ttl" nowrap="true">IPK</th>
                                                    <th class="ttl" nowrap="true">Yudisium</th>
                                                    <th class="ttl" nowrap="true">No SK Yudisium</th>
                                                    <th class="ttl" nowrap="true">Tgl Yudisium</th>
                                                    <th class="ttl" nowrap="true">Pilih</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="NPM">133040041</td>
                                                    <td data-label="Nama Mahasiswa">NASA SALAMY</td>
                                                    <td data-label="Program">Reguler Pagi</td>
                                                    <td data-label="Tgl Ujian" align="center">05-10-2017</td>
                                                    <td data-label="Lama Studi">4 tahun 1 bulan</td>
                                                    <td data-label="Lama TA">1 tahun 1 bulan</td>
                                                    <td data-label="Nilai TA" align="center">B</td>
                                                    <td data-label="SKS">144</td>
                                                    <td data-label="IPK">2.90</td>
                                                    <td data-label="Yudisium" align="justify">SANGAT MEMUASKAN</td>
                                                    <td data-label="No SK Yudisium" align="justify">&nbsp;</td>
                                                    <td data-label="Tgl Yudisium align=" center">00-00-0000</td>
                                                    <td data-label="Pilih" align="center"><input type="checkbox"
                                                            name="SKY[]" value="30029380"></td>
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
                                                    <th data-label="Ikut">291 orang</th>
                                                    <th data-label="Tidak Ikut">59 orang</th>
                                                    <th data-label="&lt;= 4">24 orang</th>
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
                                                    <th data-label="&lt; 2.75">34 orang</th>
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