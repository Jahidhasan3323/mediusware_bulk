<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css')); ?>">
     <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2/css/select2.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="app"> <!-- id use for vue js template -->

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>



    </ul>


    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <a class="nav-link" href="#">
        <i class="far fa-comments"></i>
        <span class="badge badge-danger navbar-badge">0</span>
      </a>

      <li class="nav-item" title="Logout">
        <a class=""  href="#">

        </a>
        <!-- <a class="nav-link" href="#"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <form id="logout-form" action="#" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        </a> -->


      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php echo $__env->make('sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('mainContent'); ?>





<!-- /.content-wrapper -->
<footer class="main-footer">
    <strong>Copyright &copy; 2020-2021 <a href="http://www.parliament.gov.bd">Bangladesh Parliament</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> Build 0.1.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset('admin/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- DataTables -->
<script src="<?php echo e(asset('admin/plugins/datatables/jquery.dataTables.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js')); ?>"></script>

<!-- ChartJS -->
<script src="<?php echo e(asset('admin/plugins/chart.js/Chart.min.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset('admin/plugins/sparklines/sparkline.js')); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset('admin/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset('admin/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset('admin/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('admin/plugins/select2/js/select2.full.min.js')); ?>"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo e(asset('admin/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')); ?>"></script>
<!-- InputMask -->
<script src="<?php echo e(asset('admin/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/inputmask/min/jquery.inputmask.bundle.min.js')); ?>"></script>
<!-- date-range-picker -->
<script src="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo e(asset('admin/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')); ?>"></script>
<!-- bs-custom-file-input -->
<script src="<?php echo e(asset('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('admin/dist/js/adminlte.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset('admin/dist/js/pages/dashboard.js')); ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo e(asset('admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
<!-- jquery form validator -->
<script src="<?php echo e(asset('admin/plugins/jquiry-from-validator/jquiry_form_validator.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset('admin/dist/js/demo.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>

<?php
    if (!empty(Session::get('message'))) { ?>
<script >

      $(document).Toasts('create', {
        class: 'bg-success',
        title: 'Success',
        subtitle: '',
        body: '<?php echo e(Session::get('message')); ?>'
      })

</script>
<?php }?>
  <?php
    if (!empty(Session::get('danger'))) { ?>
    <script >

      $(document).Toasts('create', {
        class: 'bg-danger',
        title: 'Fail',
        subtitle: '',
        body: '<?php echo e(Session::get('danger')); ?>'
      })

</script>
<?php } ?>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $("#example3").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<!-- fileinput -->
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});

</script>
<!-- editor -->

<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script>
    $(function() {
    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    setTimeout(function() {
        $("#toastsContainerTopRight").hide('blind', {}, 100)
    }, 5000);
});
</script>

<!-- jquery form validator -->
<script>
  $.validate({
    lang: 'en',
    modules : 'file',
  });
</script>

<script type="text/javascript">
      $(document).ready(function(){
        $(document).on('change','#template',function(){
          var id=$(this).val();
          //console.log('id');
          $.ajax({
            type:'get',
            url:'<?php echo URL::to('get_template'); ?>',
            data:{'id':id},
            success:function(data){
                $('#sms').val(data.body);
            },
            error:function(){
            }
        });
      });
  });
  </script>


</body>
</html>
<?php /**PATH C:\xampp7.4\htdocs\mediusware_bulk1\resources\views/main_layout.blade.php ENDPATH**/ ?>