<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div class="card-header fg-white" style="background-color: #404E67; color: #fff; ">
        <h3>Surat Pesensi Mahasiswa</h3>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <!-- form jadwal mengajar start -->
                <div class="row g-2">
                    <div class="col-md">
                        <div class="form-floating">
                            <select class="form-select" aria-label="Tahun Akademik">
                                </option>
                                <option value="IF013">AAN ALBONE,ST.,M.TI., </option>
                                <option value="IF306">ACEP HENDRA, ST., </option>
                                <option value="IF237">ADE ENGKUS, S.Pd., M.Pd, S.Pd., M.Pd</option>
                                <option value="IF222">ADE SUKENDAR,ST.,MT , ST.,MT.</option>
                                <option value="EI215">AGI AGUS SETIAWAN S., ST., </option>
                                <option value="uv437">AGI DAHTIAR, S.PD., M.PD., </option>
                                <option value="IF318">AGUNG ALDHIYAT, </option>
                                <option value="EM169">AGUS SUPRIHANTO, IR., </option>
                                <option value="IF393">AHMAD ALMAARIF, S.KOM, MT., </option>
                                <option value="PL166">AHMAD MULYADI, ST., MT., </option>
                                <option value="EM196">AJI JATMIKA ATMAWIJAYA, ST, MT</option>
                                <option value="EP235">ANANG USMAN, SH., MH., </option>
                                <option value="EL180">ANDIK YULIANTO, ST., MT., </option>
                                <option value="EP207">ANDINI EKA PRASTIWI, S.PD, M.PD</option>
                                <option value="UV438">ANGGA MAULANA,SS.,M.PD, </option>
                                <option value="IF224">ANGGORO ARI NURCAHYO. ST.,M.KOM, ST., M.KOM</option>
                                <option value="PL162">APRIADI BUDI RAHARJA, ST, M.Si</option>
                                <option value="IF234">ARIEF JULIANTO, ST., MT., </option>
                                <option value="IF319">ARIEF ZULIANTO, ST., MT., </option>
                                <option value="EM216">ARIESTA WIBOWO, ST, </option>
                                <option value="EL165">ASEP PULOH, ST., </option>
                                <option value="EP230">ASEP ROCHYADI SUHERMAN, SE., MM., SE, MM.</option>
                                <option value="IF309">ASEP SOMANTRI ST.,MT, ST., MT.</option>
                                <option value="EL175">ASTRI WIDIASTUTI HASBIAH.,ST.,M.ENV, </option>
                                <option value="EP229">BUDHI MULYAWAN RACHMAT, S.SI., MT., S.SI, MT.</option>
                                <option value="MS199">BUDI ABDURAHMAN, IR, </option>
                                <option value="EP217">BUDI NUR SISWANTO, ST., MT., ST, MT.</option>
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
                                <option value="302">302 - Teknologi Pertambangan
                                </option>
                                <option value="303">303 - Teknik Sipil</option>
                                <option value="304">304 - Teknik Informatika
                                </option>
                                <option value="305">305 - Teknik Lingkungan</option>
                                <option value="306">306 - Perencanaan Wilayah dan
                                    Kota</option>
                                <option value="444">444 - Prodi Tes</option>
                            </select>
                            <label for="floatingSelectGrid">Prodi</label>
                        </div>
                    </div>

                    <div class="col-md">
                        <div class="form-floating">

                            <input class="form-control" type="date">
                            <label for="floatingSelectGrid">Tanggal Surat</label>
                        </div>
                    </div>



                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid"
                                placeholder="name@example.com" value="">
                            <label for="floatingInputGrid">No Surat</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="#" role="button">Tampilkan</a>
                    </div>
                </div>
                <!-- end Presensi Perkuliahan -->
                <br />
                <br />

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Surat Presensi Mahasiswa</h5>
                                <span>
                                    Daftra Mahasiswa
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
                                                    <th class="ttl" rowspan="2" nowrap="true">No.</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">NPM</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Nama</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Status</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">MK</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">Kelas</th>
                                                    <th class="ttl" rowspan="2" nowrap="true">
                                                        Rata-rata<br>Kehadiran</th>
                                                    <th class="ttl" colspan="3" nowrap="true">Cetak Individual
                                                    </th>
                                                    <th class="ttl" rowspan="2" nowrap="true"><input type="submit"
                                                            class="button" name="Cetak" value="Cetak"></th>
                                                </tr>
                                                <tr>
                                                    <th class="ttl" nowrap="true">&gt;= 14</th>
                                                    <th class="ttl" nowrap="true">11..13</th>
                                                    <th class="ttl" nowrap="true">&lt;= 10</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="NRP">173040059</td>
                                                    <td data-label="Nama">ABDI LAZUARDI PRATAMA</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Matakuliah">1</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Kehadiran">14.00</td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""><input type="checkbox" name="dosenid[]" value=""
                                                            checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="NRP">173040012</td>
                                                    <td data-label="Nama">ANDOVIDAL LOVES</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Matakuliah">1</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Kehadiran">14.00</td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""><input type="checkbox" name="dosenid[]" value=""
                                                            checked=""></td>
                                                </tr>
                                                <tr>
                                                    <td data-label="#">1</td>
                                                    <td data-label="NRP">173040202</td>
                                                    <td data-label="Nama">SAHA WAE BEBAS</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Matakuliah">1</td>
                                                    <td data-label=""></td>
                                                    <td data-label="Kehadiran">14.00</td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""></td>
                                                    <td data-label=""><input type="checkbox" name="dosenid[]" value=""
                                                            checked=""></td>
                                                </tr>


                                                <tr>
                                                    <td class="ul" colspan="10">&nbsp;</td>
                                                    <td class="ul"><input type="submit" class="button" name="Cetak"
                                                            value="Cetak"></td>
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
        </main>
        <!-- footer start -->
    </div>
    <!-- JS -->
    <?php include('konten/js.php'); ?>
    </body>

</html>