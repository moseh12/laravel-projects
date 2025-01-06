@extends('layouts.admin')


@section('content')


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Area</h1>

</div>



    <!-- Content Row -->

        <table>
            <thead>

            </thead>
            <tbody>
                <tr>

                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

        <!-- Earnings (Monthly) Card Example -->


            <style>
                body {
                    font-family: Arial, sans-serif;
                    margin: 20px;
                }
                h1 {
                    margin-top: 0;
                }
                .container {
                    display: flex;
                    justify-content: space-between;
                    margin-bottom: 20px;
                }
                .form-section {
                    width: 45%;
                }
                .form-section input,
                .form-section select {
                    width: 100%;
                    padding: 8px;
                    margin: 10px 0;
                    border: 1px solid #ccc;
                    border-radius: 4px;
                }
                .form-section label {
                    font-weight: bold;
                }
                .table-section {
                    width: 50%;
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
                .search-bar {
                    margin-bottom: 10px;
                }
            </style>



            <!-- Add Area Form Section -->
            <div class="container">
                <div class="form-section">
                    <h3>Add Area</h3>
                    <form>
                        <!-- Country Selection -->
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="">Select Country</option>
                            <option value="usa">USA</option>
                            <option value="india">India</option>
                            <option value="canada">Canada</option>
                            <option value="uk">UK</option>
                        </select>

                        <!-- State Selection -->
                        <label for="state">State</label>
                        <select id="state" name="state">
                            <option value="">Select State</option>
                            <option value="california">California</option>
                            <option value="newyork">New York</option>
                            <option value="ontario">Ontario</option>
                            <option value="london">London</option>
                        </select>

                        <!-- City Selection -->
                        <label for="city">City</label>
                        <select id="city" name="city">
                            <option value="">Select City</option>
                            <option value="losangeles">Los Angeles</option>
                            <option value="newyork">New York</option>
                            <option value="toronto">Toronto</option>
                            <option value="london">London</option>
                        </select>

                        <!-- Area Name Input -->
                        <label for="area-name">Area Name</label>
                        <input type="text" id="area-name" name="area-name" placeholder="Enter Area name" required>

                        <!-- Save Button -->
                        <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Save</button>
                    </form>
                </div>

                <!-- Table Section (Right) -->
                <div class="table-section">
                    <h3>Area List</h3>
                    <div class="search-bar">
                        <label for="search">Search</label>
                        <input type="text" id="search" name="search" placeholder="Search areas...">
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>City</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example Row -->



                            <tr>
                                <td colspan="6" style="text-align: center;">No matching records found</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

@endsection
