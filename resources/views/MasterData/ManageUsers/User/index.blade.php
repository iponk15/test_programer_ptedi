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
                <a href="{{ route($route . '.index') }}" class="btn btn-sm btn-icon btn-light-info ajaxify mr-2" data-toggle="tooltip" data-theme="dark" title="Reload">
                    <i class="flaticon2-reload"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <form class="formSearch">
                            <div class="row align-items-center">
                                <div class="col-md-4 my-2 my-md-0">
                                    <div class="input-icon">
                                        <input type="text" class="form-control generalSearch" placeholder="Search..." name="generalSearch"/>
                                        <span>
                                            <i class="flaticon2-search-1 text-muted"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0 text-right">
                        <a href="{{ route($route . '.show') }}" class="btn btn-light-success btn-sm mr-3 ajaxify">
                            <i class="flaticon-user-add"></i>Tambah User
                        </a>
                    </div>
                </div>
            </div>
            <!--end::Search Form-->
            <!--begin: Selected Rows Group Action Form-->
            <div class="mt-10 mb-5 collapse" id="kt_datatable_group_action_form_2">
                <div class="d-flex align-items-center">
                    <div class="font-weight-bold text-danger mr-3">Selected
                    <span id="kt_datatable_selected_records_2">0</span> records :</div>
                    <div class="dropdown mr-2">
                        <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">Update status</button>
                        <div class="dropdown-menu dropdown-menu-sm">
                            <ul class="nav nav-hover flex-column">
                                <li class="nav-item">
                                    <a href="{{ route( $route . '.changeStatus', ['id' => 'NULL', 'status' => '1'] ) }}" class="nav-link updateStatus" data-value="1">
                                        <span class="nav-text">Active</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route( $route . '.changeStatus', ['id' => 'NULL', 'status' => '0'] ) }}" class="nav-link updateStatus" data-value="0">
                                        <span class="nav-text">Inactive</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route( $route . '.changeStatus', ['id' => 'NULL', 'status' => '99'] ) }}" class="nav-link updateStatus" data-value="99">
                                        <span class="nav-text">Soft Delete</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <a href="{{ route( $route . '.delete', [ 'id' => 'NULL' ] ) }}" class="btn btn-sm btn-danger mr-2 kt_datatable_delete_all" type="button" id="kt_datatable_delete_all_2">Delete All</a>
                    <!-- <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target="#kt_datatable_fetch_modal_2">Fetch Selected Records</button> -->
                </div>
            </div>
            <!--end: Selected Rows Group Action Form-->
            <!--begin: Datatable-->
            <div class="datatable datatable-bordered datatable-head-custom" id="ktTableUser"></div>
            <!--end: Datatable-->
        </div>
    </div>
    <!--begin::Modal-->
    <div class="modal fade" id="kt_datatable_fetch_modal_2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Selected Records</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="scroll" data-scroll="true" data-height="200">
                        <ul id="kt_datatable_fetch_display_2"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--end::Modal-->

    <a href="<?php echo route($route . '.index'); ?>" class="ajaxify reload"></a>

    <script>
        $(document).ready(function(){
            // start set ktable datatable
            var id   = '#ktTableUser';
            var urll   = '{{ route($route . ".ktable" ) }}';
            var column = [
                { field : 'no', title : 'No. ', textAlign : 'center', sortable : false, width : 30 },
                { field : 'bio_nama', title : 'Nama' },
                { field : 'bio_tempat_lahir', title : 'Tempat Lahir'},
                { field : 'bio_tgl_lahir', title : 'Tanggal Lahir'},
                { field : 'bio_posisi_lamar', title : 'Posisi Lamar', width : 170, textAlign : 'center' },
                { field : 'action', title : 'Action', textAlign : 'center', sortable : false },
            ];
            var cari = {
                generalSearch    : '.generalSearch',
                bio_posisi_lamar : '.bio_posisi_lamar'
            };

            global.init_ktable(id,urll,column,cari);
            // end set ktable datatable

            // start select2 get flag
            statusOption = {
                placeholder : 'Select Status',
                allowClear  : true,
            }

            global.init_select2('.status', statusOption);
            // end select2 get flag

            // start proses export file
            $('.exportFile').on('click', function(e){
                e.preventDefault();
                var tipe   = $(this).data('tipe');
                var option = {
                    route : $(this).attr('href'),
                    blkUi : '#body-content',
                    type  : 'ajax',
                    data  : $('.formSearch').serialize(),
                    file  : (tipe == 'pdf') ? '{{ asset("storage/users.pdf") }}' : '{{ asset("storage/users.xlsx") }}',
                    extn  : tipe
                };

                ajaxProses('post', option);
            });
            // start proses export file
        });

        function f_action(ele,eve,flag){
            eve.preventDefault();
            
            var option = {
                route : $(ele).attr('href'),
                blkUi : '#body-content',
                type  : 'swal',
                attr  : {
                    title: 'Anda yakin ?',
                    text: (flag == undefined) ? 'akan menghapus data ini.' : (flag == 1) ? "akan mengaktifkan kembali data ini." : (flag == 0) ? "akan me non aktifkan data ini. " : "akan menghapus sementara data ini",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Iya',
                    cancelButtonText: 'Tidak',
                    reverseButtons: true
                }
            };
            
            ajaxProses('post', option);
        }
    </script>
@endsection