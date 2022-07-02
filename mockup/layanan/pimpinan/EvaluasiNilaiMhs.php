<?php include('konten/sidebar.php'); ?>
        <!-- BEGIN CONTEN -->
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
                        <div class="col-md">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="floatingInputGrid"
                                    placeholder="name@example.com" value="">
                                <label for="floatingInputGrid">Angkatan </label>
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
                                <h5><b>Evaluasi Nilai Mahasiswa</b></h5>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" value="2">
                                            <label for="floatingInputGrid">Highlight IPS di bawah </label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" value="2">
                                            <label for="floatingInputGrid">Highlight IPK di bawah:</label>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" value="2">
                                            <label for="floatingInputGrid">Tampilkan hanya:</label>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" value="15">
                                            <label for="floatingInputGrid">Hightlight Total SKS di bawah:</label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Tampilkan Semua
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Hanya yang tidak memenuhi syarat
                                    </label>
                                </div>
                                <button type="button" class="btn btn-outline-success">Tampilkan</button>
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
                                                <th class="ttl" nowrap="true">#</th>
                                                <th class="ttl" nowrap="true">N P M</th>
                                                <th class="ttl" nowrap="true">Nama</th>
                                                <th class="ttl" nowrap="true">A M S</th>
                                                <th class="ttl" nowrap="true">1</th>
                                                <th class="ttl" nowrap="true">2</th>
                                                <th class="ttl" nowrap="true">3</th>
                                                <th class="ttl" nowrap="true">4</th>
                                                <th class="ttl" nowrap="true">SKS</th>
                                                <th class="ttl" nowrap="true">IPK</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#">1</td>
                                                <td data-label="NPM">173040014</td>
                                                <td data-label="Nama">HARJA DIHARJA</td>
                                                <td data-label="AMS">20232</td>
                                                <td data-label="1">1.55</td>
                                                <td data-label="2"></td>
                                                <td data-label="3"></td>
                                                <td data-label="4"></td>
                                                <td data-label="SKS">&nbsp;11</td>
                                                <td data-label="IPK">&nbsp;1.55</td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">2</td>
                                                <td data-label="NPM">173040153</td>
                                                <td data-label="Nama">GRADDY RACHMAN</td>
                                                <td data-label="AMS">20232</td>
                                                <td data-label="1">1.35</td>
                                                <td data-label="2"></td>
                                                <td data-label="3"></td>
                                                <td data-label="4"></td>
                                                <td data-label="SKS">&nbsp;10</td>
                                                <td data-label="IPK">&nbsp;1.35</td>
                                            </tr>
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