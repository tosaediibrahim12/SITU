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
                                    <option value="20211">Universitas Pasundan</option>
                                </select>
                                <label for="floatingSelectGrid">Insitusi</label>
                            </div>
                        </div>
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
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Mulai Tanggal</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md">
                            <div class="j-span6 j-unit">
                                <div class="form-floating">
                                    <input class="form-control" type="date">
                                    <label for="floatingSelectGrid">Sampai Tanggal</label>
                                </div>
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
                                <h5>Kehadiran DR. RIRIN DWI AGUSTIN, ST., MT.</h5>

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
                                                    <th class="ttl" nowrap="true">Hari</th>
                                                    <th class="ttl" nowrap="true">Tanggal</th>
                                                    <th class="ttl" nowrap="true">Jam</th>
                                                    <th class="ttl" nowrap="true">Durasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="Hari">Jumat</td>
                                                    <td data-label="Tanggal">11-10-2019</td>
                                                    <td data-label="Jam">08:59 sd 11:37</td>
                                                    <td data-label="Durasi">02:38</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">2</td>
                                                    <td data-label="Hari">Sabtu</td>
                                                    <td data-label="Tanggal">12-10-2019</td>
                                                    <td data-label="Jam">08:59 sd 11:37</td>
                                                    <td data-label="Durasi">02:38</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">3</td>
                                                    <td data-label="Hari">Senin</td>
                                                    <td data-label="Tanggal">13-10-2019</td>
                                                    <td data-label="Jam">08:59 sd 11:37</td>
                                                    <td data-label="Durasi">02:38</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">4</td>
                                                    <td data-label="Hari">Selasa</td>
                                                    <td data-label="Tanggal">14-10-2019</td>
                                                    <td data-label="Jam">08:59 sd 11:37</td>
                                                    <td data-label="Durasi">02:38</td>
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