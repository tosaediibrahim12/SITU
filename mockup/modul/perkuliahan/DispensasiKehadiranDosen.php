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

                <form class="form-inline">
                    <div class="my-1 mr-sm-3">
                        <a class="btn btn-success" href="TambahDispensasiDosen.php" role="button"><i
                                class="fa fa-plus-circle"></i> Dispensasi Baru</a>
                    </div>
                    <div class="my-1 mr-sm-3">
                        <a class="btn btn-info" href="#" role="button"><i class="fa fa-print"></i> Cetak Dispensasi</a>
                    </div>
                </form>

            </div>
            <br />
            <br />
            <div class="container-fluid">

                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5> Dispensasi Kehadiran Dosen</h5>
                                <tbody>
                                </tbody>
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
                                                    <th>Nama Dosen</th>
                                                    <th>Dari</th>
                                                    <th>Sampai</th>
                                                    <th>Keterangan</th>
                                                    <th>No. Surat</th>
                                                    <th>Harus diganti ?</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td data-label="Nama Dosen">DR.AYI PURBASARI,ST., MT.
                                                    </td>
                                                    <td data-label="Dari"> 26-10-2020</td>
                                                    <td data-label="Sampai"> 29-10-2020</td>
                                                    <td data-label="Keterangan"> Dispensasi Libur</td>
                                                    <td data-label="No. Surat">xx.1900-300</td>
                                                    <td data-label="No. Surat"><i class="fa fa-check"></i>
                                                    </td>
                                                    <td data-label="Crud">
                                                        <button type="button" class="btn btn-primary"><a href=""><i
                                                                    class="ti-search"></i></a> Cari</button>
                                                        <br />
                                                        <button type="button" class="btn btn-success"> <a href=""><i
                                                                    class="ti-pencil-alt"></i></a> Edit</button>
                                                        <br />
                                                        <button type="button" class="btn btn-danger"> <a href=""><i
                                                                    class="ti-trash"></i></a>Hapus</button>
                                                        <br />
                                                        <button type="button" class="btn btn-success"> <a href=""><i
                                                                    class="ti-printer"></i></a>Cetak</button>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td data-label="Nama Dosen">DR.AYI PURBASARI,ST., MT.
                                                    </td>
                                                    <td data-label="Dari"> 26-10-2020</td>
                                                    <td data-label="Sampai"> 29-10-2020</td>
                                                    <td data-label="Keterangan"> Dispensasi Libur</td>
                                                    <td data-label="No. Surat">xx.1900-300</td>
                                                    <td data-label="No. Surat"><i class="fa fa-check"></i>
                                                    </td>
                                                    <td data-label="Crud">
                                                        <button type="button" class="btn btn-primary"><a href=""><i
                                                                    class="ti-search"></i></a> Cari</button>
                                                        <br />
                                                        <button type="button" class="btn btn-success"> <a href=""><i
                                                                    class="ti-pencil-alt"></i></a> Edit</button>
                                                        <br />
                                                        <button type="button" class="btn btn-danger"> <a href=""><i
                                                                    class="ti-trash"></i></a>Hapus</button>
                                                        <br />
                                                        <button type="button" class="btn btn-success"> <a href=""><i
                                                                    class="ti-printer"></i></a>Cetak</button>
                                                    </td>
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
            <!-- end Presensi Perkuliahan -->
    </div>
    </main>
    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>