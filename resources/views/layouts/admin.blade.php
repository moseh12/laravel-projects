<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-CLASIFY ADMIN</title>

     <!-- Custom fonts for this template-->
     <link  href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
         <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">


     <!-- Custom styles for this template-->
     <link href="{{ asset('frontend/css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- Include Bootstrap (via CDN or locally) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJd2X4L6pt6fOZ7lBZmEJ6f+9bGQ93ZBhDzzK1gLRDmcOnJw1n1X3D0E41Sg" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}"> <!-- Link to the CSS file in the public/frontend folder -->
</head>
<body id="page-top">
    @include('partials.navbar')
    <div id="wrapper">
        <div class="row">

            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 p-3 bg-light">
                @include('partials.sidebar') <!-- Include the sidebar partial -->

            </div>

        </div>
            <!-- Main content area -->
            <div class="col-md-9 col-lg-10">
                <div class="main-content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</div>
    @include('partials.footer') <!-- Include the footer partial -->

    <!-- Include JavaScript files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-OgVRvuATP1z7Jj0P4n8DQ%2Fv6TFtPfoFsHbmQQ8gfY23fqZ7z6O5p%2Bvv5n06t3%2Fh" crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script> <!-- Link to the JS file in the public/frontend folder -->
</body>
</html>
