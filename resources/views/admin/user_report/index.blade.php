@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">User Report</h1>

</div>



    <!-- Content Row -->
    <div class="container">
        <div class="header">


    </div>
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
margin-bottom: 20px;
}
.form-section {
width: 45%;
}
.form-section select,
.form-section input {
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
</head>
<body>


<!-- Filter Section -->
<div class="container">
<div class="form-section">
<h3>Filter Reports</h3>
<form>
<!-- User Selection -->
<label for="user">User</label>
<select id="user" name="user">
    <option value="">All</option>
    <option value="user1">User 1</option>
    <option value="user2">User 2</option>
    <option value="user3">User 3</option>
</select>

<!-- Item Selection -->
<label for="item">Item</label>
<select id="item" name="item">
    <option value="">All</option>
    <option value="item1">Item 1</option>
    <option value="item2">Item 2</option>
    <option value="item3">Item 3</option>
</select>

<!-- Search Button -->
<button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer;">Search</button>
</form>
</div>

<!-- Table Section (Right) -->
<div class="table-section">
<h3>Report List</h3>
<div class="search-bar">
<label for="search">Search</label>
<input type="text" id="search" name="search" placeholder="Search reports...">
</div>
<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Reason</th>
        <th>User</th>
        <th>Item</th>
        <th>Item Status</th>
        <th>User Status</th>
    </tr>
</thead>
<tbody>
    <!-- Example Row -->



        <td colspan="6" style="text-align: center;">No matching records found</td>
    </tr>
</tbody>
</table>
</div>
</div>

@endsection
