@extends('layouts.admin')


@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cities</h1>

</div>



    <!-- Content Row -->
    <div class="container">
        <div class="header">

            <div class="search-bar">
                <label for="search">Search: </label>
                <input type="text" id="search" placeholder="Search...">
            </div>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>CountryName</th>
                    <th>StateName</th>
                    <th>Custom Fields</th>

                </tr>
            </thead>
            <tbody>
                <tr>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

        <!-- Earnings (Monthly) Card Example -->




    <!-- Content Row -->




<!-- End of Main Content -->
            </div>
<!-- Footer -->
<footer class="sticky-footer bg-white">
<div class="container my-auto">
    <div class="copyright text-center my-auto">
        <span>Copyright &copy; Your Website 2021</span>
    </div>
</div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Logout</a>
</div>
</div>
</div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
<style>
body {
font-family: Arial, sans-serif;
margin: 20px;
}
.container {
max-width: 900px;
margin: 0 auto;
}
.header {
display: flex;
justify-content: space-between;
align-items: center;
margin-bottom: 20px;
}
.header h1 {
font-size: 24px;
}
.search-bar input {
padding: 8px;
width: 200px;
}
table {
width: 100%;
border-collapse: collapse;
}
table thead {
background-color: #f4f4f4;
}
table th, table td {
padding: 10px;
text-align: left;
border: 1px solid #ddd;
}
table tbody tr {
cursor: grab;
}
table tbody tr:hover {
background-color: #f9f9f9;
}
.action-buttons a {
margin-right: 5px;
text-decoration: none;
color: #007bff;
}
.action-buttons a:hover {
color: #0056b3;
}
</style>
</head>
<body>

</html>











@endsection
