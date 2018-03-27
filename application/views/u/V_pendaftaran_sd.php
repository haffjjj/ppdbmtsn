<div class="title-main">
                <h3>Pendaftaran dari SD</h3>
            </div>

            <form id="f-pendaftaran" class="form-pendaftaran" action="<?php echo base_url() ?>pendaftaran/insert" method="POST" enctype="multipart/form-data">
                <input type="hidden" value="sd" name="dari_sekolah">
                <!-- ##### PESERTA didiK ##### -->

                <div class="title-pendaftaran">
                    <h3>Data calon peserta didik</h3>
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Lengkap</label>
                    <input required type="text" name="siswa_namalengkap" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                </div>
                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <br>
                    <input required type="radio" value="laki-laki" name="siswa_kelamin" class="" id="" placeholder=""> Laki-Laki
                    <input required type="radio" value="perempuan" name="siswa_kelamin" id="" placeholder=""> Perempuan
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input required type="text" name="siswa_tempatlahir" class="form-control" id="" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input required type="text" name="siswa_tanggallahir" class="form-control datepicker" id="" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Anak Ke</label>
                    <input required type="number" name="siswa_anakke" class="form-control" id="" placeholder="Anak ke">
                </div>
                <div class="form-group">
                    <label for="">Hobi</label>
                    <input required type="text" name="siswa_hobi" class="form-control" id="" placeholder="Hobby">
                </div>
                <div class="form-group">
                    <label for="">Jarak Rumah (KM)</label>
                    <input required type="number" name="siswa_jarakrumah" class="form-control" id="" placeholder="Jarak Rumah">
                </div>
                <div class="form-group">
                    <label for="">Alamat Rumah</label>
                    <input required type="text" name="siswa_alamat_jalan" class="form-control" id="" placeholder="Jalan">
                    <input required type="text" name="siswa_alamat_desa" class="form-control" id="" placeholder="Desa">
                    <input required type="text" name="siswa_alamat_kecamatan" class="form-control" id="" placeholder="Kecamatan">
                    <input required type="text" name="siswa_alamat_kabupaten" class="form-control" id="" placeholder="Kabupaten">
                    <input required type="number" name="siswa_alamat_kodepos" class="form-control" id="" placeholder="Kode Pos">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input required type="text" name="siswa_email" class="form-control" id="" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="">No. Induk Kependudukan</label>
                    <input required type="number" name="siswa_nik" class="form-control" id="" placeholder="No. Induk Kependudukan">
                </div>

                <div class="form-group">
                    <label for="">Foto Resmi (< 500 KB gif/jpg/png) *format NAMA_SD</label>
                    <input required type="file" name="siswa_foto" class="form-control" id="" placeholder="">
                </div>
                

                <!-- ##### Orang Tua Ayah ##### -->
                <div class="title-pendaftaran">
                    <h3>Data Orang Tua (Ayah)</h3>
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <label for="">Nama Ayah</label>
                    <input required type="text" name="ayah_namalengkap" class="form-control" id="" placeholder="Nama Ayah">
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input required type="text" name="ayah_tempatlahir" class="form-control" id="" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input required type="text" name="ayah_tanggallahir" class="form-control datepicker" id="" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Pendidikan Terakhir</label>
                    <input required type="text" name="ayah_pendidikanterakhir" class="form-control" id="" placeholder="Pendidikan Terakhir">
                </div>

                <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input required type="text" name="ayah_pekerjaan" class="form-control" id="" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                    <label for="">Penghasilan Perbulan</label>
                    <select name="ayah_penghasilan" class="form-control" id="">
                        <option value="">-- Penghasilan --</option>
                        <option value="< 500 Rb>">
                            < 500 Rb>
                        </option>
                        <option value="500 rb. - 1 jt">500 rb. - 1 jt</option>
                        <option value="1 - 2 jt">1 - 2 jt</option>
                        <option value="2 - 3 jt">2 - 3 jt</option>
                        <option value="3 - 4 jt">3 - 4 jt</option>
                        <option value="4 - 5 jt">4 - 5 jt</option>
                        <option value="> 5 jt **">> 5 jt **</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No. Telephone/HP</label>
                    <input required type="number" name="ayah_telephone" class="form-control" id="" placeholder="No. Telephone/HP">
                </div>
                <div class="form-group">
                    <label for="">No. Induk Kependudukan</label>
                    <input required type="number" name="ayah_nik" class="form-control" id="" placeholder="No. Induk Kependudukan">
                </div>


                <!-- ##### Orang Tua IBU ##### -->
                <div class="title-pendaftaran">
                    <h3>Data Orang Tua (Ibu)</h3>
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <label for="">Nama Ibu</label>
                    <input required type="text" name="ibu_namalengkap" class="form-control" id="" placeholder="Nama Ibu">
                </div>
                <div class="form-group">
                    <label for="">Tempat Lahir</label>
                    <input required type="text" name="ibu_tempatlahir" class="form-control" id="" placeholder="Tempat Lahir">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label>
                    <input required type="text" name="ibu_tanggallahir" class="form-control datepicker" id="" placeholder="Tanggal Lahir">
                </div>
                <div class="form-group">
                    <label for="">Pendidikan Terakhir</label>
                    <input required type="text" name="ibu_pendidikanterakhir" class="form-control" id="" placeholder="Pendidikan Terakhir">
                </div>

                <div class="form-group">
                    <label for="">Pekerjaan</label>
                    <input required type="text" name="ibu_pekerjaan" class="form-control" id="" placeholder="Pekerjaan">
                </div>
                <div class="form-group">
                    <label for="">Penghasilan Perbulan</label>
                    <select name="ibu_penghasilan" class="form-control" id="">
                        <option value="">-- Penghasilan --</option>
                        <option value="< 500 Rb>">
                            < 500 Rb>
                        </option>
                        <option value="500 rb. - 1 jt">500 rb. - 1 jt</option>
                        <option value="1 - 2 jt">1 - 2 jt</option>
                        <option value="2 - 3 jt">2 - 3 jt</option>
                        <option value="3 - 4 jt">3 - 4 jt</option>
                        <option value="4 - 5 jt">4 - 5 jt</option>
                        <option value="> 5 jt **">> 5 jt **</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">No. Telephone/HP</label>
                    <input required type="number" name="ibu_telephone" class="form-control" id="" placeholder="No. Telephone/HP">
                </div>
                <div class="form-group">
                    <label for="">No. Induk Kependudukan</label>
                    <input required type="number" name="ibu_nik" class="form-control" id="" placeholder="No. Induk Kependudukan">
                </div>


                <!-- ##### Keluarga ##### -->
                <div class="title-pendaftaran">
                    <h3>Data Keluarga</h3>
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <label for="">No. Kartu Keluarga</label>
                    <input required type="number" name="keluarga_nik" class="form-control" id="" placeholder="No. Kartu Keluarga">
                </div>
                <div class="form-group">
                    <label for="">No. Kartu KSP (Keluarga Pra Sejahtera)</label>
                    <input required type="number" name="keluarga_ksp" class="form-control" id="" placeholder="No. Kartu KSP (Keluarga Pra Sejahtera)">
                </div>
                <div class="form-group">
                    <label for="">No. Induk PKH (Program Keluarga Harapan)</label>
                    <input required type="number" name="keluarga_pkh" class="form-control" id="" placeholder="No. Induk PKH (Program Keluarga Harapan)">
                </div>


                <!-- ##### Latar Belakang Pendidikan ##### -->
                <div class="title-pendaftaran">
                    <h3>Latar Belakang Pendidikan</h3>
                    <div class="line"></div>
                </div>

                <div class="form-group">
                    <label for="">Asal SD</label>
                    <input required type="text" name="lbp_sklh_nama" class="form-control" id="" placeholder="Nama SD">
                    <input required type="text" name="lbp_sklh_desa" class="form-control" id="" placeholder="Desa">
                    <input required type="text" name="lbp_sklh_kecamatan" class="form-control" id="" placeholder="Kecamatan">
                    <input required type="text" name="lbp_sklh_kabupaten" class="form-control" id="" placeholder="Kabupaten">
                    <input required type="number" name="lbp_sklh_kodepos" class="form-control" id="" placeholder="Kode POS">
                </div>
                <div class="form-group">
                    <label for="">Tahun LULUS</label>
                    <input required type="number" name="lbp_sklh_tahunlulus" class="form-control" id="" placeholder="Tahun LULUS">
                </div>
                <div class="form-group">
                    <label for="">Nomor Induk Siswa Nasional</label>
                    <input required type="number" name="lbp_sklh_nisn" class="form-control" id="" placeholder="Nomor Induk Siswa Nasional">
                </div>
                <div class="form-group">
                    <label for="">Nomor Peserta UJIAN SD</label>
                    <input required type="number" name="lbp_sklh_npusklh" class="form-control" id="" placeholder="Nomor Peserta UJIAN SD">
                </div>


                <!-- ##### Nilai Raport ##### -->
                <div class="title-pendaftaran">
                    <h3>Nilai Raport</h3>
                    <div class="line"></div>
                </div>

                <table class="table table-striped table-bordered" style="margin-bottom:10px">
                    <thead align="center">
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2" style="width:220px">Perolehan Nilai Untuk</th>
                            <th colspan="6" style="width:120px">KELAS V</th>
                            <th colspan="3">KELAS VI</th>
                        </tr>
                        <tr>
                            <th colspan="3">Semester 1</th>
                            <th colspan="3">Semester 2</th>
                            <th colspan="3">Semester 1</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>Bahasa Indonesia</td>
                            <td colspan="3">
                                <input required type="number" name="raport_bi_1" class="form-control" id="" placeholder="">
                            </td>
                            <td colspan="3">
                                <input required type="number" name="raport_bi_2" class="form-control" id="" placeholder="">
                            </td>
                            <td colspan="3">
                                <input required type="number" name="raport_bi_3" class="form-control" id="" placeholder="">
                            </td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>IPA</td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap IPA_semester1_kelasV">
                                    <input required type="number" name="raport_ipa_1" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap IPA_semester2_kelasV">
                                    <input required type="number" name="raport_ipa_2" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap IPA_semester1_kelas_VI">
                                    <input required type="number" name="raport_ipa_3" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Matematika</td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap MTK_semester1_kelasV">
                                    <input required type="number" name="raport_mtk_1" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap MTK_semester2_kelasV">
                                    <input required type="number" name="raport_mtk_2" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap MTK_semester1_kelas_VI">
                                    <input required type="number" name="raport_mtk_3" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td>PAI SD</td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap PAI_SD_semester1_kelasV">
                                    <input required type="number" name="raport_pai_1" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap PAI_SD_semester2_kelasV">
                                    <input required type="number" name="raport_pai_2" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="3">
                                <span class="wpcf7-form-control-wrap PAI_SD_semester1_kelas_VI">
                                    <input required type="number" name="raport_pai_3" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>


                <!-- ##### Prestasi Akademi/Non Akademik ##### -->
                <div class="title-pendaftaran">
                    <h3>Prestasi Akademik/ Non Akademik</h3>
                    <div class="line"></div>
                </div>

                <table class="table table-striped table-bordered" style="margin-bottom:10px">
                    <thead align="center">
                        <tr>
                            <th rowspan="2">#</th>
                            <th rowspan="2">PRESTASI</th>
                            <th colspan="6" rowspan="2" style="width:1000px;">JENIS LOMBA</th>
                            <th colspan="6">PERINGKAT – TINGKAT</th>
                        </tr>
                        <tr>
                            <th colspan="1" style="width:100px;">Kec.</th>
                            <th colspan="1" style="width:100px;">Kab.</th>
                            <th colspan="1" style="width:100px;">Provinsi</th>
                            <th colspan="1" style="width:100px;">Nasional</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>NONAKADEMIK</td>
                            <td colspan="6">
                                <span class="wpcf7-form-control-wrap nonAKA_1">
                                    <input required type="text" name="prestasi_nonakademik_jenis_1" class="form-control" id="" placeholder="">
                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA_2">
                                    <input required type="text" name="prestasi_nonakademik_jenis_2" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_kec">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_kec_1" class="form-control" id="" placeholder="">
                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_kec">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_kec_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_kab">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_kab_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_kab">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_kab_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_prov">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_prov_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_prov">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_prov_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_nasional">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_nasi_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_nasional">
                                    <input required type="number" name="prestasi_nonakademik_peringkat_nasi_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>AKADEMIK</td>
                            <td colspan="6">
                                <span class="wpcf7-form-control-wrap nonAKA_1">
                                    <input required type="text" name="prestasi_akademik_jenis_1" class="form-control" id="" placeholder="">
                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA_2">
                                    <input required type="text" name="prestasi_akademik_jenis_2" class="form-control" id="" placeholder="">
                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_kec">
                                    <input required type="number" name="prestasi_akademik_peringkat_kec_1" class="form-control" id="" placeholder="">
                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_kec">
                                    <input required type="number" name="prestasi_akademik_peringkat_kec_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_kab">
                                    <input required type="number" name="prestasi_akademik_peringkat_kab_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_kab">
                                    <input required type="number" name="prestasi_akademik_peringkat_kab_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_prov">
                                    <input required type="number" name="prestasi_akademik_peringkat_prov_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_prov">
                                    <input required type="number" name="prestasi_akademik_peringkat_prov_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                            <td colspan="1">
                                <span class="wpcf7-form-control-wrap nonAKA1_nasional">
                                    <input required type="number" name="prestasi_akademik_peringkat_nasi_1" class="form-control" id="" placeholder="">

                                </span>
                                <br>
                                <span class="wpcf7-form-control-wrap nonAKA2_nasional">
                                    <input required type="number" name="prestasi_akademik_peringkat_nasi_2" class="form-control" id="" placeholder="">

                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>Hafal 1 Jus Al-Quran</td>
                            <td colspan="10">
                                <select name="prestasi_hafaljus" class="form-control" aria-required="true" aria-invalid="false">
                                    <option value="--- KETERANGAN ---">--- KETERANGAN ---</option>
                                    <option value="iya">IYA</option>
                                    <option value="tidak">TIDAK</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button onclick="return confirm('Apakah data sudah sudah benar?');" type="submit" name="submit" value="submit" class="btn btn-primary">Daftar</button>
            </form>