@extends('layouts.admin')


@section('content')

<style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    header {
      background-color: #4CAF50;
      color: white;
      text-align: center;
      padding: 1rem 0;
    }
    main {
      max-width: 600px;
      margin: 2rem auto;
      background: white;
      padding: 1.5rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
    }
    form label {
      display: block;
      margin: 0.5rem 0 0.2rem;
      font-weight: bold;
    }
    form input, form select, form textarea {
      width: 100%;
      padding: 0.8rem;
      margin-bottom: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    form button {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 4px;
    }
    form button:hover {
      background-color: #45a049;
    }
  </style>
</head>

  <header>
    <h1>Report Roadside Issues</h1>
  </header>
  <main>
    <form action="/submit_issue" method="post" enctype="multipart/form-data">
      <label for="issueType">Type of Issue</label>
      <select id="issueType" name="issueType" required>
        <option value="">-- Select an Issue --</option>
        <option value="pothole">Pothole</option>
        <option value="streetlight">Broken Streetlight</option>
        <option value="debris">Road Debris</option>
        <option value="other">Other</option>
      </select>

      <label for="description">Description</label>
      <textarea id="description" name="description" rows="4" placeholder="Describe the issue in detail..." required></textarea>

      <label for="location">Location</label>
      <input id="location" name="location" type="text" placeholder="Enter the location of the issue" required>

      <label for="photo">Upload Photo (Optional)</label>
      <input id="photo" name="photo" type="file" accept="image/*">

      <label for="contact">Your Contact Information</label>
      <input id="contact" name="contact" type="email" placeholder="Enter your email (optional)">

      <button type="submit">Submit Report</button>
    </form>
  </main>




@endsection
