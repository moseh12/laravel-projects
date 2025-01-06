@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Items</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-plus fa-sm text-white-50"></i> REPORT </a>

</div>

<div class="table-container">

    <div class="controls">
        <div>
            <label for="status">Status:</label>
            <select id="status">
                <option value="all">All</option>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>

        </div>
        <div>
            <label for="search">Search:</label>
            <input type="text" id="search" placeholder="Enter search term...">
        </div>

    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>User</th>
                <th>Price</th>
                <th>Image</th>
                <th>Other Images</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Active</th>
                <th>Rejected Reason</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Sample Item</td>
                <td>Sample Description</td>
                <td>John Doe</td>
                <td>$100</td>
                <td><img src="placeholder.jpg" alt="Image" width="50"></td>
                <td><img src="placeholder.jpg" alt="Other Image" width="50"></td>
                <td>USA</td>
                <td>California</td>
                <td>Los Angeles</td>
                <td>Yes</td>
                <td>-</td>
                <td class="action-btns">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Another Item</td>
                <td>Another Description</td>
                <td>Jane Smith</td>
                <td>$200</td>
                <td><img src="placeholder.jpg" alt="Image" width="50"></td>
                <td><img src="placeholder.jpg" alt="Other Image" width="50"></td>
                <td>Canada</td>
                <td>Ontario</td>
                <td>Toronto</td>
                <td>No</td>
                <td>Insufficient Details</td>
                <td class="action-btns">
                    <button class="edit">Edit</button>
                    <button class="delete">Delete</button>
                </td>
            </tr>
            <!-- Additional rows can go here -->
        </tbody>
    </table>
</div>





<!-- End of Main Content -->
            </div>




            @endsection
