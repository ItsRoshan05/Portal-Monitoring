<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kaiadmin - Bootstrap 5 Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
    <link rel="icon" href="admin/assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('admin/assets/js/plugin/webfont/webfont.min.js') }}"></script>
    @yield('css')
    <script>
        var fontsCssUrl = "{{ asset('admin/assets/css/fonts.min.css') }}";
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: [fontsCssUrl],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });

    </script>
    <style>
        #preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}

.spinner {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #6a0dad; /* Purple */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    </style>
<!-- CSS Files -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/plugins.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/css/kaiadmin.css') }}" />
<!-- <link rel="stylesheet" href="{{ asset('admin/assets/css/costume.css') }}"> -->

</head>

<body>
<div id="preloader">
        <div class="spinner"></div>
    </div>

    <div class="wrapper">
        <!-- Sidebar -->
        @include('layouts.admin.siderbar')
        <!-- End Sidebar -->

        <div class="main-panel">
            @include('layouts.admin.header')

            <div class="container">
                <div class="page-inner">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <!-- header konten   -->
                        <div>
                            <h3 class="fw-bold mb-3">@yield('headingheader')</h3>
                        </div>
                    </div>
                    <!-- Main konten  -->
                    @yield('mainkoten')
            </div>

            <footer class="footer">
                <div class="container-fluid d-flex justify-content-between">
                <div class="copyright">
                        2024, made with <i class="fa fa-heart heart text-danger"></i> by
                        <a href="http://www.themekita.com">ThemeKita</a> And Develop by Ro'id Hakim
                    </div>
                </div>
            </footer>
        </div>


    </div>
    <!-- Core JS Files -->
<script src="{{ asset('admin/assets/js/core/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/kostum.js') }}"></script>

<!-- jQuery Scrollbar -->
<script src="{{ asset('admin/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ asset('admin/assets/js/plugin/chart.js/chart.min.js') }}"></script>

<!-- jQuery Sparkline -->
<script src="{{ asset('admin/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

<!-- Chart Circle -->
<script src="{{ asset('admin/assets/js/plugin/chart-circle/circles.min.js') }}"></script>

<!-- Datatables -->
<script src="{{ asset('admin/assets/js/plugin/datatables/datatables.min.js') }}"></script>

<!-- Bootstrap Notify -->
<script src="{{ asset('admin/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

<!-- jQuery Vector Maps -->
<script src="{{ asset('admin/assets/js/plugin/jsvectormap/jsvectormap.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/plugin/jsvectormap/world.js') }}"></script>

<!-- Sweet Alert -->
<script src="{{ asset('admin/assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

<!-- Kaiadmin JS -->
<script src="{{ asset('admin/assets/js/kaiadmin.min.js') }}"></script>

<script>
    window.addEventListener('load', () => {
    document.getElementById('preloader').style.display = 'none';
    document.getElementById('content').style.display = 'block';
        });
</script>
<!-- Kaiadmin DEMO methods, don't include it in your project! -->
<!-- <script src="{{ asset('admin/assets/js/setting-demo.js') }}"></script>
<script src="{{ asset('admin/assets/js/demo.js') }}"></script> -->
<!-- <script>
        $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#177dff",
            fillColor: "rgba(23, 125, 255, 0.14)",
        });

        $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#f3545d",
            fillColor: "rgba(243, 84, 93, .14)",
        });

        $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: "line",
            height: "70",
            width: "100%",
            lineWidth: "2",
            lineColor: "#ffa534",
            fillColor: "rgba(255, 165, 52, .14)",
        });

    </script> -->
    @yield('js')
</body>

</html>
