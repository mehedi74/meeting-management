<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Login</title>
    <link rel="stylesheet" href="{{asset('assets')}}/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{asset('assets')}}/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="{{asset('assets')}}/images/favicon.png"/>
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="{{asset('assets')}}/project-images/logo/download.png">
                        </div>
                        @if(Session::has('msg'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('msg')}}!</strong>
                                <p>please give correct email or password</p>
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
                        <h6 class="font-weight-light">Please Sign in to continue.</h6>
                        <form class="pt-3" action="{{route('admin.login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="email" required name="admin_email" class="form-control form-control-lg"
                                       id="exampleInputEmail1" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" required name="admin_password"
                                       class="form-control form-control-lg" id="exampleInputPassword1"
                                       placeholder="Password">
                            </div>
                            <div class="mt-3">
                                <button type="submit"
                                        class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN
                                    IN
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets')}}/js/vendor.bundle.base.js"></script>
<script src="{{asset('assets')}}js/off-canvas.js"></script>
<script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/js/template.js"></script>
<script src="{{asset('assets')}}/js/settings.js"></script>
<script src="{{asset('assets')}}/js/todolist.js"></script>
</body>

</html>
