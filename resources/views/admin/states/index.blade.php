@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">States</h1>

</div>



    <!-- Content Row -->
    <div class="container">
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
                    <th>Country</th>
                    <th>Flag</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>


            </tbody>
        </table>
    </div>

        <!-- Earnings (Monthly) Card Example -->




    <!-- Content Row -->




<!-- End of Main Content -->
            </div>


</div>
<!-- End of Content Wrapper -->


@endsection
