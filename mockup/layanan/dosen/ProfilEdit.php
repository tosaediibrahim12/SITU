<!DOCTYPE html>
<html lang="en">
<?php include('konten/sidebar.php'); ?>
<div class="pcoded-content">
    <div id="layoutSidenav_content">
        <main>
            <br />
            <br />
            <!-- start Profile -->
            <div class="row">
                <div class="container-fluid">
                    <div class="main-body">
                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin"
                                                class="rounded-circle" width="150">
                                            <div class="mt-3">
                                                <h4>SANDRA ISLAMA PUTRA, S.Si., M.Kom.</h4>
                                                <a class="btn btn-primary" data-toggle="collapse" href="#EditProfile"
                                                    role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    Edit Profile
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="card mb-3">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">NIP</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">IF132</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Home Base</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">.304</div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Prodi</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">Teknik Informatika(304) Teknik
                                                Informatika(304) Teknik Informatika(304) Teknik Informatika(304)</div>
                                        </div>
                                        <hr>
                                        <div class="input-group mb-3 collapse" id="EditProfile">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile01"
                                                    aria-describedby="inputGroupFileAddon01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                                    file</label>
                                            </div>
                                        </div>
                                        <hr>
                                        <hr>
                                        <div class="accordion" id="accordionExample">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h2 class="mb-0">
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#collapseOne"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            Menu Biodata
                                                        </button>
                                                    </h2>
                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                                                    data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#DetailDataPribadi"
                                                            aria-expanded="false" aria-controls="DetailDataPribadi">
                                                            Data Pribadi
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Alamat"
                                                            aria-expanded="false" aria-controls="Alamat">
                                                            Alamat
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#AkademikDosen"
                                                            aria-expanded="false" aria-controls="AkademikDosen">
                                                            Akademik Dosen
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Jabatan"
                                                            aria-expanded="false" aria-controls="Jabatan">
                                                            Jabatan
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Pengajaran"
                                                            aria-expanded="false" aria-controls="Pengajaran">
                                                            Pengajaran
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Penelitian"
                                                            aria-expanded="false" aria-controls="Penelitian">
                                                            Penelitian
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Pendidikan"
                                                            aria-expanded="false" aria-controls="Pendidikan">
                                                            Pendidikan
                                                        </button>
                                                        <button class="btn btn-link btn-block text-left" type="button"
                                                            data-toggle="collapse" data-target="#Pekerjaan"
                                                            aria-expanded="false" aria-controls="Pekerjaan">
                                                            Pekerjaan
                                                        </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- data Dosen -->

                            <!-- end data Dosen -->
                            <!-- end profile -->
                        </div>
                        <br />
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body collapse" id="DetailDataPribadi" aria-labelledby="DetailDataPribadi"
                                data-parent="#accordionExample">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header card-body">
                                        <h5>Edit Data Pribadi</h5>
                                    </div>
                                    <div class="card-block">
                                        <!-- babeh -->
                                        <!-- tabel -->
                                        <div class="mb-3">
                                            <div class="card-content p-2" style="color: #516091;">
                                                <table class="table row-hover">
                                                    <tbody>

                                                        <tr>

                                                            <td class="inp1">Login/NIP</td>
                                                            <td class="ul"><input type="hidden" name="dsnid"
                                                                    value="IF132"><b>IF132</b></td>
                                                        </tr>

                                                        <tr>

                                                            <td class="inp1">NIDN</td>

                                                            <td class="ul">
                                                                <form>
                                                                    Nomer Induk
                                                                    Dosen Nasional
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="0427067501">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="inp1">Nama Dosen</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="SANDRA ISLAMA PUTRA, S.Si., M.Kom.">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Gelar</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="S.Si.">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="inp1">Tempat Lahir</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="Bandung">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="inp1">Tanggal Lahir</td>
                                                            <td class="ul">
                                                                <input class="form-control" type="date">
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Jenis Kelamin</td>
                                                            <td class="ul"><input type="radio" name="Kelamin" value="-">
                                                                Belum Diisi, <input type="radio" name="Kelamin"
                                                                    value="L" checked=""> Laki-laki, <input type="radio"
                                                                    name="Kelamin" value="P"> Perempuan</td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Agama</td>

                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="B">B - Budha</option>
                                                                    <option value="H">H - Hindu</option>
                                                                    <option value="I" selected="">I - Islam</option>
                                                                    <option value="K">K - Katolik</option>
                                                                    <option value="L">L - Lainnya</option>
                                                                    <option value="P">P - Kristen</option>
                                                                </select>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1"># Telepon</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="02266702571">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1"># Ponsel</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="+6281931400927">
                                                                    </div>
                                                                </form>
                                                            </td>


                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">E-mail</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="sandra@unpas.ac.id">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>



                                                        <tr>
                                                            <td class="inp1">Program Studi</td>
                                                            <td class="ul"><input type="checkbox" name="ProdiID[]"
                                                                    value="301"> 301 - Teknik Kimia<br><input
                                                                    type="checkbox" name="ProdiID[]" value="302"> 302 -
                                                                Teknologi Pertambangan<br><input type="checkbox"
                                                                    name="ProdiID[]" value="303"> 303 - Teknik
                                                                Sipil<br><input type="checkbox" name="ProdiID[]"
                                                                    value="304" checked=""> 304 - Teknik
                                                                Informatika<br><input type="checkbox" name="ProdiID[]"
                                                                    value="305"> 305 -
                                                                Teknik Lingkungan<br><input type="checkbox"
                                                                    name="ProdiID[]" value="306"> 306 - Perencanaan
                                                                Wilayah dan
                                                                Kota<br><input type="checkbox" name="ProdiID[]"
                                                                    value="444">
                                                                444 - Prodi Tes<br><input type="checkbox"
                                                                    name="ProdiID[]" value="Teknik Pen"> Teknik Pen -
                                                                Teknik Penerbangan<br>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Tidak aktif?</td>
                                                            <td class="ul"><input type="checkbox" name="NA" value="Y">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"><input class="button btn btn-primary"
                                                                    type="submit" name="Simpan" value="Simpan">

                                                                <input class="button btn btn-warning" type="reset"
                                                                    name="Reset" value="Reset">

                                                                <input class="button btn btn-danger" type="button"
                                                                    name="Batal" value="Batal"
                                                                    onclick="location='?mnux=master.dosen&amp;gos=&amp;PHPSESSID=4g7gthloo8bu8rh3tvvn5h99e1'">
                                                            </td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tabel -->
                        </div>

                        <!-- Alamat Start -->
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body collapse" id="Alamat">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header card-body">
                                        <h5> Alamat Pribadi</h5>
                                    </div>
                                    <div class="card-block">
                                        <!-- babeh -->
                                        <!-- tabel -->
                                        <div class="mb-3">
                                            <div class="card-content p-2" style="color: #516091;">
                                                <table class="table row-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ul" colspan="2"><b>Alamat</b></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">No KTP</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="1056032706750005">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">No Telepon</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="02266702571">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">No HP</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="+6281931400927">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">E-mail</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="sandra@unpas.ac.id">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Alamat</td>
                                                            <td>
                                                                <textarea class="form-control"
                                                                    id="exampleFormControlTextarea1"
                                                                    rows="3">Komplek Suaka Indah Jalan Gajah I No 1</textarea>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Kota</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="Cimahi">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Kode Pos</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="40532">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td class="inp1">Propinsi</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="Jawa Barat">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Negara</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="Indonesia">
                                                                    </div>
                                                                </form>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"><input class="button btn btn-primary"
                                                                    type="submit" name="Simpan" value="Simpan">

                                                                <input class="button btn btn-warning" type="reset"
                                                                    name="Reset" value="Reset">

                                                                <input class="button btn btn-danger" type="button"
                                                                    name="Batal" value="Batal">
                                                            </td>
                                                        </tr>

                                                    </tbody>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tabel -->
                        </div>
                        <!-- alamat End -->

                        <!-- Akademik Start -->
                        <!-- table card full -->
                        <div class="container-fluid">
                            <div class="page-body collapse" id="AkademikDosen">
                                <!-- Config. table start -->
                                <div class="card">
                                    <div class="card-header card-body">
                                        <h5> Akademik Dosen</h5>
                                    </div>
                                    <div class="card-block">
                                        <!-- babeh -->
                                        <!-- tabel -->
                                        <div class="mb-3">
                                            <div class="card-content p-2" style="color: #516091;">
                                                <table class="table row-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td class="ul" colspan="2"><b>Profile</b></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Mulai Bekerja</td>
                                                            <td class="ul">
                                                                <input class="form-control" type="date">
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Status Dosen</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="H">H - Kontrak</option>
                                                                    <option value="L">L - Tidak Tetap</option>
                                                                    <option value="T" selected="">T - Tetap</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Status Kerja</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="A" selected="">A - Dosen Tetap
                                                                    </option>
                                                                    <option value="B">B - Dosen PNS Dipekerjakan
                                                                    </option>
                                                                    <option value="C">C - Dosen Honorer PNS-PTN</option>
                                                                    <option value="D">D - Dosen Honorer Non-PNS-PTN
                                                                    </option>
                                                                    <option value="E">E - Dosen Kontrak</option>
                                                                    <option value="F">F - Dosen Kontrak BHMN</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Prodi Homebase</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="301">301 - Teknik Kimia</option>
                                                                    <option value="302">302 - Teknologi Pertambangan
                                                                    </option>
                                                                    <option value="303">303 - Teknik Sipil</option>
                                                                    <option value="304" selected="">304 - Teknik
                                                                        Informatika
                                                                    </option>
                                                                    <option value="305">305 - Teknik Lingkungan</option>
                                                                    <option value="306">306 - Perencanaan Wilayah dan
                                                                        Kota
                                                                    </option>
                                                                    <option value="444">444 - Prodi Tes</option>
                                                                    <option value="Teknik Pen">Teknik Pen - Teknik
                                                                        Penerbangan</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Mengajar di Prodi</td>
                                                            <td class="ul"><input type="checkbox" name="ProdiID[]"
                                                                    value="301">301 - Teknik Kimia<br><input
                                                                    type="checkbox" name="ProdiID[]" value="302">302 -
                                                                Teknologi
                                                                Pertambangan<br><input type="checkbox" name="ProdiID[]"
                                                                    value="303">303 - Teknik Sipil<br><input
                                                                    type="checkbox" name="ProdiID[]" value="304"
                                                                    checked="">304 - Teknik
                                                                Informatika<br><input type="checkbox" name="ProdiID[]"
                                                                    value="305">305 - Teknik Lingkungan<br><input
                                                                    type="checkbox" name="ProdiID[]" value="306">306 -
                                                                Perencanaan Wilayah dan Kota<br><input type="checkbox"
                                                                    name="ProdiID[]" value="444">444 - Prodi
                                                                Tes<br><input type="checkbox" name="ProdiID[]"
                                                                    value="Teknik Pen">Teknik Pen - Teknik
                                                                Penerbangan<br>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Bidang Minat / Konsentrasi</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="17">Comp Science</option>
                                                                    <option value="6">Informatika Teori</option>
                                                                    <option value="4">Jaringan Komputer</option>
                                                                    <option value="7">Multimedia</option>
                                                                    <option value="15" selected="">Rekayasa Perangkat
                                                                        Lunak
                                                                    </option>
                                                                    <option value="14">Sistem Informasi</option>
                                                                    <option value="5">Sistem Informasi dan Rekayasa
                                                                        Perangkat Lunak</option>
                                                                    <option value="16">Teknologi Informasi</option>
                                                                    <option value="8">Umum</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Kode Instansi Induk</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Lulus Perg. Tinggi</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="UNPAD">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Jenjang Pendidikan Tertinggi</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="A">A - S3</option>
                                                                    <option value="B">B - S2</option>
                                                                    <option value="C" selected="">C - S1</option>
                                                                    <option value="D">D - SP-1</option>
                                                                    <option value="E">E - SP-2</option>
                                                                    <option value="F">F - D4</option>
                                                                    <option value="G">G - D3</option>
                                                                    <option value="H">H - D2</option>
                                                                    <option value="I">I - D1</option>
                                                                    <option value="J">J - Profesi</option>
                                                                    <option value="X">X - NA</option>
                                                                </select>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="inp1">Jabatan Fungsional Terakhir</td>
                                                            <td class="ul">
                                                                <select class="form-control">
                                                                    <option value=""></option>
                                                                    <option value=""></option>
                                                                    <option value="A" selected="">A - Tenaga Pengajar
                                                                    </option>
                                                                    <option value="B">B - Asisten Ahli</option>
                                                                    <option value="C">C - Lektor</option>
                                                                    <option value="D">D - Lektor Kepala</option>
                                                                    <option value="E">E - Guru Besar</option>
                                                                </select>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td class="inp1">Keilmuan</td>
                                                            <td class="ul">
                                                                <form>
                                                                    <div class="form-row">
                                                                        <input type="text" class="form-control"
                                                                            value="TEKNIK INFORMATIKA">
                                                                    </div>
                                                                </form>
                                                            </td>

                                                        </tr>

                                                        <tr>
                                                            <td colspan="2"></td>
                                                        </tr>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tabel -->
                        </div>
                    </div>
                    <!-- Akademik End -->

                    <!-- Jabatan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Jabatan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5> Jabatan Dosen</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#TambahJabatan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample">Tambah
                                                                Jabatan <i class="ti-pencil-alt"></i>
                                                            </a> </td>

                                                    </tr>

                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Edit</th>

                                                        <th class="sunny-morning-gradient">Jabatan Akademik</th>

                                                        <th class="sunny-morning-gradient">Jabatan Dikti</th>

                                                        <th class="sunny-morning-gradient">Golongan</th>

                                                        <th class="sunny-morning-gradient">Tunjangan Ikatan</th>

                                                        <th class="sunny-morning-gradient">Tanggal Mulai</th>

                                                        <th class="sunny-morning-gradient">SK Jabatan</th>

                                                        <th class="sunny-morning-gradient">SK Golongan</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Jabatan End -->

                    <!-- Tambah Jabatan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="TambahJabatan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5> Jabatan Dosen</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="ul" colspan="2"><b>Jabatan</b></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Jabatan Akademik</td>
                                                        <td class="ul">
                                                            <select class="form-control">
                                                                <option value=""></option>
                                                                <option value="A">A - Tenaga Pengajar</option>
                                                                <option value="B">B - Asisten Ahli</option>
                                                                <option value="C">C - Lektor</option>
                                                                <option value="D">D - Lektor Kepala</option>
                                                                <option value="E">E - Guru Besar</option>
                                                            </select>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Jabatan Dikti</td>
                                                        <td class="ul">
                                                            <select class="form-control">
                                                                <option value=""></option>
                                                                <option value="01">01 - AAM</option>
                                                                <option value="02">02 - AA</option>
                                                                <option value="03">03 - LMu</option>
                                                                <option value="04">04 - LMa</option>
                                                                <option value="05">05 - L</option>
                                                                <option value="06">06 - LKM</option>
                                                                <option value="07">07 - LK</option>
                                                                <option value="08">08 - GBM</option>
                                                                <option value="09">09 - GB</option>
                                                            </select>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Golongan</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tunjangan Ikatan</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>



                                                    <tr>
                                                        <td class="ul" colspan="2"><b>Bank</b></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Nama Bank</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Nama Akun</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Nomer Akun</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tanggal Mulai</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Nomor SK Jabatan</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">File SK Jabatan</td>
                                                        <td class="ul"><input type="file" class="textbox" name="FileSK">
                                                            Maks 500 KB
                                                            <input type="hidden" name="FileSKPrev" value="/"><br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Nomor SK Golongan</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">File SK Golongan</td>
                                                        <td class="ul"><input type="file" class="textbox"
                                                                name="FileSKGolongan"> Maks 500 KB
                                                            <input type="hidden" name="FileSKGolonganPrev"
                                                                value="/"><br>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tidak Aktif?</td>
                                                        <td class="ul"><input type="checkbox" name="NA" value="Y"></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"><input class="button btn btn-primary"
                                                                type="submit" name="Simpan" value="Simpan">

                                                            <input class="button btn btn-warning" type="reset"
                                                                name="Reset" value="Reset">

                                                            <input class="button btn btn-danger" type="button"
                                                                name="Batal" value="Batal">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- tambah Jabatan End -->
                    <!-- Struktural Start -->

                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Struktural">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Struktural </h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="ul" colspan="8"></td>
                                                    </tr>

                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Edit</th>

                                                        <th class="sunny-morning-gradient">Jabatan Struktural</th>

                                                        <th class="sunny-morning-gradient">Unit Kerja</th>

                                                        <th class="sunny-morning-gradient">Tahun Mulai</th>

                                                        <th class="sunny-morning-gradient">Tahun Selesai</th>

                                                        <th class="sunny-morning-gradient">Nomor SK</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Edit">-</td>

                                                        <td data-label="Jabatan Struktural">-</td>

                                                        <td data-label="Unit Kerja">-</td>

                                                        <td data-label="Tahun Mulai">-</td>

                                                        <td data-label="Tahun Selesai">-</td>

                                                        <td data-label="Nomor SK">-</td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>

                                                </tbody>

                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Struktural End -->


                    <!-- Pengajaran Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Pengajaran">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Pengajaran</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <th class="ttl" nowrap="true">#</th>

                                                        <th class="ttl" nowrap="true">Tahun</th>

                                                        <th class="ttl" nowrap="true">Kode</th>

                                                        <th class="ttl" nowrap="true">Matakuliah</th>

                                                        <th class="ttl" nowrap="true">Kelas</th>

                                                        <th class="ttl" nowrap="true">Jenis</th>

                                                        <th class="ttl" nowrap="true">Hari</th>

                                                        <th class="ttl" nowrap="true">Jam</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Tahun">20022</td>

                                                        <td data-label="Kode">IF801</td>

                                                        <td data-label="MataKuliah">KOMPUTER DAN MASYARAKAT</td>

                                                        <td data-label="Kelas">01</td>

                                                        <td data-label="Jenis">K</td>

                                                        <td data-label="Hari">Senin</td>

                                                        <td data-label="Jam">08:00:00 ~ 09:59:00</td>

                                                    </tr>
                                                    <tr>

                                                        <td data-label="#">2</td>

                                                        <td data-label="Tahun">20022</td>

                                                        <td data-label="Kode">IF801</td>

                                                        <td data-label="MataKuliah">KOMPUTER DAN MASYARAKAT</td>

                                                        <td data-label="Kelas">01</td>

                                                        <td data-label="Jenis">K</td>

                                                        <td data-label="Hari">Senin</td>

                                                        <td data-label="Jam">08:00:00 ~ 09:59:00</td>

                                                    </tr>
                                                    <tr>

                                                        <td data-label="#">3</td>

                                                        <td data-label="Tahun">20022</td>

                                                        <td data-label="Kode">IF801</td>

                                                        <td data-label="MataKuliah">KOMPUTER DAN MASYARAKAT</td>

                                                        <td data-label="Kelas">01</td>

                                                        <td data-label="Jenis">K</td>

                                                        <td data-label="Hari">Senin</td>

                                                        <td data-label="Jam">08:00:00 ~ 09:59:00</td>

                                                    </tr>

                                                </tbody>
                                            </table>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#">Previous</a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Pengajaran End -->


                    <!-- Penelitian Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Penelitian">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Penelitian</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="ul" colspan="10"></td>
                                                    </tr>

                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Detail</th>

                                                        <th class="sunny-morning-gradient">Judul Penelitian</th>

                                                        <th class="sunny-morning-gradient">Peran</th>

                                                        <th class="sunny-morning-gradient">Tempat</th>

                                                        <th class="sunny-morning-gradient">Jenis Penelitian</th>

                                                        <th class="sunny-morning-gradient">Bidang Kajian</th>

                                                        <th class="sunny-morning-gradient">Pendanaan</th>

                                                        <th class="sunny-morning-gradient">Tahun</th>

                                                        <th class="sunny-morning-gradient">File Penelitian</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPenelitian"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a> </td>

                                                        <td data-label="Judul Penelitian">Candra Test</td>

                                                        <td data-label="Peran">Penulis Utama</td>

                                                        <td data-label="Tempat">Rumah</td>

                                                        <td data-label="Jenis Penelitian">Kelompok</td>

                                                        <td data-label="Bidang Kajian">Testing</td>

                                                        <td data-label="Pendanaan">Dikti</td>

                                                        <td data-label="Tahun">2010</td>

                                                        <td data-label="File Penelitian"><a
                                                                href="files/Penelitian_CPNS_Departemen_Perdaganan_2010.pdf"><i
                                                                    class="ti-folder"></i></a></td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Penelitian End -->


                    <!-- Penelitian Edit Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="DetailPenelitian">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Penelitian</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <tbody>
                                                    <tr>
                                                        <th class="sunny-morning-gradient" colspan="5">Detail Penelitian
                                                        </th>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Fakultas</td>
                                                        <td class="ul" colspan="2">ft</td>
                                                        <td class="ul" rowspan="6" valign="top">Nomor SK
                                                            <br><b>123</b><br>
                                                            <a href="" target="_blank"
                                                                title="Klik untuk download File SK">
                                                                <img src="" width="150"></a>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Prodi</td>
                                                        <td class="ul" colspan="2">Teknik Informatika</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Judul</td>
                                                        <td class="ul" width="500" colspan="2">Candra Test</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Bidang Kajian</td>
                                                        <td class="ul">Testing</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="inp1">Tempat</td>
                                                        <td class="ul">Rumah</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Sumber Dana</td>
                                                        <td class="ul">Dikti</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="inp1">Besar Dana</td>
                                                        <td class="ul">5.000.000</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tahun</td>
                                                        <td class="ul">2010</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="inp1">Jenis Penelitian</td>
                                                        <td class="ul">Kelompok</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="ul" colspan="5"><a
                                                                href="?mnux=master.dosen&amp;mdlid=1&amp;gos=DsnEdt&amp;md=0&amp;dsnid=IF132&amp;dsnsub=TampilPenelitian">Kembali</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Penelitian Edit End -->

                    <!-- Peengabdian Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Pengabdian">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Penelitian</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="ul" colspan="10"></td>
                                                    </tr>

                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Detail</th>

                                                        <th class="sunny-morning-gradient">Nama Pengabdian</th>

                                                        <th class="sunny-morning-gradient">Peran</th>

                                                        <th class="sunny-morning-gradient">Tempat</th>

                                                        <th class="sunny-morning-gradient">Jenis Pengabdian</th>

                                                        <th class="sunny-morning-gradient">Bidang Kajian</th>

                                                        <th class="sunny-morning-gradient">Pendanaan</th>

                                                        <th class="sunny-morning-gradient">Tahun</th>


                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPengabdian"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a> </td>

                                                        <td data-label="Nama Pengabdian">Candra Test</td>

                                                        <td data-label="Peran">Penulis Utama</td>

                                                        <td data-label="Tempat">Rumah</td>

                                                        <td data-label="Jenis Pengabdian">Kelompok</td>

                                                        <td data-label="Bidang Kajian">Testing</td>

                                                        <td data-label="Pendanaan">Dikti</td>

                                                        <td data-label="Tahun">2010</td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Pengabdian End -->

                    <!-- Pendidikan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Pendidikan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Pendidikan</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Edit</th>

                                                        <th class="sunny-morning-gradient">Gelar</th>

                                                        <th class="sunny-morning-gradient">Jenjang</th>

                                                        <th class="sunny-morning-gradient">Tanggal Lulus Ijazah</th>

                                                        <th class="sunny-morning-gradient">Nama Perguruan Tinggi</th>

                                                        <th class="sunny-morning-gradient">Negara</th>

                                                        <th class="sunny-morning-gradient">Bidang Ilmu</th>

                                                        <th class="sunny-morning-gradient">Prodi DIKTI</th>

                                                        <th class="sunny-morning-gradient">Ijazah</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>
                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPendidikan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a></td>

                                                        <td data-label="Gelar">-</td>

                                                        <td data-label="Jenjang">S2</td>

                                                        <td data-label="Tanggal Lulus Ijazah">1945-01-01</td>

                                                        <td data-label="Nama Perguruan Tinggi">INSTITUT TEKNOLOGI
                                                            BANDUNG
                                                        </td>

                                                        <td data-label="Negara">Indonesia</td>

                                                        <td data-label="Bidang Ilmu">KOMPUTER / INFORMATIKA</td>
                                                        <td data-label="Prodi DIKTI">55101</td>
                                                        <td data-label="Ijazah"><a href="#"><i
                                                                    class="ti-import"></i></a>
                                                        </td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                    <tr>

                                                        <td data-label="#">2</td>


                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPendidikan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a></td>

                                                        <td data-label="Gelar">-</td>

                                                        <td data-label="Jenjang">S2</td>

                                                        <td data-label="Tanggal Lulus Ijazah">1945-01-01</td>

                                                        <td data-label="Nama Perguruan Tinggi">INSTITUT TEKNOLOGI TELKOM
                                                        </td>

                                                        <td data-label="Negara">Indonesia</td>

                                                        <td data-label="Bidang Ilmu">KOMPUTER / INFORMATIKA</td>
                                                        <td data-label="Prodi DIKTI">55101</td>
                                                        <td data-label="Ijazah"><a href="#"><i
                                                                    class="ti-import"></i></a>
                                                        </td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                    <tr>

                                                        <td data-label="#">3</td>


                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPendidikan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a></td>

                                                        <td data-label="Gelar" nowrap="">S.Si.</td>

                                                        <td data-label="Jenjang">S1</td>

                                                        <td data-label="Tanggal Lulus Ijazah">1998-11-01</td>

                                                        <td data-label="Nama Perguruan Tinggi">UNIVERSITAS PADJADJARAN
                                                        </td>

                                                        <td data-label="Negara">Indonesia</td>

                                                        <td data-label="Bidang Ilmu">ILMU KOMPUTER</td>
                                                        <td data-label="Prodi DIKTI">44201</td>
                                                        <td data-label="Ijazah"><a href="#"><i
                                                                    class="ti-import"></i></a>
                                                        </td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                    <tr>

                                                        <td data-label="#">4</td>

                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPendidikan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a></td>

                                                        <td data-label="Gelar">A.Md.</td>

                                                        <td data-label="Jenjang">D3</td>

                                                        <td data-label="Tanggal Lulus Ijazah">1996-11-27</td>

                                                        <td data-label="Nama Peguruan Tinggi">UNIVERSITAS PADJADJARAN
                                                        </td>

                                                        <td data-label="Negara">Indonesia</td>

                                                        <td data-label="Bidang Ilmu">ILMU KOMPUTER</td>
                                                        <td data-label="Prodi DIKTI">57601</td>
                                                        <td data-label="Ijazah"><a href="#"><i
                                                                    class="ti-import"></i></a>
                                                        </td>

                                                        <td data-label="NA"><i class="ti-book"></i></td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Pendidikan End -->


                    <!-- Kegiatan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Kegiatan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Kegiatan</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>
                                                        <td class="ul" colspan="12"></td>
                                                    </tr>

                                                    <tr>
                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Edit</th>

                                                        <th class="sunny-morning-gradient">Nama Kegiatan</th>

                                                        <th class="sunny-morning-gradient">Jenis Kegiatan</th>

                                                        <th class="sunny-morning-gradient">Hasil</th>

                                                        <th class="sunny-morning-gradient">Peran</th>

                                                        <th class="sunny-morning-gradient">Nama Forum</th>

                                                        <th class="sunny-morning-gradient">Bidang</th>

                                                        <th class="sunny-morning-gradient">Tahun</th>

                                                        <th class="sunny-morning-gradient">Sumber Dana</th>

                                                        <th class="sunny-morning-gradient">Besar Dana</th>

                                                        <th class="sunny-morning-gradient">SK</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Edit">-</td>

                                                        <td data-label="Nama Kegiatan">INDONESIA ICT AWARD 2011</td>

                                                        <td data-label="Jenis Kegiatan">Karya Seni - Teknologi</td>

                                                        <td data-label="Hasil">Sertifikat</td>

                                                        <td data-label="Peran">Pembuat</td>

                                                        <td data-label="Nama Forum"></td>

                                                        <td data-label="Bidang"></td>

                                                        <td data-label="Tahun">2011</td>

                                                        <td data-label="Sumber Dana">Pribadi</td>

                                                        <td data-label="Besar Dana">
                                                            <script>
                                                            document.write(number_format(5000000, 0, '', '.'))
                                                            </script>
                                                        </td>

                                                        <td data-label="SK"><a href="" target="_blank"><i
                                                                    class="ti-import"></i></a></td>

                                                        <td data-label="NA" align="center"><i class="ti-book"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Kegiatan End -->


                    <!-- Pelatihan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Pelatihan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Kegiatan</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>

                                                        <th class="sunny-morning-gradient">#</th>

                                                        <th class="sunny-morning-gradient">Edit</th>

                                                        <th class="sunny-morning-gradient">Nama Pelatihan</th>

                                                        <th class="sunny-morning-gradient">Peran</th>

                                                        <th class="sunny-morning-gradient">Nama Forum</th>

                                                        <th class="sunny-morning-gradient">Tempat</th>

                                                        <th class="sunny-morning-gradient">Tahun</th>

                                                        <th class="sunny-morning-gradient">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Edit">-</td>

                                                        <td data-label="Nama Pelatihan">-</td>

                                                        <td data-label="Peran">-</td>

                                                        <td data-label="Nama Forum"></td>

                                                        <td data-label="Tempat"></td>

                                                        <td data-label="Tahun">2011</td>


                                                        <td data-label="NA" align="center"><i class="ti-book"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Pelatihan End -->

                    <!-- Pekerjaan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="Pekerjaan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Pekerjaan</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2 table-responsive" style="color: #516091;">
                                            <table class="table row-hover">
                                                <thead>
                                                    <tr>

                                                        <th class="ttl" nowrap="true">#</th>

                                                        <th class="ttl" nowrap="true">Detail</th>

                                                        <th class="ttl" nowrap="true">Jabatan</th>

                                                        <th class="ttl" nowrap="true">Nama Institusi</th>

                                                        <th class="ttl" nowrap="true">Alamat Institusi</th>

                                                        <th class="ttl" nowrap="true">Kota</th>

                                                        <th class="ttl" nowrap="true">Kodepos</th>

                                                        <th class="ttl" nowrap="true">Telepon</th>

                                                        <th class="ttl" nowrap="true">Fax</th>

                                                        <th class="ttl" nowrap="true">NA</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td data-label="#">1</td>

                                                        <td data-label="Detail"><a class="btn btn-primary"
                                                                data-toggle="collapse" href="#DetailPekerjaan"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="ti-pencil-alt"></i>
                                                            </a></td>

                                                        <td data-label="Jabatan">WAKIL DIREKTUR</td>

                                                        <td data-label="Nama Institusi">PT. DSIP</td>

                                                        <td data-label="Alamat Institusi">JALAN KOPO NO 300A</td>

                                                        <td data-label="Kota">BANDUNG</td>

                                                        <td data-label="KodePos">-</td>

                                                        <td data-label="Telephone">-</td>

                                                        <td data-label="Fax">-</td>

                                                        <td data-label="NA" align="center"><img src="gambar/bookY.gif">
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Pekerjaan End -->

                    <!-- Detail Pekerjaan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="DetailPekerjaan">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Pekerjaan Dosen</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <tbody>
                                                    <tr>
                                                        <td class="ul" colspan="2"><b>Update Pekerjaan Dosen</b></td>
                                                    </tr>

                                                    <tr>

                                                        <td class="inp1">Nama Institusi</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="PT. DSIP">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td class="inp1">Bidang Usaha</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="TEKNOLOGI INFORMASI">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="inp1">Jabatan</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="WAKIL DIREKTUR">
                                                                </div>
                                                            </form>
                                                        </td>


                                                    </tr>

                                                    <tr>

                                                        <td class="inp1">Alamat Institusi</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="JALAN KOPO NO 300A">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Kota</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="BANDUNG">
                                                                </div>
                                                            </form>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Kodepos</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Telepon</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control" value="">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Fax</td>
                                                        <td class="ul">
                                                            <form>
                                                                <div class="form-row">
                                                                    <input type="text" class="form-control"
                                                                        value="BANDUNG">
                                                                </div>
                                                            </form>
                                                        </td>

                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tanggal Mulai</td>
                                                        <td class="ul">
                                                            <input class="form-control" type="date">
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="inp1">Tanggal Selesai</td>
                                                        <td class="ul">
                                                            <input class="form-control" type="date">
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td class="inp1">Tidak Aktif ?</td>

                                                        <td class="ul"><input type="checkbox" name="NA" value="Y"
                                                                checked="checked"><i>Jika aktif, di CV tertulis Tanggal
                                                                Mulai - Sekarang</i></td>

                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"><input class="button btn btn-primary"
                                                                type="submit" name="Simpan" value="Simpan">

                                                            <input class="button btn btn-warning" type="reset"
                                                                name="Reset" value="Reset">

                                                            <input class="button btn btn-danger" type="button"
                                                                name="Batal" value="Batal">
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Detail Pekerjaan End-->

                    <!-- cetak CV -->
                    <!-- Detail Pekerjaan Start -->
                    <!-- table card full -->
                    <div class="container-fluid">
                        <div class="page-body collapse" id="CetakCV">
                            <!-- Config. table start -->
                            <div class="card">
                                <div class="card-header card-body">
                                    <h5>Cetak CV</h5>
                                </div>
                                <div class="card-block">
                                    <!-- babeh -->
                                    <!-- tabel -->
                                    <div class="mb-3">
                                        <div class="card-content p-2" style="color: #516091;">
                                            <table class="table row-hover">
                                                <tbody>
                                                    <tr>
                                                        <td colspan="2"><input class="button btn btn-primary"
                                                                type="submit" name="Cetak" value="Cetak">


                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabel -->
                    </div>
                    <!-- Detail Pekerjaan End-->


        </main>
        <!-- footer start -->
        <?php include('konten/footer.php'); ?>
    </div>
</div>
<!-- JS -->
<?php include('konten/js.php'); ?>
</body>

</html>