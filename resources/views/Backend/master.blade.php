<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>AdminLTE 3 | Dashboard</title>



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/summernote/summernote-bs4.min.css">

    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{asset('public/AdminPanal')}}/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


   @include('Backend.includes.navbar')


    @include('Backend.includes.aside')




    @yield('bodypart')


    @include('Backend.includes.footer')


    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>


<!-- jQuery -->
<script src="{{asset('public/AdminPanal')}}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('public/AdminPanal')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('public/AdminPanal')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('public/AdminPanal')}}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('public/AdminPanal')}}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('public/AdminPanal')}}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('public/AdminPanal')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('public/AdminPanal')}}/plugins/moment/moment.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('public/AdminPanal')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('public/AdminPanal')}}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('public/AdminPanal')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/AdminPanal')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('public/AdminPanal')}}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/AdminPanal')}}/dist/js/demo.js"></script>

<script src="{{asset('public/AdminPanal')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>




<script src="{{asset('public/AdminPanal')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/jszip/jszip.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('public/AdminPanal')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>











<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>




<script type="text/javascript">
    $(function(){
        $(document).on('click','#deletea',function (e){
            e.preventDefault() ;
            var link = $(this).attr("href") ;

            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Your work has been saved',
                showConfirmButton: false,
                timer: 1500
            })


        })
    })

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

<script>
@if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;

    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;

    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;

    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
    }
@endif

</script>


<script type="text/javascript">
    $(function(){
        $(document).on('click','#delete',function (e){
            e.preventDefault() ;
            var link = $(this).attr("href") ;

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {
                    window.location.href=link ;
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                }
            })

        })
    })

</script>


<script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
</script>


<script>

    $document.ready(function (){

        $('#image').change(function (e){
            var reader =new FileReader() ;
            reader.onload = function (e) {
                $('#showImage').attar('src',e.target.result) ;
            }
            reader.readAsDataURL(e.target.files['0'])
        })

    })

</script>


</body>
</html>

