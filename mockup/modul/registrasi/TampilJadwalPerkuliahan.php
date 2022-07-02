<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <h4>Jadwal Perkuliahan</h4>
                <div class="page-body">
                    <!-- Config. table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Status Perwalian Mahasiswa</h5>
                            <span>Jika tombol proses KRS tidak muncul, kemungkinan mahasiswa dalam status Non-Aktif,
                                silahkan aktifkan terlebih dahulu, status mahasiswa tersebut</span>
                            <div class="card-header-right">
                                <ul class="list-unstyled card-option">
                                    <li><i class="feather icon-maximize full-card"></i></li>
                                    <li><i class="feather icon-minus minimize-card"></i></li>
                                    <li><i class="feather icon-trash-2 close-card"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <div class="dt-responsive table-responsive">
                                    <table id="new-cons" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th> Waktu</th>
                                                <th>Kode Matakuliah</th>
                                                <th>Matakuliah </th>
                                                <th>SKS </th>
                                                <th> Kelas</th>
                                                <th> Ruangan</th>
                                                <th>Dosen</th>
                                                <th> Presensi </th>
                                                <th> Kuliah</th>
                                                <th> Registrasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <i class="icofont icofont-ui-alarm"> </i> 13:00-13:50
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-ui-note"> </i> IF164505
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-book"></i> PEMROGRAMAN SISTEM INTERAKTIF
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-library"></i> 2 SKS
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-ui-home"></i> J
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-ui-home"> </i> SB 205
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-graduate-alt"></i> MUHAMMAD TIRTA MULIA,
                                                    ST., MT.
                                                </td>
                                                <td>
                                                    <i class="icofont icofont-pie"></i> 0
                                                </td>
                                                <td>
                                                    <!-- <button type="button" class="btn btn-success"><a href="#" role="button"><i
                                                        class="icofont icofont-phone-circle"></i> WAG</a></button>
                                            <button type="button" class="btn btn-info"><a href="#" role="button"><i
                                                        class="fa fa-cubes"></i>
                                                    Praktikum</a></button>
                                            <button type="button" class="btn btn-warning"><a href="#" role="button"><i
                                                        class="icofont icofont-ui-browser"></i> E-learning</a></button>
                                            <button type="button" class="btn btn-primary"> <a href="#" role="button"><i
                                                        class="fa fa-folder-o"></i> Kelas Serial</a></button> -->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a class="btn btn-success" role="button" class="dropdown-item" href="#"
                                    data-toggle="modal" data-target="#KRSModal"><i class="ti-pencil-alt"></i> Proses
                                    KRS & PRS </a>
                            </div>
                        </div>
                    </div>
                    <!-- Config. table end -->
                </div>
            </div>
    </div>
</div>
</main>
<!-- footer start -->
<?php include('konten/footer.php'); ?>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>