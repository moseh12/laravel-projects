@extends('layouts.admin')


@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Create Tips</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> ADD Tips</a>
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
                    <th>Description</th>
                    <th>Active</th>
                    <th>Action</th>

                </tr>
            </thead>

        </table>
    </div>

        <!-- Earnings (Monthly) Card Example -->









@endsection
