@extends('layouts.admin')


@section('content')



<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .container {
        display: flex;
        gap: 20px;
    }
    .form-section {
        flex: 1;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    .table-section {
        flex: 2;
    }
    h1 {
        margin-top: 0;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"],
    .form-group select {
        width: 100%;
        padding: 8px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group .radio-group {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .form-group .radio-group label {
        font-weight: normal;
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
    .actions button {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .actions .edit {
        background-color: #007bff;
        color: white;
    }
    .actions .delete {
        background-color: #dc3545;
        color: white;
    }
</style>
</head>
<body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .container {
        display: flex;
        gap: 20px;
    }
    .form-section {
        flex: 1;
        border: 1px solid #ccc;
        padding: 15px;
        border-radius: 8px;
        background-color: #f9f9f9;
    }
    .table-section {
        flex: 2;
    }
    h1 {
        margin-top: 0;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"],
    .form-group select {
        width: 100%;
        padding: 8px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    .form-group .radio-group {
        display: flex;
        gap: 10px;
        align-items: center;
    }
    .form-group .radio-group label {
        font-weight: normal;
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
    .actions button {
        padding: 5px 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    .actions .edit {
        background-color: #007bff;
        color: white;
    }
    .actions .delete {
        background-color: #dc3545;
        color: white;
    }
</style>
</head>
<body>
<div class="container">
<h1>Advertisement PACKAGE</h1>
</div>
<div class="container">
    <!-- Form Section -->


    <div class="form-section">


        <form>


            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="packageName">Package Name</label>
                <input type="text" id="packageName" placeholder="Enter Package Name">
            </div>
            <div class="form-group">
                <label for="iosProductId">IOS Product ID</label>
                <input type="text" id="iosProductId" placeholder="Enter IOS Product ID">
            </div>
            <div class="form-group">
                <label for="androidProductId">Android Product ID</label>
                <input type="text" id="androidProductId" placeholder="Enter Android Product ID">
            </div>
            <div class="form-group">
                <label for="price">Price ($)</label>
                <input type="number" id="price" placeholder="0">
            </div>
            <div class="form-group">
                <label for="discount">Discount (%)</label>
                <input type="number" id="discount" placeholder="0">
            </div>
            <div class="form-group">
                <label for="finalPrice">Final Price ($)</label>
                <input type="number" id="finalPrice" placeholder="0" readonly>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" id="description" placeholder="Enter Description">
            </div>
            <div class="form-group">
                <label for="days">Days</label>
                <div class="radio-group">
                    <input type="radio" id="daysLimited" name="days" value="limited">
                    <label for="daysLimited">Days</label>
                    <input type="radio" id="daysUnlimited" name="days" value="unlimited">
                    <label for="daysUnlimited">Unlimited</label>
                </div>
            </div>
            <div class="form-group">
                <label for="itemLimit">Item Limit</label>
                <div class="radio-group">
                    <input type="radio" id="itemsLimited" name="itemLimit" value="limited">
                    <label for="itemsLimited">Number</label>
                    <input type="radio" id="itemsUnlimited" name="itemLimit" value="unlimited">
                    <label for="itemsUnlimited">Unlimited</label>
                </div>
            </div>
            <button type="submit">Save</button>

        </form>
    </div>

    <!-- Table Section -->
    <div class="table-section">

        <div>
            <label for="search">Search:</label>
            <input type="text" id="search" placeholder="Search by Name, ID, etc.">
        </div>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price ($)</th>
                    <th>Discount (%)</th>
                    <th>Final Price ($)</th>
                    <th>Days</th>
                    <th>Item Limit</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="10" style="text-align: center;">No matching records found</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>



@endsection
