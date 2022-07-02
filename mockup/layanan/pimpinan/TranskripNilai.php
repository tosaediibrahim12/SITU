<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="right floated thirteen wide computer sixteen wide phone column" id="content">
            <!-- Content Row -->
            <h5>Transkrip Nilai</h5>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <!-- form  start -->
                <div class="row g-2">
                    <!-- no npm -->
                    <div class="col-md">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="">
                            <label for="floatingInputGrid">Cari Npm Mahasiswa</label>
                        </div>
                    </div>
                    <!-- button -->
                    <div class="col-md">
                        <a class="btn btn-primary" href="#" role="button">Cari</a>
                    </div>
                </div>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td class="tbl" colspan="4"><b>Data Mahasiswa</b></td>

                    </tr>
                    <tr>
                        <td>NPM</td>
                        <td class="ul"><b>173040082</b></td>
                        <td class="ul">Nama</td>
                        <td class="ul"><b>MUHAMAD GEMA MADANI</b></td>
                    </tr>
                    <tr>
                        <td class="ul">Status</td>
                        <td class="ul"><b>Lulus</b> (REG)</td>
                        <td class="ul">Angkatan</td>
                        <td class="ul"><b>20171</b> (304)</td>
                    </tr>
                    <tr>
                        <td class="ul">IPK</td>
                        <td class="ul"><b>2.98</b></td>
                        <td class="ul">
                            <div class="form-floating">
                                <select class="form-select" aria-label="Bahasa">
                                    <option>Indonesia</option>
                                    <option>Inggris</option>
                                </select>
                                <label for="floatingSelectGrid">Bahasa</label>
                            </div>
                        </td>
                        <td class="ul">
                            <div class="form-floating">
                                <input class="form-control" type="date">
                                <label for="floatingSelectGrid">Transkrip Tanggal</label>
                            </div>

                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- footer start -->
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>