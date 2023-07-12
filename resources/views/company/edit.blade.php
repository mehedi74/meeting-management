@extends('master')
@section('title')
    Update Company
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-6 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Settings</h3>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="justify-content-end d-flex">
                                <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                            id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true">
                                        <i class="mdi mdi-calendar"></i> Today ({{date('D-M-Y')}})
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                                        <a class="dropdown-item" href="#">January - March</a>
                                        <a class="dropdown-item" href="#">March - June</a>
                                        <a class="dropdown-item" href="#">June - August</a>
                                        <a class="dropdown-item" href="#">August - November</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            @if(Session::has('msg'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{session('msg')}}!</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <h4 class="card-title">Update Company</h4>
                            <form action="{{route('company.edit',$company->id)}}" class="forms-sample" method="post"
                                  id="add-section" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="name">Company Name<sup class="red">*</sup></label>
                                    <input type="text" name="company_name" required class="form-control" value="{{$company->company_name}}"
                                           id="company_name" placeholder="Enter company name" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Address<sup class="red">*</sup></label>
                                    <input type="text" name="address" required class="form-control" value="{{$company->address}}"
                                           id="address" placeholder="Enter company address" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Official Email<sup class="red">*</sup></label>
                                    <input type="email" name="email" required class="form-control" value="{{$company->official_email}}"
                                           id="official_email" placeholder="Enter company  email" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Phone Number<sup class="red">*</sup></label>
                                    <input type="text" name="phone_number" required class="form-control" value="{{$company->phone_number}}"
                                           id="phone_number" placeholder="Enter company phone number" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Web address<sup class="red">*</sup></label>
                                    <input type="text" name="web_address" required class="form-control" value="{{$company->web_address}}"
                                           id="web_address" placeholder="Enter company web address" />
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div>
                                        <label><input type="radio" name="status" value="1" id="" {{$company->status==1 ? 'checked' : ''}}>
                                            Active</label>
                                        <label style="margin-left: 10px;"><input type="radio" name="status" value="0" id="" {{$company->status==0 ? 'checked' : ''}}> Inactive</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update Company</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

