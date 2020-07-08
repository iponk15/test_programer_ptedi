@extends('templates.content')
@section('content')
    <div class="card card-custom">
        <div class="card-body p-0">
            <!--begin::Wizard-->
            <div class="wizard wizard-1" id="kt_wizard_datadiri" data-wizard-state="step-first" data-wizard-clickable="false">
                <!--begin::Wizard Nav-->
                <div class="wizard-nav border-bottom">
                    <div class="wizard-steps p-8 p-lg-10">
                        <!--begin::Wizard Step 1 Nav-->
                        <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                            <div class="wizard-label">
                                <i class="wizard-icon flaticon-customer"></i>
                                <h3 class="wizard-title">Personal</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Wizard Step 1 Nav-->
                        <!--begin::Wizard Step 2 Nav-->
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-label">
                                <i class="wizard-icon flaticon-network"></i>
                                <h3 class="wizard-title">Family</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Wizard Step 2 Nav-->
                        <!--begin::Wizard Step 3 Nav-->
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-label">
                                <i class="wizard-icon flaticon-presentation"></i>
                                <h3 class="wizard-title">Parent's Family</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Wizard Step 3 Nav-->
                        <!--begin::Wizard Step 5 Nav-->
                        <div class="wizard-step" data-wizard-type="step">
                            <div class="wizard-label">
                                <i class="wizard-icon flaticon-exclamation"></i>
                                <h3 class="wizard-title">Review and Submit</h3>
                            </div>
                            <span class="svg-icon svg-icon-xl wizard-arrow last">
                                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                        <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>
                        </div>
                        <!--end::Wizard Step 5 Nav-->
                    </div>
                </div>
                <!--end::Wizard Nav-->
                <!--begin::Wizard Body-->
                <div class="row justify-content-center my-10 px-8 my-lg-15 px-lg-10">
                    <div class="col-xl-12 col-xxl-9">
                        <!--begin::Wizard Form-->
                        <form class="form" id="kt_form_datadiri">
                            <!--begin::Wizard Step 1-->
                            <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                <h3 class="mb-10 font-weight-bold text-dark">Setup Your Personal Info</h3>
                                <!--begin::Input-->
                                <div class="form-group">
                                    <label>NIK <span class="text-danger"> * </span> </label>
                                    <input type="text" class="form-control form-control-solid form-control-lg" name="nik" placeholder="Nik ... " value="aa" />
                                    <span class="form-text text-muted"></span>
                                </div>
                                <!--end::Input-->
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>First Name <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="first_name" placeholder="First name ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Last Name <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="last_name" placeholder="Last name ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Place Birth <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="place_birth" placeholder="Place birth ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Date Birth <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg date_birth" name="date_birth" placeholder="Date birth ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                    <div class="col-xl-4">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Gender <span class="text-danger"> * </span></label>
                                            <select class="form-control form-control-solid form-control-lg" name="gender">
                                                <option value="">Select Gender</option>
                                                <option value="M">Male</option>
                                                <option value="F">Female</option>
                                            </select>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Mobile Phone <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="mobile_phone" placeholder="Mobile phone ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Email <span class="text-danger"> * </span></label>
                                            <input type="text" class="form-control form-control-solid form-control-lg" name="email" placeholder="Email ... " />
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <!--begin::Input-->
                                        <div class="form-group">
                                            <label>Nationality <span class="text-danger"> * </span></label>
                                            <select class="form-control form-control-solid form-control-lg sltNationality" name="nationality">
                                                <option></option>
                                            </select>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <div class="col-xl-6">
                                        <!--begin::Select-->
                                        <div class="form-group">
                                            <label>Religion <span class="text-danger"> * </span></label>
                                            <select class="form-control form-control-solid form-control-lg sltReligion" name="religion">
                                                <option></option>
                                            </select>
                                            <span class="form-text text-muted"></span>
                                        </div>
                                        <!--end::Select-->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address <span class="text-danger"> * </span></label>
                                    <textarea name="address" class="form-control form-control-solid form-control-lg" rows="3" placeholder="Address ..."></textarea>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <!--end::Wizard Step 1-->
                            <!--begin::Wizard Step 2-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-10 font-weight-bold text-dark">Enter your family information</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" width="15%">Relation</th>
                                                <th scope="col" class="text-center">Name</th>
                                                <th scope="col" class="text-center">Gender</th>
                                                <th scope="col" class="text-center">Age</th>
                                                <th scope="col" class="text-center">Education</th>
                                                <th scope="col" class="text-center">Job</th>
                                                <th scope="col" class="text-center" width="20%">Description</th>
                                                <th scope="col" class="text-center" width="1%">#</th>
                                            </tr>
                                        </thead>
                                        <tbody class="inputTempFamily">
                                            <tr class="firstTrFamily">
                                                <td colspan="8" class="text-center">Please click button add data for form input </td>
                                            </tr>
                                        </tbody>
                                        <tfooter>
                                            <tr>
                                                <td colspan="8">
                                                    <a href="javascript:;" class="btn btn-sm btn-light-success btnAddFormFamily" style="width: 100%">
                                                        <i class="la la-plus"></i> Add Data
                                                    </a>
                                                </td>
                                            </tr>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                            <!--end::Wizard Step 2-->
                            <!--begin::Wizard Step 3-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <h4 class="mb-10 font-weight-bold text-dark">Enter your parents family information</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" class="text-center" width="15%">Relation</th>
                                                <th scope="col" class="text-center">Name</th>
                                                <th scope="col" class="text-center">Gender</th>
                                                <th scope="col" class="text-center">Age</th>
                                                <th scope="col" class="text-center">Education</th>
                                                <th scope="col" class="text-center">Job</th>
                                                <th scope="col" class="text-center" width="20%">Description</th>
                                                <th scope="col" class="text-center" width="1%">#</th>
                                            </tr>
                                        </thead>
                                        <tbody class="inputTempParents">
                                            <tr class="firstTrParents">
                                                <td colspan="8" class="text-center">Please click button add data for form input </td>
                                            </tr>
                                        </tbody>
                                        <tfooter>
                                            <tr>
                                                <td colspan="8">
                                                    <a href="javascript:;" class="btn btn-sm btn-light-success btnAddFormParents" style="width: 100%">
                                                        <i class="la la-plus"></i> Add Data
                                                    </a>
                                                </td>
                                            </tr>
                                        </tfooter>
                                    </table>
                                </div>
                            </div>
                            <!--end::Wizard Step 3-->
                            <!--begin::Wizard Step 5-->
                            <div class="pb-5" data-wizard-type="step-content">
                                <!--begin::Section-->
                                <h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
                                <h6 class="font-weight-bolder mb-3">Current Address:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div>Address Line 1</div>
                                    <div>Address Line 2</div>
                                    <div>Melbourne 3000, VIC, Australia</div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h6 class="font-weight-bolder mb-3">Delivery Details:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div>Package: Complete Workstation (Monitor, Computer, Keyboard &amp; Mouse)</div>
                                    <div>Weight: 25kg</div>
                                    <div>Dimensions: 110cm (w) x 90cm (h) x 150cm (L)</div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h6 class="font-weight-bolder mb-3">Delivery Service Type:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div>Overnight Delivery with Regular Packaging</div>
                                    <div>Preferred Morning (8:00AM - 11:00AM) Delivery</div>
                                </div>
                                <div class="separator separator-dashed my-5"></div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <h6 class="font-weight-bolder mb-3">Delivery Address:</h6>
                                <div class="text-dark-50 line-height-lg">
                                    <div>Address Line 1</div>
                                    <div>Address Line 2</div>
                                    <div>Preston 3072, VIC, Australia</div>
                                </div>
                                <!--end::Section-->
                            </div>
                            <!--end::Wizard Step 5-->
                            <!--begin::Wizard Actions-->
                            <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                <div class="mr-2">
                                    <button class="btn btn-light-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                </div>
                                <div>
                                    <button class="btn btn-success font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                    <button class="btn btn-primary font-weight-bold text-uppercase px-9 py-4" data-wizard-type="action-next">Next Step</button>
                                </div>
                            </div>
                            <!--end::Wizard Actions-->
                        </form>
                        <!--end::Wizard Form-->
                    </div>
                </div>
                <!--end::Wizard Body-->
            </div>
        </div>
        <!--end::Wizard-->
    </div>

    <script>
        $(document).ready(function(){
            // start form repeater family
            var x = 0;

            $('.btnAddFormFamily').click(function(e){
                e.preventDefault();

                x++;
                $('.inputTempFamily').append('<tr class="itemTrFamily trFamily_'+ x +'">' +
                                            '<td><input placeholder="Relation ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Name ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td class="text-center"><input placeholder="Gender ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td class="text-center"><input placeholder="Age ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Education ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Job ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Description ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td scope="row" class="text-center">' +
                                                '<a href="javascript:;" class="btn btn-sm btn-icon btn-light-danger remove_fieldFamily" data-rmv="'+ x +'">' +
                                                    '<i class="la la-trash-o"></i>' +
                                                '</a>' +
                                            '</td>' +
                                        '</tr>');

                if(x > 0){
                    $('.firstTrFamily').hide();
                }
            });

            $('.inputTempFamily').on("click",".remove_fieldFamily", function(e){ //user click on remove text
                e.preventDefault(); 
                $('.trFamily_' + $(this).data('rmv')).remove();

                if($('.itemTrFamily').length == 0){
                    $('.firstTrFamily').fadeIn('slow');
                }
            });
            // end form repeater family

            // start form repeater parents
            $('.btnAddFormParents').click(function(e){
                e.preventDefault();

                x++;
                $('.inputTempParents').append('<tr class="itemTrParents trParents_'+ x +'">' +
                                            '<td><input placeholder="Relation ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Name ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td class="text-center"><input placeholder="Gender ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td class="text-center"><input placeholder="Age ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Education ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Job ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td><input placeholder="Description ... " type="text" class="form-control form-control-sm" /></td>' +
                                            '<td scope="row" class="text-center">' +
                                                '<a href="javascript:;" class="btn btn-sm btn-icon btn-light-danger remove_fieldParents" data-rmv="'+ x +'">' +
                                                    '<i class="la la-trash-o"></i>' +
                                                '</a>' +
                                            '</td>' +
                                        '</tr>');

                if(x > 0){
                    $('.firstTrParents').hide();
                }
            });

            $('.inputTempParents').on("click",".remove_fieldParents", function(e){ //user click on remove text
                e.preventDefault(); 
                $('.trParents_' + $(this).data('rmv')).remove();

                if($('.itemTrParents').length == 0){
                    $('.firstTrParents').fadeIn('slow');
                }
            });
            // end form repeater parents

            // start set form datepicker
            prm = {
                todayHighlight : 'TRUE',
                autoclose      : true,
            }

            global.init_dtrp('1', '.date_birth', prm);
            // end set form datepicker

            // start set plugin form wizard
            var fields = [
                {
                    nik          : { validators : { notEmpty : { message : 'NIK is required' } } },
                    // first_name   : { validators : { notEmpty : { message : 'First name is required' } } },
                    // last_name    : { validators : { notEmpty : { message : 'Last name is required' } } },
                    // place_birth  : { validators : { notEmpty : { message : 'Place birth is required' } } },
                    // date_birth   : { validators : { notEmpty : { message : 'Date birth is required' } } },
                    // gender       : { validators : { notEmpty : { message : 'Gender is required' } } },
                    // mobile_phone : { validators : { notEmpty : { message : 'Mobile phone is required' } } },
                    // email        : { validators : { 
                    //     notEmpty     : { message : 'Email is required' },
                    //     emailAddress : { message : 'Format is email' }
                    // }},
                    // nationality  : { validators : { notEmpty : { message : 'Nationality is required' } } },
                    // religion     : { validators : { notEmpty : { message : 'Religion is required' } } },
                    // address      : { validators : { notEmpty : { message : 'Address is required' } } },
                },
                {},
                {}
            ];
            global.init_wizard('kt_wizard_datadiri', 'kt_form_datadiri',fields);
            // end set plugin form wizard

            // start select2 get data religion
            var optNationality = {
                route_to    : '{{ route("globalfunction.getdata", [ "table" => "negara" ]) }}',
                placeholder : 'Select Nationality',
                allowClear  : true
            }

            global.init_select2('.sltNationality', optNationality);
            // end select2 get data religion

            // start select2 get data religion
            var optReligion = {
                route_to    : '{{ route("globalfunction.getdata", [ "table" => "agama" ]) }}',
                placeholder : 'Select Religion',
                allowClear  : true
            }

            global.init_select2('.sltReligion', optReligion);
            // end select2 get data religion
        });
    </script>
@endsection