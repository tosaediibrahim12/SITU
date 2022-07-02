<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div class="pcoded-content">
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <br />
                <!-- Detail Pekerjaan Start -->
                <!-- table card full -->
                <div class="container-fluid">
                    <div class="page-body">
                        <!-- Config. table start -->
                        <div class="card">
                            <div class="card-header card-body">
                                <h5>Ubah Kata Sandi</h5>
                            </div>
                            <div class="card-block">
                                <!-- babeh -->
                                <!-- tabel -->
                                <div class="mb-3">
                                    <div class="card-content p-2" style="color: #516091;">
                                        <table class="table row-hover">
                                            <tbody>
                                                <div class="form-row">
                                                    <tr>
                                                        <td class="ul">Nama Pengguna</td>
                                                        <td class="main-body">IF132</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ul" for="validationServer01">Password Lama</td>
                                                        <td> <input type="password" id="myInput" class="form-control"
                                                                id="inputPassword validationServer01" value="rahasia">
                                                        </td>


                                                    </tr>
                                                    <tr>
                                                        <td class="ul">Password Baru</td>
                                                        <td>
                                                            <input type="password" id="myInput"
                                                                class="form-control is-valid" id="validationServer01"
                                                                value="Mark" required>
                                                            <div class="valid-feedback">
                                                                Password sudah sama!
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="ul">Konfirmasi Password (sekali lagi)</td>
                                                        <td>
                                                            <input type="password" id="myInput"
                                                                class="form-control is-valid" id="validationServer01"
                                                                value="Mark" required>
                                                            <div class="valid-feedback">
                                                                Password sudah sama!
                                                            </div>
                                                        </td>
                                                    <tr>
                                                        <td>
                                                            <button type="button" class="btn btn-primary"
                                                                data-toggle="modal" data-target="#salah">
                                                                Ganti Password
                                                            </button>
                                                        </td>
                                                        <td><input type="checkbox" onclick="myFunction()"> Show Password
                                                        </td>
                                                    </tr>

                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                                <div class="mb-3 row">

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tabel -->
                </div>
                <!-- Detail Pekerjaan End-->
            </div>
        </main>
        <!-- footer start -->
    </div>
    <!-- Ganti Password -->
    <!-- Modal -->
    <div class="modal fade" id="benar" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Password anda Berhasil Diganti
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal -->

    <!-- MODAL SALAH SANDI -->
    <div class="modal fade" id="salah" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Password tidak Sama
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END MODAL -->
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    </script>
    <?php include('konten/js.php'); ?>
    </body>

</html>