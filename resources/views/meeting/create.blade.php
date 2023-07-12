@extends('master')
@section('title')
    Add Meeting
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
                            <h4 class="card-title">Add Meeting</h4>
                            <form action="{{route('meeting.create')}}" class="forms-sample" method="post"
                                  id="add-section" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="category_id">Select Company<sup class="red">*</sup></label>
                                    <div class="select">
                                        <select name="company_id" required id="companyId">
                                            <option value="" class="text-dark">Select Company</option>
                                            @foreach($companies as  $company)
                                                <option value="{{$company->id}}">{{$company->company_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="category_id">Select Contact Person<sup class="red">*</sup></label>
                                    <div class="select">
                                        <select name="contact_person_id" required id="personId">
                                            <option value="" class="text-dark">Select Company</option>
                                            @foreach($persons as  $person)
                                                <option value="{{$person->id}}">{{$person->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Meeting title<sup class="red">*</sup></label>
                                    <input type="text" name="meeting_title" required class="form-control"
                                           id="meeting_title" placeholder="Enter meeting title" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Purpose<sup class="red">*</sup></label>
                                    <input type="text" name="purpose" required class="form-control"
                                           id="purpose" placeholder="Enter meeting purpose" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Discussion<sup class="red">*</sup></label>
                                    <textarea class="form-control" name="discussion"
                                              id="discussion"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="name">Result<sup class="red">*</sup></label>
                                    <input type="text" name="result" required class="form-control"
                                           id="whatsapp" placeholder="Enter meeting result" />
                                </div>
                                <div class="form-group">
                                    <label for="name">Next meeting date time</label>
                                    <input type="datetime-local" name="next_meeting_date_time"  class="form-control"
                                           id="whatsapp" placeholder="Enter next meeting date" />
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <div>
                                        <label><input type="radio" name="status" value="1" id="" checked>
                                            Done</label>
                                        <label style="margin-left: 10px;"><input type="radio" name="status" value="0" id=""> UpComing</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add Meeting</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

