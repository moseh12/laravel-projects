@extends('layouts.admin')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Roles Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    header {
      background-color: #007BFF;
      color: white;
      padding: 1rem;
      text-align: center;
    }
    header h1 {
      margin: 0;
    }
    main {
      max-width: 900px;
      margin: 2rem auto;
      padding: 1rem;
      background: white;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
      color: #007BFF;
      margin-bottom: 1rem;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 2rem;
    }
    table th, table td {
      border: 1px solid #ccc;
      padding: 0.8rem;
      text-align: left;
    }
    table th {
      background-color: #007BFF;
      color: white;
    }
    .action-buttons {
      display: flex;
      gap: 0.5rem;
    }
    .action-buttons button {
      padding: 0.4rem 0.8rem;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    .edit-button {
      background-color: #FFC107;
      color: white;
    }
    .edit-button:hover {
      background-color: #E0A800;
    }
    .delete-button {
      background-color: #DC3545;
      color: white;
    }
    .delete-button:hover {
      background-color: #C82333;
    }
    form {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
    }
    label {
      font-weight: bold;
      width: 100%;
    }
    input {
      width: calc(100% - 2rem);
      padding: 0.8rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    button[type="submit"] {
      padding: 0.8rem;
      font-size: 1rem;
      color: white;
      background-color: #007BFF;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <header>
    <h1>Roles Management</h1>
  </header>

  <main>
    <!-- Table of Existing Roles -->
    <h2>Existing Roles</h2>
    <table>
      <thead>
        <tr>
          <th>#</th>
          <th>Role Name</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Administrator</td>
          <td>
            <div class="action-buttons">
              <button class="edit-button">Edit</button>
              <button class="delete-button">Delete</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Editor</td>
          <td>
            <div class="action-buttons">
              <button class="edit-button">Edit</button>
              <button class="delete-button">Delete</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Viewer</td>
          <td>
            <div class="action-buttons">
              <button class="edit-button">Edit</button>
              <button class="delete-button">Delete</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Add New Role -->
    <h2>Add New Role</h2>
    <form>
      <div>
        <label for="role-name">Role Name</label>
        <input type="text" id="role-name" name="role-name" placeholder="Enter role name" required>
      </div>
      <button type="submit">Add Role</button>
    </form>
  </main>
</body>
</html>





@endsection
