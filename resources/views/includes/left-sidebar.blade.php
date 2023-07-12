<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a @if(Session::get('page')=='home') style="background-color: #4B49AC; color: #ffffff;"
               @endif class="nav-link" href="{{route('home')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
                <a @if(Session::get('page')=='update_password' || Session::get('page')=='update_datils') style="background-color: #4B49AC; color: #ffffff;"
                   @endif  class="nav-link" data-toggle="collapse" href="#settings" aria-expanded="false"
                   aria-controls="ui-basic">
                    <i class="icon-layout menu-icon"></i>
                    <span class="menu-title">Settings</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="settings">
                    <ul class="nav flex-column sub-menu" style="background: #ffffff !important;">
                        <li class="nav-item"><a
                                @if(Session::get('page')=='update_password')style="background-color: #4B49AC; color: #ffffff;"
                                @endif style="color: #4B49AC; !important;" class="nav-link"
                                href="{{route('admin.update.password')}}">Update Admin Password</a>
                        </li>
                        <li class="nav-item"><a
                                @if(Session::get('page')=='update_deatils')style="background-color: #4B49AC; color: #ffffff;"
                                @endif style="color: #4B49AC; !important;" class="nav-link"
                                href="{{route('admin.update.details')}}">Update Admin Details</a>
                        </li>
                    </ul>
                </div>
        </li>
        <li class="nav-item">
            <a @if(Session::get('page')=='add company' || Session::get('page')=='manage company') style="background-color: #4B49AC; color: #ffffff;"
               @endif  class="nav-link" data-toggle="collapse" href="#company" aria-expanded="false"
               aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Company Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="company">
                <ul class="nav flex-column sub-menu" style="background: #ffffff !important;">
                    <li class="nav-item"><a
                            @if(Session::get('page')=='add company')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('company.create')}}">Add Company</a>
                    </li>
                    <li class="nav-item"><a
                            @if(Session::get('page')=='manage company')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('company.index')}}">Manage Company</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a @if(Session::get('page')=='add person' || Session::get('page')=='manage person') style="background-color: #4B49AC; color: #ffffff;"
               @endif  class="nav-link" data-toggle="collapse" href="#person" aria-expanded="false"
               aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Contact Person Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="person">
                <ul class="nav flex-column sub-menu" style="background: #ffffff !important;">
                    <li class="nav-item"><a
                            @if(Session::get('page')=='add person')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('person.create')}}">Add Person</a>
                    </li>
                    <li class="nav-item"><a
                            @if(Session::get('page')=='manage person')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('person.index')}}">Manage Person</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a @if(Session::get('page')=='add meeting' || Session::get('page')=='manage meeting') style="background-color: #4B49AC; color: #ffffff;"
               @endif  class="nav-link" data-toggle="collapse" href="#meeting" aria-expanded="false"
               aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Meeting Management</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="meeting">
                <ul class="nav flex-column sub-menu" style="background: #ffffff !important;">
                    <li class="nav-item"><a
                            @if(Session::get('page')=='add meeting')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('meeting.create')}}">Add Meeting</a>
                    </li>
                    <li class="nav-item"><a
                            @if(Session::get('page')=='manage meeting')style="background-color: #4B49AC; color: #ffffff;"
                            @endif style="color: #4B49AC; !important;" class="nav-link"
                            href="{{route('meeting.index')}}">Manage Meeting</a>
                    </li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
