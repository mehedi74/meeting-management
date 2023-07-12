@extends('master')
@section('title')
    All Companies
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
                            <h4  style="display: inline-block" class="card-title">All Companies Information</h4>
                            <div class="table-responsive pt-3">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Web Address</th>
                                        <th>Status</th>
                                        <th>Acton</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($companies as $key => $company)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$company->company_name}}</td>
                                            <td>{{$company->address}}</td>
                                            <td>{{$company->official_email }}</td>
                                            <td>{{$company->phone_number }}</td>
                                            <td>{{$company->web_address }}</td>
                                            <td>
                                                @if($company->status == 1)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span
                                                        class="badge badge-warning">Deactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($company->status == 1)
                                                    <a class="success-msg" attr="Company Status" href="{{route('company.update.status',$company->id)}}"><i class="deactivebtn mdi mdi-thumb-down-outline"></i></a>
                                                @else
                                                    <a class="success-msg" attr="Company Status" href="{{route('company.update.status',$company->id)}}"><i class="activebtn  mdi mdi-thumb-up-outline"></i></a>
                                                @endif
                                                <a title="edit?" href="{{route('company.edit',['id'=> $company->id])}}"><i class="editbtn mdi mdi-pencil-box-outline"></i></a>
                                                <a  title="delete?" href="javascript:void(0)" class="confirmDelete" module="Company" moduleId="{{$company->id}}"><i class="deletebtn  mdi mdi-delete"></i></a>
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

