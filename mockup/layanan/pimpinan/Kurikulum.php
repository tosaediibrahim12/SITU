<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- form  start -->
            <div class="container-fluid">
                <div class="row g-3">
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
                                <option value=""></option>
                                <option value="13">1993 - Kurikulum 1993</option>
                                <option value="7">1997 - Kurikulum 1997</option>
                                <option value="4">2003 - Kurikulum 2003</option>
                                <option value="16">2009 - Kurikulum 2009</option>
                                <option value="20" selected="">2016 - Kurikulum 2016</option>
                            </select>
                            <label for="floatingSelectGrid">Kurikulum</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilJadwalPerkuliahan.php" role="button">Tampilkan</a>
                    </div>
                </div>
            </div>
            <div class="row g-3">
            </div>
            <!-- end form -->
            <br />
            <br />
            <br />
            <div class="col-md">
                <a class="btn btn-primary" href="Kurikulum.php" role="button">Mata Kuliah</a>
                <a class="btn btn-primary" href="MkSetara.php" role="button">MK Setara</a>
                <a class="btn btn-primary" href="Kurikulum1.php" role="button">Kurikulum</a>
                <a class="btn btn-primary" href="Konsentrasi.php" role="button">Konsentrasi</a>
                <a class="btn btn-primary" href="JenisMatakuliah.php" role="button">jenis matakuliah</a>
                <a class="btn btn-primary" href="PilihanWajib.php" role="button">Pilihan Wajib</a>
                <a class="btn btn-primary" href="JenisKurikulum.php" role="button">Jenis Kurikulum</a>
                <a class="btn btn-primary" href="Nilai.php" role="button">Nilai</a>
                <a class="btn btn-primary" href="MaxSKS.php" role="button">MaxSKS</a>
                <a class="btn btn-primary" href="PaketMatakuliah.php" role="button">Paket matakuliah</a>
                <a class="btn btn-primary" href="Predikat.php" role="button">Predikat</a>
            </div>
            <br />
            <br />

            <!-- table card full -->
            <div class="container-fluid">
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="MataKuliahTambah.php" role="button">Tambah MataKuliah</a>
                            <a class="btn btn-primary" href="#" role="button">Cetak</a>
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
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <td colspan="6" data-label="Semester 1">
                                                    semester: <b>1</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="ttl" width="5" nowrap="true">#</th>

                                                <th class="ttl" width="5" nowrap="true">Kode</th>

                                                <th class="ttl" nowrap="true">Nama</th>

                                                <th class="ttl" colspan="2" width="30" nowrap="true">SKS</th>

                                                <th class="ttl" title="Prasyarat" nowrap="true">Pras</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#">1</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161102</a></td>
                                                <td data-label="Matakuliah">MATEMATIKA DASAR</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">3</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>
                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">2</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161103</a></td>
                                                <td data-label="Matakuliah">AGAMA</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">2</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>

                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">3</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161104</a></td>
                                                <td data-label="Matakuliah">PENGANTAR INFORMATIKA</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">3</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>

                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <td data-label="" class="ttl" colspan="3"></td>
                                            <td data-label="" class="ttl"><b>Total : </b></td>
                                            <td colspan="2"><b>8</b></td>



                                        </tbody>
                                    </table>

                                    <!-- 2 -->

                                    <table class="table row-hover table table-striped">
                                        <thead>
                                            <tr>
                                                <td colspan="6" data-label="Semester 1">
                                                    semester: <b>2</b>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="ttl" width="5" nowrap="true">#</th>

                                                <th class="ttl" width="5" nowrap="true">Kode</th>

                                                <th class="ttl" nowrap="true">Nama</th>

                                                <th class="ttl" colspan="2" width="30" nowrap="true">SKS</th>

                                                <th class="ttl" title="Prasyarat" nowrap="true">Pras</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td data-label="#">1</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161104</a></td>
                                                <td data-label="Matakuliah">MATEMATIKA DASAR</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">3</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>

                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">2</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161105</a></td>
                                                <td data-label="Matakuliah">AGAMA</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">2</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>

                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td data-label="#">3</td>
                                                <td data-label="KodeMatkul"><i class="ti-pencil"></i><a
                                                        href="MataKuliahEdit.php">IF161102</a></td>
                                                <td data-label="Matakuliah">PENGANTAR INFORMATIKA</td>
                                                <td data-label=""></td>
                                                <td data-label="SKS">3</td>
                                                <td data-label="Pre"><a href="MataKuliahPrasyarat.php"
                                                        title="Edit Prasarat"><i class="ti-pencil"></i></a>

                                                    <a href="" title="IF161721"><i class="ti-file"></i></a>
                                                </td>
                                                </td>
                                            </tr>
                                            <td data-label="" class="ttl" colspan="3"></td>
                                            <td data-label="" class="ttl"><b>Total : </b></td>
                                            <td colspan="2"><b>8</b></td>



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