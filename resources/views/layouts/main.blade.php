<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
 <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>T-SAFE</title>
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="css/examples.css" rel="stylesheet">
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">

    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <div class="sidebar-brand d-none d-md-flex">
        <h2>T-SAFE</h2>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="/">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
            </svg> Dashboard</a></li>
        <li class="nav-divider"></li>
        <li class="nav-item"><a class="nav-link" href="/lapor">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Lapor Potensi Bahaya</a></li>
        <li class="nav-item"><a class="nav-link" href="/laporan">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
            </svg> Laporan Potensi Bahaya</a></li>
        <li class="nav-item"><a class="nav-link" href="/history">
            <svg class="nav-icon">
              <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
            </svg> History Potensi Bahaya</a></li>
      </ul>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">

        {{-- Header --}}
        <header class="header header-sticky mb-4 bg-light">
        <div class="container-fluid">
            <button class="header-toggler px-md-3 me-md-3 bg-success text-white" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
            </svg>
            </button>
            <a class="header-brand d-md-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            </a>
            
            <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#">
                Welcome, User</a></li>
            <li class="nav-item"><a class="nav-link" href="#">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
            <a class="dropdown-item" href="#">
                <svg class="icon me-2">
                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                </svg> Log out</a>
            </ul>
        </div>
        </header>
        {{-- End of Header --}}
      
        {{-- Body --}}
        @yield('container')
        {{-- End of Body --}}

        {{-- Footer --}}
        <footer class="footer">
        <div>Footer</div>
        <div class="ms-auto">Footer Kanan</div>
        </footer>
        {{-- End of Footer --}}

    </div>

    {{-- Scripts --}}

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js" integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
    <!-- CoreUI and necessary plugins-->
    <script src="vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="vendors/simplebar/js/simplebar.min.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="vendors/chart.js/js/chart.min.js"></script>
    <script src="vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="vendors/@coreui/utils/js/coreui-utils.js"></script>
    <script src="js/main.js"></script>

    <!-- DataTables -->
    <script src="js/datatables.min.js"></script>
    <script src="js/dataTables.bootstrap5.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
    </script>

    <!-- Input Form -->
    <script>
        // Initiate Date
        document.getElementById('inputTanggal').valueAsDate = new Date();

         // Jenis lain input
         $('#jenis').change(function(){
            if($(this).val() == 'Lain-lain'){
                $('#jenis-lain-container').show();
            } else {
                $('#jenis-lain-container').hide();
            }
        });

        // Image upload preview
        $('#dokumentasi').change(function(){
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e){
                var img = new Image();
                img.src = e.target.result;
                img.onload = function(){
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');
                    var MAX_WIDTH = 300;
                    var MAX_HEIGHT = 300;
                    var width = img.width;
                    var height = img.height;
                    if (width > height) {
                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }
                    } else {
                        if (height > MAX_HEIGHT) {
                            width *= MAX_HEIGHT / height;
                            height = MAX_HEIGHT;
                        }
                    }
                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(img, 0, 0, width, height);
                    var dataurl = canvas.toDataURL('image/png');
                    $('.img-container').html('<img src="'+dataurl+'" class="img-fluid" alt="Responsive image">');
                }
            }
            reader.readAsDataURL(file);
        });

        // VALIDATION
        // Tutup Laporan Validation
        $('#tutup-laporan').click(function(){
            if($('#immediate').val() == ''){
                $('#immediate-error').html('Harap isi immediate action');
            } else {
                $('#immediate-error').html('');
            }
            if($('#pencegahan').val() == ''){
                $('#pencegahan-error').html('Harap isi langkah pencegahan');
            } else {
                $('#pencegahan-error').html('');
            }
            if($('#dokumentasi').val() == ''){
                $('#dokumentasi-error').html('Harap masukkan dokumentasi');
            } else {
                $('#dokumentasi-error').html('');
            }
            if($('#immediate').val() != '' && $('#pencegahan').val() != '' && $('#dokumentasi').val() != ''){
              // TODO: Submit the form
            }
            // Click the cancelModal
            $('#cancelModal').click();
        });
    </script>

    <!-- Upload Preview -->
    <script>
        // If id jenis have value Lain-lain, show input jenis lain
        $('#jenis').change(function(){
            if($(this).val() == 'Lain-lain'){
                $('#jenis-lain-container').show();
            } else {
                $('#jenis-lain-container').hide();
            }
        });

        // When upload image, show preview, keep the ratio to original
        $('#dokumentasi').change(function(){
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(e){
                var img = new Image();
                img.src = e.target.result;
                img.onload = function(){
                    var canvas = document.createElement('canvas');
                    var ctx = canvas.getContext('2d');
                    var MAX_WIDTH = 300;
                    var MAX_HEIGHT = 300;
                    var width = img.width;
                    var height = img.height;
                    if (width > height) {
                        if (width > MAX_WIDTH) {
                            height *= MAX_WIDTH / width;
                            width = MAX_WIDTH;
                        }
                    } else {
                        if (height > MAX_HEIGHT) {
                            width *= MAX_HEIGHT / height;
                            height = MAX_HEIGHT;
                        }
                    }
                    canvas.width = width;
                    canvas.height = height;
                    ctx.drawImage(img, 0, 0, width, height);
                    var dataurl = canvas.toDataURL('image/png');
                    $('.img-container').html('<img src="'+dataurl+'" class="img-fluid" alt="Responsive image">');
                }
            }
            reader.readAsDataURL(file);
        });


    </script>

    <!-- Bootstrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    <!-- Modal Data -->
    <script>
        const editModal = document.getElementById('editModal')
        editModal.addEventListener('show.bs.modal', event => {
        // Button that triggered the modal
        const button = event.relatedTarget
        // Extract info from data-bs-* attributes
        const recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        const modalTitle = editModal.querySelector('.modal-title')
        const modalBodyInput = editModal.querySelector('.modal-body input')

        modalTitle.textContent = `New message to ${recipient}`
        modalBodyInput.value = recipient
        })
    </script>

  </body>
</html>