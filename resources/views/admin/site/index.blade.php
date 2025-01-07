@extends('layouts.admin')


@section('content')

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      margin: 0;
      padding: 0;
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
      max-width: 800px;
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
    form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }
    label {
      font-weight: bold;
    }
    input, textarea {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 1rem;
    }
    input[type="file"] {
      padding: 0.4rem;
    }
    button {
      padding: 0.8rem;
      font-size: 1rem;
      color: white;
      background-color: #007BFF;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>

  <header>
    <h1>Website Settings</h1>
  </header>
  <main>
    <form>
      <!-- Website Title -->
      <div>
        <label for="website-title">Website Title</label>
        <input type="text" id="website-title" name="website-title" placeholder="Enter website title" required>
      </div>

      <!-- Website Logo -->
      <div>
        <label for="website-logo">Website Logo</label>
        <input type="file" id="website-logo" name="website-logo" accept="image/*">
      </div>

      <!-- Favicon -->
      <div>
        <label for="website-favicon">Website Favicon</label>
        <input type="file" id="website-favicon" name="website-favicon" accept="image/*">
      </div>

      <!-- Meta Description -->
      <div>
        <label for="meta-description">Meta Description</label>
        <textarea id="meta-description" name="meta-description" rows="4" placeholder="Enter a brief meta description for your website"></textarea>
      </div>

      <!-- Social Media Links -->
      <h2>Social Media Links</h2>
      <div>
        <label for="facebook-link">Facebook</label>
        <input type="url" id="facebook-link" name="facebook-link" placeholder="Enter Facebook link">
      </div>
      <div>
        <label for="twitter-link">Twitter</label>
        <input type="url" id="twitter-link" name="twitter-link" placeholder="Enter Twitter link">
      </div>
      <div>
        <label for="instagram-link">Instagram</label>
        <input type="url" id="instagram-link" name="instagram-link" placeholder="Enter Instagram link">
      </div>
      <div>
        <label for="linkedin-link">LinkedIn</label>
        <input type="url" id="linkedin-link" name="linkedin-link" placeholder="Enter LinkedIn link">
      </div>

      <!-- Save Button -->
      <button type="submit">Save Settings</button>
    </form>
  </main>





@endsection
