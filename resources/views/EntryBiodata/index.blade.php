@extends('templates.content')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="{{ (!empty($cardIcon) ? $cardIcon : 'flaticon2-chat-1') }} text-info icon-xl"></i></span>
                <h3 class="card-label text-info">
                    {{ (!empty($cardTitle) ? $cardTitle : 'Card Title' ) }}
                    <small>{{ (!empty($cardSubTitle) ? $cardSubTitle : 'Card Sub Title' ) }}</small>
                    <!-- <span class="d-block text-muted pt-2 font-size-sm">row selection and group actions</span> -->
                </h3>
            </div>
            <div class="card-toolbar">
                <a href="{{ route($route . '.index') }}" class="btn btn-sm btn-icon btn-light-warning ajaxify mr-2" data-toggle="tooltip" data-theme="dark" title="Kembali">
                    <i class="flaticon2-left-arrow-1"></i>
                </a>
            </div>
        </div>
        <form class="form" id="entryFormTambah" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <div class="alert alert-custom alert-light-warning fade mb-5 d-none formAlert" role="alert">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text">A simple primary alert—check it out!</div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr class="firstTrParents">
                                <td colspan="4" class="text-center">Data diri pelamar </td>
                            </tr>
                        </thead>
                        <tbody class="inputTempParents">
                            <tr>
                                <td>1</td>
                                <td width="30%">Posisi yang dilamar</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_posisi_lamar" placeholder="Posisi yang dilamar" autocomplete="off"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Nama</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_nama" autocomplete="off" placeholder="nama"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>No. KTP</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="bio_ktp" autocomplete="off" placeholder="No. KTP"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-lg-6">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="bio_tempat_lahir" autocomplete="off" placeholder="Tempat"/>
                                                    </div>
                                                </div>
                                            <div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <div class="col-lg-12">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control bio_tgl_lahir" name="bio_tgl_lahir" autocomplete="off" placeholder="Tanggal Lahir"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="bio_jk">
                                        <option>Pilih jenis kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Agama</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_agama" autocomplete="off" placeholder="Agama"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Golongan Darah</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_gol_darah" autocomplete="off" placeholder="Golongan Darah"/>
                                            </div>
                                        <div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Status</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_status" autocomplete="off" placeholder="Status"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Alamat KTP</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <textarea name="bio_alamat_ktp" class="form-control" rows="3" placeholder="alamat ktp"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Alamat Tinggal</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <textarea name="bio_alamat_tinggal" class="form-control" rows="3" placeholder="alamat tinggal"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Email</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_email" autocomplete="off" placeholder="Email"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>No. Telp</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_telp" autocomplete="off" placeholder="No. telp"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Orang terdekat yang dapat dihubungi</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="bio_orng_kontak" autocomplete="off" placeholder="kontak"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Orang terdekat yang dapat dihubungi</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" width="20%">Jenjang Pendidikan Terakhir</th>
                                                    <th scope="col" class="text-center" width="20%">Nama Institusi Akademik</th>
                                                    <th scope="col" class="text-center" width="10%">Jurusan</th>
                                                    <th scope="col" class="text-center" width="10%">Tahun Lulus</th>
                                                    <th scope="col" class="text-center" width="10%">IPK</th>
                                                    <th scope="col" class="text-center" width="5%">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td><input type="text" class="form-control form-control-sm text-center"></td>
                                                    <td><input type="text" class="form-control form-control-sm text-center"></td>
                                                    <td></td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Riwayat Pelatihan</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" width="20%">Nama kursus / seminar</th>
                                                    <th scope="col" class="text-center" width="20%">Sertifikat (ada / tidak)</th>
                                                    <th scope="col" class="text-center" width="10%">Tahun</th>
                                                    <th scope="col" class="text-center" width="5%">#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <!-- <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td><input type="text" class="form-control form-control-sm"></td>
                                                    <td></td> -->
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Riwayat Pekerjaan</td>
                                <td>:</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-sm">
                                            <thead>
                                                <tr>
                                                    <th scope="col" class="text-center" width="20%">Nama Perushaan</th>
                                                    <th scope="col" class="text-center" width="20%">Posisi Terakhir</th>
                                                    <th scope="col" class="text-center" width="10%">Pendapatan Terakhir</th>
                                                    <th scope="col" class="text-center" width="10%">Tahun</th>
                                                    <th scope="col" class="text-center" width="5%">#</th>
                                                </tr>
                                            </thead>
                                            <tbody class="inputTempRiWork">
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Skils</td>
                                <td>:</td>
                                <td>
                                    <textarea class="form-control" name="bio_skill" placeholder="skils" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Bersedia ditempatkan diseluruh kantor perusahaan</td>
                                <td>:</td>
                                <td>
                                    <select class="form-control" name="bio_ditempatkan">
                                        <option>Pilih Option</option>
                                        <option value="1">Iya</option>
                                        <option value="0">Tidak</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Penghasilan yang diharapkan</td>
                                <td>:</td>
                                <td>
                                    <div class="form-group row">
                                        <div class="col-lg-12 col-md-9 col-sm-12">
                                            <div class="input-group">
                                                <input type="number" class="form-control" name="bio_penghasilan" autocomplete="off" placeholder="penghasilan"/>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class=" ml-lg-auto">
                        <button type="reset" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <a href="<?php echo route($route . '.index'); ?>" class="ajaxify reload"></a>

    <script>
        $(document).ready(function(){
            global.init_dtrp("1", ".bio_tgl_lahir");
            // start form validation submit
            var form   = document.getElementById('entryFormTambah');
            var urll   = "{{ route($route . '.store') }}";
            var fields = {
                
            };

            var params = [
                '_token',
                'bio_posisi_lamar',
                'bio_nama',
                'bio_ktp',
                'bio_tempat_lahir',
                'bio_tgl_lahir',
                'bio_jk',
                'bio_agama',
                'bio_gol_darah',
                'bio_status',
                'bio_alamat_ktp',
                'bio_alamat_tinggal',
                'bio_email',
                'bio_telp',
                'bio_orng_kontak',
                'bio_skill',
                'bio_ditempatkan',
                'bio_penghasilan'
            ];
            
            global.init_formVld(form, urll, fields, params);
            // end form validation submit
        });
    </script>
@endsection