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
                <a href="{{ route($route . '.edit', ['id' => $id]) }}" class="btn btn-sm btn-icon btn-light-info ajaxify mr-2" data-toggle="tooltip" data-theme="dark" title="Reload">
                    <i class="flaticon2-reload"></i>
                </a>
            </div>
        </div>
        <form class="form" id="agamaFormEdit" method="POST" data-cofirm="1">
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
                <div class="form-group row">
                    <label class="col-form-label col-lg-3 col-sm-12 text-right">Nama <span class="text-danger"> * </span></label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" name="agama_nama" placeholder="Masukan sekolah / universitas ..." autocomplete="off"/ value="{{ $records->agama_nama }}">
                        </div>
                        <span class="form-text text-muted"></span>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-form-label text-right col-lg-3 col-sm-12">Deskripsi <span class="text-danger"> * </span></label>
                    <div class="col-lg-4 col-md-9 col-sm-12">
                        <div class="input-group">
                            <input type="text" class="form-control" name="agama_deskripsi" placeholder="Masukan jenjang ..." autocomplete="off" value="{{ $records->agama_deskripsi }}"/>
                        </div>
                        <span class="form-text text-muted"></span>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-lg-7 ml-lg-auto">
                        <button type="reset" class="btn btn-secondary">Batal</button>
                        <button type="submit" class="btn btn-success mr-2">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <a href="<?php echo route($route . '.edit', ['id' => $id]); ?>" class="ajaxify reload"></a>

    <script>
        $(document).ready(function(){
            // start form validation submit
            var form   = document.getElementById('agamaFormEdit');
            var urll   = "{{ route($route . '.update', ['id' => $id]) }}";
            var fields = {
                agama_nama      : { validators : { notEmpty : { message : 'Nama tidak boleh kosong' } } },
                agama_deskripsi : { validators : { notEmpty : { message : 'De tidak boleh kosong' } } },
            };

            var params = ['_token','agama_nama','agama_deskripsi'];
            
            global.init_formVld(form, urll, fields, params);
            // end form validation submit
        });
    </script>
@endsection