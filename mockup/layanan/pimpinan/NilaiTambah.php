<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- Content Row -->
            <br />


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

                            <tbody>
                                <tr>
                                    <td class="ul" colspan="2"><b>Tambah Nilai</b></td>
                                </tr>

                            </tbody>
                        </div>
                        <div class="card-block">
                            <!-- babeh -->
                            <!-- tabel -->
                            <div class="mb-3">
                                <div class="dt-responsive table-responsive" style="color: #f76700;">
                                    <table class="table row-hover table table-striped">

                                        <tbody>

                                            <tr>
                                                <div class="row g-2">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="name@example.com">
                                                            <label for="floatingInput">Nilai</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Semester">
                                                            <label for="floatingInput">Bobot </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Semester">
                                                            <label for="floatingInput">Batas Bawah </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </tr>
                                            <tr>
                                                <div class="row g-2">
                                                    <div class="col-md">
                                                        <td class="ul"><input type="checkbox" name="NA" value="Y">
                                                            Lulus?
                                                        </td>
                                                        <td class="ul"><input type="checkbox" name="NA" value="Y">
                                                            Hitung IPK
                                                        </td>
                                                    </div>
                                                </div>
                                            </tr>
                                            <br />
                                            <tr>
                                                <div class="row g-2">
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Semester">
                                                            <label for="floatingInput">Batas Atas </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="name@example.com">
                                                            <label for="floatingInput">Max Pengambilan SKS</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-floating">
                                                            <input type="email" class="form-control" id="floatingInput"
                                                                placeholder="Semester" value="">
                                                            <label for="floatingInput">Deskripsi </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </tr>

                                            <tr>
                                                <td colspan="2"><input type="submit" name="Simpan" value="Simpan" .0
                                                        class="button">
                                                    <input type="reset" name="Reset" value="Reset" class="button">
                                                    <input type="button" name="Batal" value="Batal" class="button"
                                                        onclick="location='?mnux=master.matakuliah&amp;mk=kurikulum&amp;PHPSESSID=5dgegnl1086siqga7a0muu8g13'">
                                                </td>
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