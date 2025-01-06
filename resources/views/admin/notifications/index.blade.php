@extends('layouts.admin')


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Send Notifications</h1>

</div>



    <!-- Content Row -->
    <div class="container">
        <div class="header">


        </div>
        <table>
            <thead>

            </thead>
            <tbody>



                <!-- Add more rows as needed -->
            </tbody>
        </table>
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
gap: 20px;
}
.form-section {
width: 45%;
border: 1px solid #ccc;
border-radius: 5px;
padding: 20px;
}
.form-section input,
.form-section select,
.form-section textarea {
width: 100%;
padding: 10px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 5px;
}
.form-section label {
font-weight: bold;
}
.form-section button {
padding: 10px 20px;
background-color: #007bff;
color: white;
border: none;
border-radius: 5px;
cursor: pointer;
}
.form-section button:hover {
background-color: #0056b3;
}
.table-section {
width: 50%;
}
.table-section input {
width: 100%;
padding: 10px;
margin: 10px 0;
border: 1px solid #ccc;
border-radius: 5px;
}
table {
width: 100%;
border-collapse: collapse;
margin-top: 20px;
}
th, td {
border: 1px solid #ddd;
padding: 10px;
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
</style>



<div class="container">

<!-- Form Section -->
<div class="form-section">
<h3>Create Notification</h3>
<form>
<!-- Select User -->
<label for="user">Select User</label>
<select id="user" name="user">
<option value="">All</option>
<option value="user1">User 1</option>
<option value="user2">User 2</option>
</select>

<!-- Title -->
<label for="title">Title *</label>
<input type="text" id="title" name="title" placeholder="Enter notification title" required>

<!-- Message -->
<label for="message">Message *</label>
<textarea id="message" name="message" placeholder="Enter notification message" rows="4" required></textarea>

<!-- Include Image -->
<label for="include-image">Include Image</label>
<input type="file" id="include-image" name="include-image">

<!-- Select Item -->
<label for="item">Item</label>
<select id="item" name="item">
<option value="">Select Item</option>
<option value="item1">Item 1</option>
<option value="item2">Item 2</option>
</select>

<!-- Submit Button -->
<button type="submit">Send Notification</button>
</form>
</div>

<!-- Table Section -->
<div class="table-section">
<h3>Notification History</h3>
<input type="text" id="search" name="search" placeholder="Search notifications...">
<table>
<thead>
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Message</th>
    <th>Image</th>
    <th>Send To</th>
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

<!-- Notification Log -->
<div class="table-section">
<h3>Notification Log</h3>
<input type="text" id="log-search" name="log-search" placeholder="Search logs...">
<table>
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Number</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="3" style="text-align: center;">No matching records found</td>
</tr>
</tbody>
</table>
</div>



@endsection
