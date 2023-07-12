@extends('master')
@section('title')
    All Meeting Information
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
                            <h4  style="display: inline-block" class="card-title">All Meeting Information</h4>
                            <div class="table-responsive pt-3">
                                <table id="example" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Serial No</th>
                                        <th>Contact Person </th>
                                        <th>Company </th>
                                        <th>Meeting title</th>
                                        <th>Purpose</th>
                                        <th>Next meeting date time</th>
                                        <th>Status</th>
                                        <th>Acton</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($meetings as $key => $meeting)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$meeting->contactPerson->name==' '? 'N/A' : $meeting->contactPerson->name}}</td>
                                            <td>{{$meeting->contactPerson->company->company_name ==' '? 'N/A' : $meeting->contactPerson->company->company_name}}</td>
                                            <td>{{$meeting->meeting_title}}</td>
                                            <td>{{$meeting->purpose}}</td>
                                            <td>{{$meeting->next_meeting_date_time == '' ? 'Not Set': $meeting->next_meeting_date_time}}</td>
                                            <td>
                                                @if($meeting->status == 1)
                                                    <span class="badge badge-success">Done</span>
                                                @else
                                                    <span
                                                        class="badge badge-warning">Upcoming</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if($meeting->status == 1)
                                                    <a class="success-msg" attr="Meeting Status" href="{{route('meeting.status.update',$meeting->id)}}"><i class="deactivebtn mdi mdi-thumb-down-outline"></i></a>
                                                @else
                                                    <a class="success-msg" attr="Meeting Status" href="{{route('meeting.status.update',$meeting->id)}}"><i class="activebtn  mdi mdi-thumb-up-outline"></i></a>
                                                @endif
                                                <a title="View Details?" href="{{route('meeting.view',$meeting->id)}}" class="viewbtn mdi mdi-book-open-page-variant"></a>
                                                <a title="edit?" href="{{route('meeting.edit',$meeting->id)}}"><i class="editbtn mdi mdi-pencil-box-outline"></i></a>
                                                <a  title="delete?" href="javascript:void(0)" class="confirmDelete" module="Meeting" moduleId="{{$meeting->id}}"><i class="deletebtn  mdi mdi-delete"></i></a>
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

