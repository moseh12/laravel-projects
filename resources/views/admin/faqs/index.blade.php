@extends('layouts.admin')


@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">FAQS</h1>

</div>

<div class="container mt-5">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-primary">FAQ Management</h1>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addFAQModal">
            <i class="fas fa-plus"></i> Add FAQ
        </button>
    </div>

    <!-- Search Bar -->
    <div class="mb-4">
        <input type="text" class="form-control" id="searchBar" placeholder="Search by question or answer">
    </div>

    <!-- FAQ Table -->
    <div class="card shadow">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary">FAQs</h6>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Questions</th>
                        <th>Answers</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="4" class="text-center">No matching records found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Add FAQ Modal -->
<div class="modal fade" id="addFAQModal" tabindex="-1" aria-labelledby="addFAQModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addFAQModalLabel">Add FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addFAQForm">
                    <div class="mb-3">
                        <label for="faqQuestion" class="form-label">Question</label>
                        <input type="text" class="form-control" id="faqQuestion" placeholder="Enter your question here" required>
                    </div>
                    <div class="mb-3">
                        <label for="faqAnswer" class="form-label">Answer</label>
                        <textarea class="form-control" id="faqAnswer" placeholder="Enter your answer here" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add FAQ</button>
                </form>
            </div>
        </div>
    </div>
</div>





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
