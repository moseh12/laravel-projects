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
      background-color: #0078D7;
      color: white;
      text-align: center;
      padding: 1rem 0;
    }
    main {
      max-width: 800px;
      margin: 2rem auto;
      background: white;
      padding: 1.5rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      border-radius: 8px;
    }
    h2 {
      margin-top: 2rem;
      color: #333;
    }
    .setting-group {
      margin-bottom: 2rem;
    }
    .setting-group label {
      display: block;
      font-weight: bold;
      margin: 0.5rem 0 0.2rem;
    }
    .setting-group input[type="text"],
    .setting-group input[type="email"],
    .setting-group input[type="password"],
    .setting-group select {
      width: 100%;
      padding: 0.8rem;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-bottom: 1rem;
    }
    .setting-group input[type="checkbox"] {
      margin-right: 0.5rem;
    }
    .button-container {
      text-align: right;
    }
    button {
      background-color: #0078D7;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 4px;
    }
    button:hover {
      background-color: #005BB5;
    }
  </style>
</head>
<body>
  <header>
    <h1>General Settings</h1>
  </header>
  <main>
    <form action="/update_settings" method="post">
      <!-- Account Settings -->
      <section class="setting-group">
        <h2>Account Settings</h2>
        <label for="username">Username</label>
        <input id="username" name="username" type="text" placeholder="Enter your username" required>

        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input id="password" name="password" type="password" placeholder="Enter a new password">
      </section>

      <!-- Notification Settings -->
      <section class="setting-group">
        <h2>Notification Settings</h2>
        <label>
          <input type="checkbox" name="notifications_email" checked>
          Receive email notifications
        </label>
        <label>
          <input type="checkbox" name="notifications_sms">
          Receive SMS notifications
        </label>
      </section>

      <!-- Privacy Settings -->
      <section class="setting-group">
        <h2>Privacy Settings</h2>
        <label>
          <input type="checkbox" name="public_profile">
          Make my profile public
        </label>
        <label>
          <input type="checkbox" name="data_sharing">
          Allow data sharing with third parties
        </label>
      </section>

      <!-- Theme Settings -->
      <section class="setting-group">
        <h2>Theme Settings</h2>
        <label for="theme">Select Theme</label>
        <select id="theme" name="theme">
          <option value="light">Light</option>
          <option value="dark">Dark</option>
          <option value="system">System Default</option>
        </select>
      </section>

      <!-- Save Button -->
      <div class="button-container">
        <button type="submit">Save Changes</button>
      </div>
    </form>
  </main>



@endsection
