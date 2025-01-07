<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CLASIFY ADMIN</title>

    <!-- Custom fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJd2X4L6pt6fOZ7lBZmEJ6f+9bGQ93ZBhDzzK1gLRDmcOnJw1n1X3D0E41Sg" crossorigin="anonymous">

    <!-- Custom styles -->
    <link href="{{ asset('frontend/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <div class="col-md-3 col-lg-2 bg-light p-0 h-100 d-flex flex-column">
            @include('partials.sidebar')
        </div>

        <!-- Main Content Area -->
        <div class="container-fluid col-md-9 col-lg-10 p-3 overflow-auto">
            <!-- Topbar -->
            @include('partials.navbar')

            <!-- Main content -->
            <div class="main-content">
                @yield('content')
            </div>
        </div>

    </div>

    @include('partials.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgVRvuATP1z7Jj0P4n8DQ%2Fv6TFtPfoFsHbmQQ8gfY23fqZ7z6O5p%2Bvv5n06t3%2Fh" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
</body>
</html>
