@extends('layouts.admin')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Categories</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> ADD Categories</a>
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
                    <th>Image</th>
                    <th>Subcategories</th>
                    <th>Custom Fields</th>
                    <th>Active</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
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

        <!-- Earnings (Monthly) Card Example -->




    <!-- Content Row -->




<!-- End of Main Content -->
            </div>
<!-- Footer -->


@endsection
