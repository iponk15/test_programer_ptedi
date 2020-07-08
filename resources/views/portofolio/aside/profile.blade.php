<div class="card card-custom">
    <div class="card-header">
        <div class="card-title">
            <h3 class="card-label text-info">
                {{ (!empty($cardTitle) ? $cardTitle : 'Card Title' ) }}
                <small>{{ (!empty($cardSubTitle) ? $cardSubTitle : 'Card Sub Title' ) }}</small>
                <span class="d-block text-muted pt-2 font-size-sm">{{ (!empty($cardBtmTitle) ? $cardBtmTitle : 'Card Buttom Title') }}</span>
            </h3>
        </div>
        <div class="card-toolbar">
            
        </div>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home">
                    <span class="nav-icon">
                        <i class="flaticon2-chat-1"></i>
                    </span>
                    <span class="nav-text">Personal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile">
                    <span class="nav-icon">
                        <i class="flaticon2-layers-1"></i>
                    </span>
                    <span class="nav-text">Family</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" aria-controls="contact">
                    <span class="nav-icon">
                        <i class="flaticon2-rocket-1"></i>
                    </span>
                    <span class="nav-text">Parent's Family</span>
                </a>
            </li>
        </ul>
        <div class="tab-content mt-5" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form class="form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">My Info</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">NIK</label>
                                <div class="col-lg-3 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="3206241510920003" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">First Name</label>
                                <div class="col-lg-3 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Irfan" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Last Name</label>
                                <div class="col-lg-9 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Isma Somantri" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Gender</label>
                                <div class="col-lg-9 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Male" />
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">PDOB</label>
                                <div class="col-lg-9 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Tasikmalya, 15 Oktober 1992" />
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Nationality</label>
                                <div class="col-lg-9 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Indonesia" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Religion</label>
                                <div class="col-lg-9 col-xl-7">
                                    <input class="form-control form-control-lg form-control-solid" type="text" value="Muslim" />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Address</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <textarea name="" class="form-control" cols="30" rows="4"> Jl. Raya Lenteng Agung No 28, RT 007 / RW 001, Lenteng Agung, Jagakarsa, Jakarta Selatan </textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-7">
                                    <h5 class="font-weight-bold mb-6">Contact Info</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Mobile Phone</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" value="08973950031" placeholder="Phone" />
                                    </div>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email Person</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" value="irfan.isma@gmail.com" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-7">
                                    <h5 class="font-weight-bold mb-6">Work Info</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Company</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" value="PT Cendana Teknika Utama" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Email Company</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" value="irfan@cendana2000.co.id" placeholder="Email" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Company Site</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="cendana2000.co.id" />
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Company Address</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <textarea name="" class="form-control" cols="30" rows="4
                                        "> Jl. PLN Raya No. 95 Gandul Cinere – Depok 16512 </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label text-right">Phone</label>
                                <div class="col-lg-9 col-xl-7">
                                    <div class="input-group input-group-lg input-group-solid">
                                        <input type="text" class="form-control form-control-lg form-control-solid" placeholder="Username" value="021–7538068" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p><h5>My Little Family</h5></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="1%">No.</th>
                                <th scope="col" class="text-center" width="15%">Family Relationship</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Gender</th>
                                <th scope="col" class="text-center">Age (old)</th>
                                <th scope="col" class="text-center">Education</th>
                                <th scope="col" class="text-center">Job</th>
                                <th scope="col" class="text-center" width="20%">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>Wife</td>
                                <td>Mutiara Insani</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">27</td>
                                <td>Bachelor Degree</td>
                                <td>General Employees</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">2</th>
                                <td>Daughter</td>
                                <td>Fatimah Azzahra</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">1</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p><h5>My Parent's Family</h5></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="1%">No.</th>
                                <th scope="col" class="text-center" width="15%">Family Relationship</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Gender</th>
                                <th scope="col" class="text-center">Age (old)</th>
                                <th scope="col" class="text-center">Education</th>
                                <th scope="col" class="text-center">Job</th>
                                <th scope="col" class="text-center" width="20%">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>Fater</td>
                                <td>Mamat Somantri</td>
                                <td class="text-center">Male</td>
                                <td class="text-center">58</td>
                                <td>Bachelor Degree</td>
                                <td>General Employees</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">2</th>
                                <td>Mother</td>
                                <td>IIS Dais</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">56</td>
                                <td>Bachelor Degree</td>
                                <td>-</td>
                                <td>House Wife</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">3</th>
                                <td>Brother</td>
                                <td>Ilman Manbaulum Ramadhan</td>
                                <td class="text-center">Male</td>
                                <td class="text-center">21</td>
                                <td>D3</td>
                                <td>General Employees</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p><h5>Wife Parent's Family</h5></p>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center" width="1%">No.</th>
                                <th scope="col" class="text-center" width="15%">Family Relationship</th>
                                <th scope="col" class="text-center">Name</th>
                                <th scope="col" class="text-center">Gender</th>
                                <th scope="col" class="text-center">Age (old)</th>
                                <th scope="col" class="text-center">Education</th>
                                <th scope="col" class="text-center">Job</th>
                                <th scope="col" class="text-center" width="20%">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-center">1</th>
                                <td>Father In Law</td>
                                <td>Agus Salim Ritonga</td>
                                <td class="text-center">Male</td>
                                <td class="text-center">60</td>
                                <td>Magister of science</td>
                                <td>Pension</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">2</th>
                                <td>Mother In Law</td>
                                <td>Nani</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">40</td>
                                <td>High School</td>
                                <td>-</td>
                                <td>House Wife</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">3</th>
                                <td>Younger Sister In Law</td>
                                <td>Cahyatin Husna</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">24</td>
                                <td>D3</td>
                                <td></td>
                                <td>General Employees</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-center">3</th>
                                <td>Younger Sister In Law</td>
                                <td>Naurah Salimah</td>
                                <td class="text-center">Female</td>
                                <td class="text-center">16</td>
                                <td>High School</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>