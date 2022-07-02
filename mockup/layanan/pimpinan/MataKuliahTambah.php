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
                                    <td class="ul" colspan="2"><b>Tambah Matakuliah</b></td>
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
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value="13">1993 - Kurikulum 1993</option>
                                                            <option value="7">1997 - Kurikulum 1997</option>
                                                            <option value="4">2003 - Kurikulum 2003</option>
                                                            <option value="16" selected="">2009 - Kurikulum 2009
                                                            </option>
                                                            <option value="20">2016 - Kurikulum 2016</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Kurikulum</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">Kode Matakuliah</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">Nama Matakuliah</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">Singkatan</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md"></div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> Ada
                                                    Responsi/Lab?</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Mata Kuliah
                                                    praktikum?</label>
                                            </div>
                                            <br />
                                            <div class="col-md"></div>
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="1">A</option>
                                                            <option value="2">B</option>
                                                            <option value="3">C</option>
                                                            <option value="4" selected="">D</option>
                                                            <option value="5">E</option>
                                                            <option value="6">T</option>
                                                            <option value="7">K</option>
                                                            <option value="8">-</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Nilai Minimal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="1">A - MPK-PENGEMBANGAN KEPRIBADIAN</option>
                                                            <option value="2" selected="">B - MKK-KEILMUAN DAN
                                                                KETRAMPILAN
                                                            </option>
                                                            <option value="3">C - MKB-KEAHLIAN BERKARYA</option>
                                                            <option value="4">D - MPB-PERILAKU BERKARYA</option>
                                                            <option value="5">E - MBB-BERKEHIDUPAN BERMASYARAKAT
                                                            </option>
                                                            <option value="6">F - MKU/MKDU</option>
                                                            <option value="7">G - MKDK</option>
                                                            <option value="8">H - MKK</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Jenis</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="5" selected="">A - WAJIB</option>
                                                            <option value="4">B - PILIHAN</option>
                                                            <option value="3">C - WAJIB PEMINATAN</option>
                                                            <option value="2">D - PILIHAN PEMINATAN</option>
                                                            <option value="171">K - KERJA PRAKTEK</option>
                                                            <option value="1">S - TA/SKRIPSI/TESIS/DISERTASI</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Pilihan Wajib?</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="2" selected="">A - Kurikulum Inti</option>
                                                            <option value="3">B - Kurikulum Institusi</option>
                                                            <option value="1">C - Aptikomp</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Pilihan Kurikulum</label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1"
                                                    value="option1">
                                                <label class="form-check-label" for="inlineCheckbox1"> MataKuliah
                                                    Wajib?</label>
                                            </div>
                                            <br />
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="6">INTI - Informatika Teori</option>
                                                            <option value="4">JAR - Jaringan Komputer</option>
                                                            <option value="7">MM - Multimedia</option>
                                                            <option value="15">RPL - Rekayasa Perangkat Lunak</option>
                                                            <option value="14">SI - Sistem Informasi</option>
                                                            <option value="5">SI-RPL - Sistem Informasi dan Rekayasa
                                                                Perangkat Lunak</option>
                                                            <option value="16">TI - Teknologi Informasi</option>
                                                            <option value="8">UM - Umum</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Konsentrasi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">Sesi</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">SKS</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">SKS Tatap Muka</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">SKS Praktikum</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">SKS Lapangan</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">SKS Minimal</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <input type="email" class="form-control" id="floatingInput"
                                                            placeholder="name@example.com" value="">
                                                        <label for="floatingInput">IPKMin</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="row g-2">
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                        <select class="form-select" aria-label="Tahun Akademik">
                                                            <option value=""></option>
                                                            <option value="IF013">AAN ALBONE,ST.,M.TI., </option>
                                                            <option value="IF306">ACEP HENDRA, ST., </option>
                                                            <option value="IF237">ADE ENGKUS, S.Pd., M.Pd, S.Pd., M.Pd
                                                            </option>
                                                            <option value="ALIF05">ADE PRANAYA, </option>
                                                            <option value="IF222">ADE SUKENDAR,ST.,MT , ST.,MT.</option>
                                                            <option value="ALIF12">ADHY WIRANTO SUDJANA, </option>
                                                            <option value="ALIF31">ADITYA FATAHA DWIJAYA, </option>
                                                            <option value="uv437">AGI DAHTIAR, S.PD., M.PD., </option>
                                                            <option value="IF318">AGUNG ALDHIYAT, </option>
                                                            <option value="IF393">AHMAD ALMAARIF, S.KOM, MT., </option>
                                                            <option value="ALIF10">ALDI SAPUTRA WAHYUDI, </option>
                                                            <option value="ALIF08">ALIFFIAN KHANSA MAGHFIROH, </option>
                                                            <option value="ALIF15">ANANDA ANDIKA BAGASKARA PUTRA,
                                                            </option>
                                                            <option value="IF224">ANGGORO ARI NURCAHYO. ST.,M.KOM, ST.,
                                                                M.KOM</option>
                                                            <option value="ALIF36">ANISA AL FAUZIAH, </option>
                                                            <option value="ALIF30">ARDHIA PRAMESTI, </option>
                                                            <option value="IF234">ARIEF JULIANTO, ST., MT., </option>
                                                            <option value="IF319">ARIEF ZULIANTO, ST., MT., </option>
                                                            <option value="ALIF22">ARIF TURMUJI, </option>
                                                            <option value="IF309">ASEP SOMANTRI ST.,MT, ST., MT.
                                                            </option>
                                                            <option value="IF9992">Asisten Lab IF, </option>
                                                            <option value="ALIF25">AVIP SYAIFULLOH, </option>
                                                            <option value="ALIF21">BAKHTIAR, </option>
                                                            <option value="ALIF03">BERTA ERWIN SLAM, </option>
                                                            <option value="IF157">CACA EMILE SUPRIANA, S.SI., MT.,
                                                            </option>
                                                            <option value="ALIF18">DAE GI HONG, </option>
                                                            <option value="ALIF13">DICKY ARDIANTO, </option>
                                                            <option value="IF162">DICKY PRIMA SATYA, ST., MT., </option>
                                                            <option value="IF223">DODDY FERDIANSYAH, ST., MT., </option>
                                                            <option value="IF014">DR. AYI PURBASARI, ST., MT., </option>
                                                            <option value="IF110">DR. DRS. NONO SUWARNO, M.PD.,
                                                            </option>
                                                            <option value="IF001">DR. IR. HUSNI SASTRAMIHARDJA., MT.,
                                                            </option>
                                                            <option value="IF007">DR. IR. LEONY LIDYA, MT., Dr., Ir.,
                                                                M.T.
                                                            </option>
                                                            <option value="UV113">DR. MOCH. ZAKARIA, M.SI., DR, DRS,
                                                                M.SI.
                                                            </option>
                                                            <option value="IF114">DR. RIRIN DWI AGUSTIN, ST., MT.,
                                                            </option>
                                                            <option value="UV440">DR. SUPIAN, S.Pd., M.Pd., </option>
                                                            <option value="UV439">DR. YARDIMAN, </option>
                                                            <option value="UV431">DRS. ACHDIJAT SULAEMAN, MSI.,
                                                            </option>
                                                            <option value="UV427">DRS. AMIN, M.SI., </option>
                                                            <option value="IF310">DRS. ANWAR GHOZIE, </option>
                                                            <option value="UV436">DRS. APIP RUHAMDANI, M.PD., </option>
                                                            <option value="UV123">DRS. M. KHOLIL, M.PD., </option>
                                                            <option value="UV429">DRS. MAMAN, M.AG., </option>
                                                            <option value="IF160">DRS. SOFYAN ANSORI, M.HUM., </option>
                                                            <option value="UV426">DRS. SYAHRIL, </option>
                                                            <option value="UV116">DRS. YEYE SUKMAYA, </option>
                                                            <option value="ALIF14">DWIKI DARMAWAN, </option>
                                                            <option value="IF188">EDWAR J. RAMDON, ST., MT., </option>
                                                            <option value="ALIF04">EFRAN ADIYATMA, </option>
                                                            <option value="ALIF19">EGY IMALDI SULISTYO, </option>
                                                            <option value="IF198">ERIK, ST.,M.Kom, </option>
                                                            <option value="ALIF24">FADHLANRASHIF IBRAHIM SUPRIANA,
                                                            </option>
                                                            <option value="IF227">FAJAR DARMAWAN, ST., M.KOM, </option>
                                                            <option value="IF233">FERRY MULYANTO, ST., M.KOM, </option>
                                                            <option value="EP214">GINA GUSLIANA S.Pd., M.Pd, S.Pd., M.Pd
                                                            </option>
                                                            <option value="IF156">H.RAMLAN,S.COM.,MM.,QIA, </option>
                                                            <option value="ALIF26">HADI SUTARMA, </option>
                                                            <option value="ALIF06">HAZAR HAMZAH, </option>
                                                            <option value="ALIF09">HELMI ILHAM FAUZI, </option>
                                                            <option value="IF203">HENDRA KOMARA, S.T., M.T., </option>
                                                            <option value="IF161">HUSNI THAMRIN, SS., M.Pd., </option>
                                                            <option value="ALIF27">ICHBAL HADI NASUTION, </option>
                                                            <option value="IF129">IMAM SAPUAN, S.SI., </option>
                                                            <option value="MPM37">IN IN SUPIANTI, S.PD.,M.PD, ST., MT.
                                                            </option>
                                                            <option value="IF394">INDRIANI, ST., M.ENG., </option>
                                                            <option value="IF003">IR. AGUS HEXAGRAHA, </option>
                                                            <option value="IF150">IR. AGUS NURSIKUWAGUS, MT., MM.,
                                                            </option>
                                                            <option value="IF008">IR. ARIEF HENDRAWAN, MT., </option>
                                                            <option value="IF182">IR. COMALUDDIN TARSIM, M.SI.,
                                                            </option>
                                                            <option value="IF229">IR. ITA PUSPITANINGRUM, MT., </option>
                                                            <option value="IF145">IR. IWAN KURNIAWAN, MT., </option>
                                                            <option value="EI012">IR. R. DJUNAEDY SAKAM, MT., </option>
                                                            <option value="IF324">IRMA WIBIYANTI, S.KOM., MM., </option>
                                                            <option value="IF231">IVAN NUGRAHA, ST., MT., </option>
                                                            <option value="ALIF35">KASYFI ADHADINI, </option>
                                                            <option value="UV888">KOORD. LAB B. INGGRIS, </option>
                                                            <option value="IF888">KOORLAB IF, </option>
                                                            <option value="IF304">MACHMOUD ALI, ST., MM., </option>
                                                            <option value="IF133">MELLIA LIYANTHY, ST., MT., </option>
                                                            <option value="IF396">MIFTAHUL FADLI MUTTAQIN, S.T., M.T
                                                            </option>
                                                            <option value="IF397">MOCH. ILHAM ANUGRAH, ST., M.ENG.,
                                                            </option>
                                                            <option value="ALIF07">MOHAMAD RIZKY SAPUTRA, </option>
                                                            <option value="ALIF32">MUHAMAD ASWIN MIFTAHUDDIN, </option>
                                                            <option value="ALIF01">MUHAMAD RIDWAN FAUZAN, ST</option>
                                                            <option value="IF312">MUHAMMAD AL MAKKY, S.KOM., MT., S.KOM,
                                                                MT.
                                                            </option>
                                                            <option value="IF209">MUHAMMAD TIRTA MULIA, ST., MT.,
                                                            </option>
                                                            <option value="ALIF16">MUHAMMAD WALID NUR FADHIL, </option>
                                                            <option value="ALIF28">NADIA RUTBAH HARDIMURA, </option>
                                                            <option value="IF311">NANA SUJANA, ST., M.Kom, </option>
                                                            <option value="EM236">OKKY PRIAMBODO, ST., MT., </option>
                                                            <option value="ALIF11">PRAYOGA ILDHAN, </option>
                                                            <option value="IF205">R. SANDHIKA GALIH AMALGA, ST., MT.,
                                                            </option>
                                                            <option value="UV434">R. YENI DEWI CAHYANI, S.S., M.PD.,
                                                            </option>
                                                            <option value="ALIF29">RD.RIZAL NUGRAHA, ST</option>
                                                            <option value="IF391">REDI YAMANTO, SIP., M.PD., SIP, M.PD.
                                                            </option>
                                                            <option value="UV432">RENDY TRIANDY, S.PD., M.PD., </option>
                                                            <option value="ALIF33">REYHAN RASYID ZIDDAN, </option>
                                                            <option value="ALIF17">RIFQI NAUVAL TAUFIQURROHMAN,
                                                            </option>
                                                            <option value="IF196">RITA RIJAYANTI, ST., MT., ST., MT.
                                                            </option>
                                                            <option value="ALIF02">RIZAL NUR AGUSTIAN, </option>
                                                            <option value="ALIF23">RIZKY RAMADHAN, </option>
                                                            <option value="IF320">RYAN ADHITYA NUGRAHA, ST., MT.,
                                                            </option>
                                                            <option value="IF121">SALI ALAS MAJAPAHIT, S.ST., M.KOM.,
                                                            </option>
                                                            <option value="IF321">SAMSUN HIDAYAT, ST., MT., ST, MT.
                                                            </option>
                                                            <option value="IF132">SANDRA ISLAMA PUTRA, S.Si., M.Kom.,
                                                                S.Si.
                                                            </option>
                                                            <option value="IF158">SHANTI HERLIANI, ST</option>
                                                            <option value="IF395">SIROJ NUR ULUM, ST. MT, </option>
                                                            <option value="IF236">SUBELO WIYONO, S.H., M.Pd., </option>
                                                            <option value="ALIF34">TAUFIK NUR SIDIK, </option>
                                                            <option value="IF999">TEAM JURUSAN IF, </option>
                                                            <option value="T124">Test 1, </option>
                                                            <option value="IF323">TIA DWI SETIANI, S.SI., M.SI., S.SI.,
                                                                M.SI
                                                            </option>
                                                            <option value="APIF00">TIM ASISTEN IF, </option>
                                                            <option value="UV999">TIM DOSEN M K D U, </option>
                                                            <option value="IF147">TUTI RASTUTI, S.H.,M.H., ST., M.SI.
                                                            </option>
                                                            <option value="ALIF20">WALADI WIDARNO, </option>
                                                            <option value="IF305">WANDA GUSDYA PURNAMA ST., MT, ST, MT.
                                                            </option>
                                                            <option value="IF184">YENNI FATMAN, S.T, M.T</option>
                                                            <option value="IF163">YOKI MUCHSAM, SSI, </option>
                                                            <option value="IF392">ZAINI JAMATHSANI, ST.MT, </option>
                                                        </select>
                                                        <label for="floatingSelectGrid">Penanggung Jawab</label>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-floating">
                                                    </div>
                                                </div>
                                            </div>
                                            <br />
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Keterangan</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2"
                                                    value="option2">
                                                <label class="form-check-label" for="inlineCheckbox2">Tidak
                                                    Aktif?</label>
                                            </div>

                                            <tr>
                                                <td colspan="2"><input type="submit" name="Simpan" value="Simpan"
                                                        class="button">

                                                    <input type="reset" name="Reset" value="Reset" class="button">

                                                    <input type="button" name="Batal" value="Batal" class="button"
                                                        onclick="location='?mnux=master.matakuliah&amp;mk=mk&amp;PHPSESSID=5dgegnl1086siqga7a0muu8g13'">

                                                    <input type="button" name="Prasyarat" value="Edit Prasyarat"
                                                        onclick="location='?mnux=master.matakuliah&amp;mk=mk&amp;sub=PraEdt&amp;mkid=1849'"
                                                        class="button">
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