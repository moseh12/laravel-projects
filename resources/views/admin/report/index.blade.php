@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Report Reasons</h1>

</div>



    <!-- Content Row -->



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
.form-section textarea {
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


<!-- Add Report Reason Form Section -->
<div class="container">
<div class="form-section">

<form>
<!-- Reason Input -->
<label for="reason">Reason *</label>
<textarea id="reason" name="reason" rows="4" placeholder="Enter reason here" required></textarea>

<!-- Save Button -->
<button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">submit</button>
</form>
</div>

<!-- Table Section (Right) -->
<div class="table-section">
<h3>Report Reason List</h3>
<div class="search-bar">
<label for="search">Search</label>
<input type="text" id="search" name="search" placeholder="Search reasons...">
</div>
<table>
<thead>
    <tr>
        <th>ID</th>
        <th>Reason</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
    <!-- Example Row -->

</tbody>
</table>
</div>
</div>



@endsection
