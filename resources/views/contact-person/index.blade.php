@extends('master')
@section('title')
    All Contact Person
@endsection
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
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
                            <h4  style="display: inline-block" class="card-title">All Contact Person Information</h4>
                            <div class="table-responsive pt-3">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Designation</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Whatsapp</th>
                                        <th>Acton</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($persons as $key => $person)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$person->name}}</td>
                                            <td>{{$person->company->company_name}}</td>
                                            <td>{{$person->designation}}</td>
                                            <td>{{$person->email}}</td>
                                            <td>{{$person->phone_number}}</td>
                                            <td>{{$person->whatsapp}}</td>
                                            <td>
                                                <a title="edit?" href="{{route('person.edit',$person->id)}}"><i class="editbtn mdi mdi-pencil-box-outline"></i></a>
                                                <a  title="delete?" href="javascript:void(0)" class="confirmDelete" module="Person" moduleId="{{$person->id}}"><i class="deletebtn  mdi mdi-delete"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

