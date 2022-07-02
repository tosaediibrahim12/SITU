<!DOCTYPE html>
<html lang="en">
<?php include('konten/konten.php'); ?>
<div class="pcoded-content">
    <div class="card-header fg-white" style="background-color: #404E67; color: #fff; ">
        <h3>Tambah Jadwal</h3>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Content Row -->
                <br />
                <div class="container register">
                    <div class="row">
                        <div class="col-md-12 register-right">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel"
                                    aria-labelledby="home-tab">
                                    <div class="row register-form">
                                        <div class="col-md">
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <legend>Berlaku Untuk Program </legend>
                                                    <div class="maxl">
                                                        <label class="radio inline">
                                                            <input type="checkbox" name="Program" value="" checked>
                                                            <span>KER-Kerjasama </span>
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>NON-Reguler Sore </span>
                                                        </label>
                                                        <label class="radio inline">
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>REG-Reguler Pagi </span>
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>TES-Program Tes</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md">
                                                <div class="form-group">
                                                    <legend>Berlaku Untuk Program Studi </legend>
                                                    <div class="maxl">
                                                        <label class="radio inline">
                                                            <input type="checkbox" name="Program" value="" checked>
                                                            <span>301 - Teknik Kimia </span>
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>302 - Teknologi Pertambangan </span>
                                                        </label>
                                                        <label class="radio inline">
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>303 - Teknik Sipil </span>
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>304 - Teknik Informatika</span>
                                                        </label>
                                                        <label class="radio inline">
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>306 - Teknik Lingkungan </span>
                                                            <input type="checkbox" name="Program" value="">
                                                            <span>307 - Perencanaan Wilayah dan Kota</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select">
                                                        <option>Senin</option>
                                                        <option>Selasa</option>
                                                        <option>Rabu</option>
                                                        <option>Kamis</option>
                                                        <option>Jumat</option>
                                                        <option>Sabtu</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Hari</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <label for="">Jam Kuliah</label>
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Dari</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Sampai</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <label for="">MataKuliah</label>
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Masukan Matakuliah</label>
                                                </div>
                                                <br />
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Cari Matakuliah</label>
                                                </div>
                                                <br />
                                                <div class="form-floating">
                                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                                </div>
                                            </div>

                                            <br />
                                            <div class="col-md">
                                                <label for="">Nama Kelas</label>
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Nama kelas</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select">
                                                        <option>Kuliah</option>
                                                        <option>Praktikum</option>
                                                        <option>Responsi</option>
                                                    </select>
                                                    <label for="floatingSelectGrid">Pilih Jenis Jadwal</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">SKS</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <select class="form-select">
                                                        <option>SB-204</option>
                                                        <option>SB-205</option>
                                                        <option>SB-206</option>
                                                        <option>SB-207</option>
                                                        <option>SB-209</option>
                                                        <option>UBT</option>
                                                    </select>
                                                    </select>
                                                    <label for="floatingSelectGrid">Pilih Ruangan</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Kapasitas/target</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <label for="">Dosen</label>
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Masukan Dosen</label>
                                                </div>
                                                <br />
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Cari Dosen</label>
                                                </div>
                                                <br />
                                                <div class="form-floating">
                                                    <a class="btn btn-primary" href="#" role="button">Link</a>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Rencana Tatap Muka</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" placeholder="65%"
                                                        id="floatingInputGrid" placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Minimal Kehadiran Mahasiswa</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <label for="">Gunakan finger : </label>
                                                <label class="radio inline">
                                                    <input type="checkbox" name="Program" value="">
                                                </label>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" placeholder="65%"
                                                        id="floatingInputGrid" placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Honor Mengajar</label>
                                                </div>
                                                <label for="">Apakah Harga Standar : </label>
                                                <label class="radio inline">
                                                    <input type="checkbox" name="Program" value="">
                                                </label>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="">
                                                    <label for="floatingInputGrid">Harga</label>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="col-md">
                                                <button type="button" class="btn btn-sm btn-primary">Simpan</button>
                                                <button type="button" class="btn btn-sm btn-warning">Riset</button>
                                                <button type="button" class="btn btn-sm btn-danger">Batal</button>
                                            </div>
                                            <br />
                                            <br />
                                            <br />
                                            <br />

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
        </main>
        <!-- footer start -->
    </div>
    <!-- JS -->
    <?php include('konten/js.php'); ?>
    </body>

</html>