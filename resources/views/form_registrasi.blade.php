@extends('layout')
@section('content')
      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Forms
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic elements</li>
              </ol>
            </nav>
          </div>
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
              <form method="post" action="{{ route('registration.store') }}" id="registerForm" enctype="multipart/form-data" autocomplete="off">
              {!! csrf_field() !!}
                <div class="card-body">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            
                            <div class="form-group">
                                <label for="#">Nama Lengkap</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Ahmad Syaifullah">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Jenis Kelamin</label><span class="text-danger">*</span>
                                <!-- <input type="text" class="form-control" id="#" placeholder="Laki-laki"> -->
                                <select class="form-control" id="gender" name="gender">
                                    <option value="L"> Laki-Laki </option>
                                    <option value="P"> Perempuan </option>
                                </select>
                                @if ($errors->has('gender'))
                                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Tanggal Lahir</label><span class="text-danger">*</span>
                                <input name="date_of_birth" type="date" class="flatpickr flatpickr-input form-control" id="date_of_birth">
                                @if ($errors->has('date_of_birth'))
                                    <span class="text-danger">{{ $errors->first('date_of_birth') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Agama</label><span class="text-danger">*</span>
                                <select class="form-control" name="religion">
                                    @foreach ($religions as $religion)
                                        <option value="{{ $religion->id }}"> {{ $religion->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('religion'))
                                    <span class="text-danger">{{ $errors->first('religion') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Email</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="email" name="email" placeholder=" Email">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor HP</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Nomor HP ">
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Twitter</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter">
                            </div>
                            <div class="form-group">
                                <label for="#">Facebook</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Nomor KTP </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="identity_number" name="identity_number" placeholder="Nomor KTP ">
                                @if ($errors->has('identity_number'))
                                    <span class="text-danger">{{ $errors->first('identity_number') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#"> File KTP</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="identity_file" name="identity_file" placeholder=" KTP ">
                                @if ($errors->has('identity_file'))
                                    <span class="text-danger">{{ $errors->first('identity_file') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Nama Bank </label><span class="text-danger">*</span>
                                <!-- <input type="text" class="form-control" id="#" placeholder="Nama Bank "> -->
                                <select class="form-control" name="bank" id="bank">
                                    @foreach ($banks as $bank)
                                        <option value="{{ $bank->id }}"> {{ $bank->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('bank'))
                                    <span class="text-danger">{{ $errors->first('bank') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Nomor Bank Akun </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="bank_account" name="bank_account"
                                    placeholder="Nomor Bank Akun ">
                                @if ($errors->has('bank_account'))
                                    <span class="text-danger">{{ $errors->first('bank_account') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Alamat Domisili </label><span class="text-danger">*</span>
                                <textarea class="form-control" id="address" rows="8" name="address"
                                    placeholder="Alamat Domisili"></textarea>
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Instagram</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
                            </div>
                            <div class="form-group">
                                <label for="#">Linked In</label><span class="text-danger"></span>
                                <input type="text" class="form-control" id="linkedin" name="instagram" placeholder="Linked In ">
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title"> Data Pendidikan </h4>
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Pendidikan</label><span class="text-danger">*</span>
                                <!-- <input type="text" class="form-control" id="#" placeholder="Pendidikan"> -->
                                <select class="form-control" name="education">
                                    @foreach ($educations as $education)
                                        <option value="{{ $education->id }}"> {{ $education->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('education'))
                                    <span class="text-danger">{{ $errors->first('education') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Universitas</label><span class="text-danger">*</span>
                                <!-- <input type="text" class="form-control" id="#" placeholder="Universitas"> -->
                                <select class="form-control" name="university">
                                    @foreach ($universities as $university)
                                        <option value="{{ $university->id }}"> {{ $university->name }} </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('university'))
                                    <span class="text-danger">{{ $errors->first('university') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#"> Tahun Lulus</label><span class="text-danger">*</span>
                                <div class="form-group">
                                    <div class="input-group" name="#">
                                        <input type="text" class="form-control mr-2" id="graduation_year" name="graduation_year"
                                            placeholder="Tahun Lulus">                                     
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">Masih
                                                Kuliah</label>
                                        </div>
                                        @if ($errors->has('graduation_year'))
                                            <span class="text-danger">{{ $errors->first('graduation_year') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">Jurusan </label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="major" name="major" placeholder="Jurusan">
                                @if ($errors->has('major'))
                                    <span class="text-danger">{{ $errors->first('major') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#"> Semester</label><span class="text-danger">*</span>
                                <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester">
                                @if ($errors->has('semester'))
                                    <span class="text-danger">{{ $errors->first('semester') }}</span>
                                @endif
                            </div>
                        </div><br>
                    </div>
                    
                    <div class="controls mt-3"> 
                            <div class="entry ">
                                <h4 class="card-title mt-5"> Pengalaman Organisai </h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Organisasi</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="organisasi">
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Tahun</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="tahun">
                                                </div>
                                                <div class="form-group">
                                                    <label for="#">Jabatan</label><span class="text-danger">*</span>
                                                    <input type="text" class="form-control" id="#" placeholder="jabatan">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="#">Deskripsi Kegiatan </label><span class="text-danger">*</span>
                                                    <textarea class="form-control" id="exampleTextarea1" rows="6"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="#"> File</label>
                                                    <input type="file" class="form-control" id="#" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                <span class="input-group-btn float-right">
                                    <button class="btn btn-success btn-sm btn-add" type="button"> Tambah Organisasi
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                            </div>
                    </div><br>
                    <h4 class="card-title"> Keahlian yang Dimiliki </h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="#">Keahlian</label><span class="text-danger">*</span>
                                <textarea class="form-control" id="skill" name="skill" rows="10"></textarea>
                                @if ($errors->has('skill'))
                                    <span class="text-danger">{{ $errors->first('skill') }}</span>
                                @endif
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Lain - Lain </h4>
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#">File CV</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="file_cv" name="file_cv" placeholder="File CV.pdf">
                                @if ($errors->has('file_cv'))
                                    <span class="text-danger">{{ $errors->first('file_cv') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="#">Past Photo</label><span class="text-danger">*</span>
                                <input type="file" class="form-control" id="file_photo" name="file_photo" placeholder="Photo.jpg">
                                @if ($errors->has('file_photo'))
                                    <span class="text-danger">{{ $errors->first('file_photo') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="#"> Portofolio</label>
                                <input type="file" class="form-control" id="file_portofolio" name="file_portofolio" placeholder="Portofolio.pdf">
                            </div>
                        </div>
                    </div><br>
                    <h4 class="card-title">Mengenal Jasamarga dari ? </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio1" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Internet</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio2" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio2">Kampus</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio3" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio3">Instagram</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio4" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio4">facebook</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio5" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio5">Twitter</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <div class="form-group mb-0">
                                        <input type="radio" id="customRadio6" name="customRadio"
                                            class="custom-control-input">
                                        <label class="custom-control-label"
                                            for="customRadio6">Lain-lain</label>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="#" placeholder="">
                            </div>
                        </div>
                    </div><br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">I Accept <a href=""
                                        class="text-primary">Terms And Condition</a></label>
                            </div>
                        </div>
                    </div>
                <div class="mt-4">
                    <!-- <a href="{{ url('data_activity') }}" class="btn btn-outline-primary">Kirim Lamaran <i class="mdi mdi-send"></i></a> -->
                    <button type="submit" class="btn btn-outline-primary">
                        Kirim Lamaran <i class="mdi mdi-send"></i>
                    </button>
                </div>
            <!--end form-->
            </form>
        </div>
                
                  
                </div>
              </div>
            </div>
           
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021 <a
                      href="https://www.jasamarga.com/" target="_blank">© PT Jasa Marga (Persero)</a>. All
                  rights
                  reserved.</span>
              <span class="float-none float-sm-right d-block text-muted  text-center">Suported by Information
                  Technology
                  Group </span>
          </div>
      </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
 @endsection
