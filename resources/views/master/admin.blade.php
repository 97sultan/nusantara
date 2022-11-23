<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $layout['nama_perusahaan'] ?? 'Nusantara Armada' }} | Admin Sistem</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <!-- <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}"> -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/select.dataTables.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

  <style type="text/css">
    body {
      font-family: 'Open Sans', sans-serif;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">

<li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><img src="{{ asset('assets/img/profil.png') }}" class="img-fluid" width="30" /></a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <!-- <li><a href="/admin/user" class="dropdown-item">User</a></li> -->
              <!-- <li><a href="#" class="dropdown-item">Setting</a></li> -->
              <li><a href="/admin/user/changepassword" class="dropdown-item">Change Password</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </li>
            </ul>
          </li>
</ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #0f5399 !important">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <span class="brand-text font-weight-light">Nusantara Armada</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="{{ asset('uploads/header/'.@$layout['logo_image']) }}" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->
      
          
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                  <a href="/admin/dashboard" class="nav-link">
                    <i class="nav-icon fas fa-dashboard"></i>
                    <p>
                      Dashboard
                    </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/content" class="nav-link">
                    <i class="nav-icon fas fa-c"></i>
                    <p>
                      Content
                    </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/car" class="nav-link">
                    <i class="nav-icon fas fa-car"></i>
                    <p>
                      Car
                    </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="/admin/destination" class="nav-link">
                    <i class="nav-icon fas fa-map"></i>
                    <p>
                      Destination
                    </p>
                  </a>
              </li>
              

                
                <!-- <li class="nav-header"></li> -->
                
                <!-- <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                      User / Admin
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/admin/users" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>User</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/admin/role" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Role</p>
                      </a>
                    </li>
                  </ul>
                </li> -->


                <!-- <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Pesan
                      </p>
                    </a>
                </li>
               <li class="nav-item">
                    <a href="/admin/dashboard" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Dashboard
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/types" class="nav-link">
                      <i class="nav-icon fas fa-users-cog"></i>
                      <p>
                        Jenis Customer
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/customers" class="nav-link">
                      <i class="nav-icon fas fa-users"></i>
                      <p>
                        Customer
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/services" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Service
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/products" class="nav-link">
                      <i class="nav-icon fas fa-store"></i>
                      <p>
                        Produk
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/portofolios" class="nav-link">
                      <i class="nav-icon fas fa-list-alt"></i>
                      <p>
                        Portofolio
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/faqs" class="nav-link">
                      <i class="nav-icon fas fa-question-circle"></i>
                      <p>
                        FAQ
                      </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/admin/messages" class="nav-link">
                      <i class="nav-icon fas fa-comment"></i>
                      <p>
                        Pesan
                      </p>
                    </a>
                </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
          @elseif (Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
          @endif

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
            
          @yield('content')
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      IT Consultant
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2022 <a href="/">{{ $layout['nama_perusahaan'] ?? 'Nusantara Armada' }}</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
  
<script src="{{ asset('assets/plugins/summernote/summernote-image-attributes.js') }}"></script>
<!-- <script src="{{ asset('assets/plugins/summernote/lang/en-us.js') }}"></script> -->

<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>

<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<div class="modal fade bd-example-modal-lg" id="zoomModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <img src="" id="imgZoom">
    </div>
  </div>
</div>

@stack('scripts')

<script type="text/javascript">
  let loadingIndicator = `<div class="spinner-border text-danger" role="status">
  <span class="sr-only">Loading...</span>
</div>`;
  
  $('.zoom').click(function() {
      let src = $(this).attr('src');
      $('#imgZoom').attr('src',src);

      $('#zoomModal').modal('show');
    });

  $('.summernote').summernote({
    placeholder: 'Keterangan',
    tabsize: 2,
    height: 100,
    toolbar: [
      ['style', ['style']],
      ['fontsize', ['fontsize']],
      ['font', ['bold', 'italic', 'underline', 'clear']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['height', ['height']],
      ['insert', ['picture', 'hr']],
      ['table', ['table']]
    ],
    popover: {
        image: [
            ['custom', ['imageAttributes']],
            ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
            ['float', ['floatLeft', 'floatRight', 'floatNone']],
            ['remove', ['removeMedia']]
        ],
    },
    imageAttributes:{
        icon:'<i class="note-icon-pencil"/>',
        removeEmpty:false, // true = remove attributes | false = leave empty if present
        disableUpload: false // true = don't display Upload Options | Display Upload Options
    }
  });

  $('.select2').select2({
    theme: 'bootstrap4'
  })

  $('#datatable').DataTable();
  $('.datatable').DataTable();
  
  function separatorNumber(object) {
      var value = parseInt(object.value.replaceAll('.','').replaceAll(',',''));

      if ($.isNumeric(value)) {
        object.value = value.toLocaleString();
      } else {
        object.value = '';
      }
      
      return true;
  }

</script>
</body>
</html>
