@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Payment Transactions</h1>

</div>



    <!-- Content Row -->




        <!-- Earnings (Monthly) Card Example -->

        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 20px;
            }
            h1 {
                margin-top: 0;
            }
            .table-section {
                margin-top: 20px;
            }
            .search-bar {
                margin-bottom: 20px;
            }
            .search-bar label {
                font-weight: bold;
                margin-right: 10px;
            }
            .search-bar input[type="text"] {
                padding: 8px;
                width: 300px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f9f9f9;
            }
            tr:hover {
                background-color: #f1f1f1;
            }
            td {
                text-align: center;
            }
        </style>



        <!-- Search Bar -->
        <div class="search-bar">
            <label for="search">Search:</label>
            <input type="text" id="search" placeholder="Search by ID, User Name, Package Name">
        </div>

        <!-- Table Section -->
        <div class="table-section">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Amount</th>
                        <th>Payment Gateway</th>
                        <th>Payment Status</th>
                        <th>Created At</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="7" style="text-align: center;">No matching records found</td>
                    </tr>
                </tbody>
            </table>
        </div>


    <!-- Content Row -->




<!-- End of Main Content -->
            </div>

@endsection
