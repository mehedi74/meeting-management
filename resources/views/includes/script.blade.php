<!-- plugins:js -->
<script src="{{asset('assets')}}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('assets')}}/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('assets')}}/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/js/template.js"></script>
<script src="{{asset('assets')}}/js/settings.js"></script>
<script src="{{asset('assets')}}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('assets')}}/js/dashboard.js"></script>
<script src="{{asset('assets')}}/js/Chart.roundedBarCharts.js"></script>
<script src="{{asset('assets')}}/js/custom.js"></script>

<!-- Dropify image upload  js for this page-->
<script src="{{asset('assets')}}/js/dropify.min.js"></script>

<!-- For DataTable Script-->
<script src="{{asset('assets')}}/js/jquery-3.5.1.js"></script>
<script src="{{asset('assets')}}/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/js/dataTables.bootstrap4.min.js"></script>

<!-- For sweetalert2 Script-->
<script src="{{asset('assets')}}/js/sweetalert.js"></script>

<script>
    $(document).ready(function () {

        $('.nav-item').removeClass('active');
        $('.nav-link').removeClass('active');

        // confirm delete by sweetalert  javascript......
        $(".confirmDelete").click(function () {
            var module = $(this).attr('module');
            var moduleId = $(this).attr('moduleId');
            Swal.fire({
                title: 'Are you sure to delete ' + module + '?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    //all module delete route after alert...
                    if (module === 'Company') {
                        window.location = "{{url('/admin/company/delete')}}" + moduleId;
                    } else if (module === 'Person') {
                        window.location = "{{url('/admin/person/delete')}}" + moduleId;
                    }else if (module === 'Meeting') {
                        window.location = "{{url('/admin/meeting/delete')}}" + moduleId;
                    }
                }
            })
        });

        //Success msg for any status/category/any module update...just add attr value according to module..
        $(".success-msg").click(function () {
            var attribute = $(this).attr('attr');
            Swal.fire({
                icon: 'success',
                title: attribute + ' updated successfully',
                showConfirmButton: false,
                timer: 50000,
            });
        });

        $('#example').DataTable();

        $("#current_password").keyup(function () {
            var current_password = $("#current_password").val();
            // alert(current_password);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{route('admin.check-current-password')}}",
                data: {current_password: current_password},
                dataType: "JSON",
                success: function (response) {
                    if (response === 1) {
                        $("#recent_password").html("<font color='green'>Correct Password!</font>");
                    } else if (response === 0) {
                        $("#recent_password").html("<font color='red'>Incorrect Password!</font>");
                    }
                },
                error: function () {
                    alert('Error');
                },
            });
        });

        $("#companyId").on('change', function () {
            var company_id = $("#companyId").val();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: "{{route('select-all-person')}}",
                data: {company_id: company_id},
                dataType: "JSON",
                success: function (response) {
                    var personId = $('#personId');
                    personId.empty();
                    var option = '';
                    option += '<option value="" disabled selected>--Select Contact Person--</option>';
                    $.each(response, function (key, person) {
                        option += '<option value="' + person.id + '">' + person.name + '</option>';
                    });
                    personId.append(option);
                },
                error: function () {
                    alert('Error');
                },
            });
        });
    });
</script>
