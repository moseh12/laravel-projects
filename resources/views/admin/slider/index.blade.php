@extends('layouts.admin')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Slider</h1>

</div>



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
        }
        .form-section, .table-section {
            width: 48%;
        }
        .form-section {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .table-section {
            padding: 20px;
        }
        .form-section input[type="text"],
        .form-section input[type="file"],
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
        .form-section button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-section button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
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
        .or-label {
text-align: center;
font-size: 16px;
margin: 10px 0;
}
    </style>


    <div class="container">
        <!-- Form Section (Left) -->
        <div class="form-section">

            <form>
                <!-- Image Upload -->
                <label for="image">Image</label>
                <input type="file" id="image" name="image">

                <!-- Item Selection -->
                <label for="item">Item</label>
                <select id="item" name="item">
                    <option value="">Select Item</option>
                    <option value="item1">Item 1</option>
                    <option value="item2">Item 2</option>
                </select>
                <div class="or-label">OR</div>

                <!-- Category Selection -->
                <label for="category">Category</label>
                <select id="category" name="category">
                    <option value="">Select Category</option>
                    <option value="category1">Category 1</option>
                    <option value="category2">Category 2</option>
                </select>
                <div class="or-label">OR</div>
                <!-- Third Party Link -->
                <label for="thirdparty">Third Party Link</label>
                <input type="text" id="thirdparty" name="thirdparty" placeholder="Enter Link">

                <!-- Submit Button -->
                <button type="submit">Save</button>
            </form>
        </div>

        <!-- Table Section (Right) -->
        <div class="table-section">
            <h2>Slider Listings</h2>
            <div class="search-bar">
                <label for="search">Search:</label>
                <input type="text" id="search" placeholder="Search by ID, Name, or Link">
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Type</th>
                        <th>Name</th>
                        <th>Third Party Link</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" style="text-align: center;">No matching records found</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>




<!-- End of Main Content -->
            </div>


@endsection
