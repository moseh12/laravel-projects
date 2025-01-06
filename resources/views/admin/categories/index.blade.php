@extends('layouts.admin')


@section('content')
    <div class="container-fluid">

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

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Categories</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="bi bi-plus fa-sm text-white-50"></i> ADD Categories</a>
        </div>

        <!-- Content Row -->
        <div class="container">
            <div class="header">
                <div class="search-bar">
                    <label for="search">Search: </label>
                    <input type="text" id="search" placeholder="Search...">
                </div>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Subcategories</th>
                        <th>Custom Fields</th>
                        <th>Active</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- You can loop through categories here -->
                    <tr>
                        <td>1</td>
                        <td>Category Name</td>
                        <td><img src="image-placeholder.jpg" alt="Category Image" width="50"></td>
                        <td>5</td>

                        <td>3</td>
                        <td>Yes</td>
                        <td class="action-buttons">
                            <a href="#"><i class="fas fa-edit"></i> Edit</a>
                            <a href="#"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Another Category</td>
                        <td><img src="image-placeholder.jpg" alt="Category Image" width="50"></td>
                        <td>2</td>
                        <td>1</td>
                        <td>No</td>
                        <td class="action-buttons">
                            <a href="#"><i class="fas fa-edit"></i> Edit</a>
                            <a href="#"><i class="fas fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
@endsection
