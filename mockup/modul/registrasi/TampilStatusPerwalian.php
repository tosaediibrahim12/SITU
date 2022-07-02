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
                            <label for="floatingSelectGrid">Dosen</label>
                        </div>
                    </div>


                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="TampilStatusPerwalian.php" role="button">Tampilkan</a>
                    </div>
                </div>
                <br />
                <br />
                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Daftar Mahasiswa Perwalian</h5>
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
                                    <div class="card-content p-2" style="color: #f76700;">
                                        <table class="table row-hover">
                                            <thead style="color: #f76700;">
                                                <tr>
                                                    <th>No</th>
                                                    <th>NPM</th>
                                                    <th>Nama Mahasiswa</th>
                                                    <th>IPK</th>
                                                    <th>Total SKS</th>
                                                    <th>Status Perwalian</th>
                                                    <th>Jumlah Matakuliah</th>
                                                    <th>SKS thalidasi</th>
                                                    <th>Jumlah SKS</th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td data-label="No">1</td>
                                                    <td data-label="NPM">17304000</td>
                                                    <td data-label="Nama Mahasiswa">jaka</td>
                                                    <td data-label="IPK">2,99</td>
                                                    <td data-label="Total SKS">133</td>
                                                    <td data-label="Status Perwalian">Aktif</td>
                                                    <td data-label="Jumlah MataKuliah">34</td>
                                                    <td data-label="SKS tdalidasi">14</td>
                                                    <td data-label="Jumlah SKS">144</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="No">2</td>
                                                    <td data-label="NPM">173040101</td>
                                                    <td data-label="Nama Mahasiswa">Tarkam</td>
                                                    <td data-label="IPK">1,96</td>
                                                    <td data-label="Total SKS">133</td>
                                                    <td data-label="Status Perwalian">Aktif</td>
                                                    <td data-label="Jumlah MataKuliah">34</td>
                                                    <td data-label="SKS tdalidasi">14</td>
                                                    <td data-label="Jumlah SKS">144</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="No">3</td>
                                                    <td data-label="NPM">173040102</td>
                                                    <td data-label="Nama Mahasiswa">Tosaedi Ibrahim</td>
                                                    <td data-label="IPK">2,96</td>
                                                    <td data-label="Total SKS">133</td>
                                                    <td data-label="Status Perwalian">Aktif</td>
                                                    <td data-label="Jumlah MataKuliah">34</td>
                                                    <td data-label="SKS tdalidasi">14</td>
                                                    <td data-label="Jumlah SKS">144</td>
                                                </tr>
                                                <tr>
                                                    <td data-label="No">4</td>
                                                    <td data-label="NPM">173040102</td>
                                                    <td data-label="Nama Mahasiswa">odading mang oleh</td>
                                                    <td data-label="IPK">3,96</td>
                                                    <td data-label="Total SKS">133</td>
                                                    <td data-label="Status Perwalian">Aktif</td>
                                                    <td data-label="Jumlah MataKuliah">34</td>
                                                    <td data-label="SKS tdalidasi">14</td>
                                                    <td data-label="Jumlah SKS">144</td>
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
        <?php include('konten/footer.php'); ?>
    </div>
    <!-- JS -->
    <?php include('konten/js.php'); ?>
    </body>

</html>