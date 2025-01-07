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
      background-color: #007BFF;
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
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 4px;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <header>
    <h1>Currency Settings</h1>
  </header>
  <main>
    <form action="/update_currency_settings" method="post">
      <!-- Default Currency -->
      <section class="setting-group">
        <h2>Default Currency</h2>
        <label for="defaultCurrency">Select Default Currency</label>
        <select id="defaultCurrency" name="defaultCurrency" required>
          <option value="">-- Select a Currency --</option>
          <option value="USD">USD - United States Dollar</option>
          <option value="EUR">EUR - Euro</option>
          <option value="GBP">GBP - British Pound</option>
          <option value="INR">INR - Indian Rupee</option>
          <option value="JPY">JPY - Japanese Yen</option>
          <option value="AUD">AUD - Australian Dollar</option>
        </select>
      </section>

      <!-- Supported Currencies -->
      <section class="setting-group">
        <h2>Supported Currencies</h2>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="USD">
          USD - United States Dollar
        </label>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="EUR">
          EUR - Euro
        </label>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="GBP">
          GBP - British Pound
        </label>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="INR">
          INR - Indian Rupee
        </label>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="JPY">
          JPY - Japanese Yen
        </label>
        <label>
          <input type="checkbox" name="supportedCurrencies[]" value="AUD">
          AUD - Australian Dollar
        </label>
      </section>

      <!-- Currency Formatting -->
      <section class="setting-group">
        <h2>Currency Formatting</h2>
        <label for="decimalSeparator">Decimal Separator</label>
        <select id="decimalSeparator" name="decimalSeparator" required>
          <option value=".">Dot (.)</option>
          <option value=",">Comma (,)</option>
        </select>

        <label for="thousandSeparator">Thousand Separator</label>
        <select id="thousandSeparator" name="thousandSeparator" required>
          <option value=",">Comma (,)</option>
          <option value=".">Dot (.)</option>
          <option value=" ">Space</option>
        </select>
      </section>

      <!-- Conversion Rates -->
      <section class="setting-group">
        <h2>Exchange Rates</h2>
        <label for="conversionRate">Enter Conversion Rate (to Default Currency)</label>
        <input id="conversionRate" name="conversionRate" type="text" placeholder="e.g., 1 USD = 0.85 EUR">
      </section>

      <!-- Save Button -->
      <div class="button-container">
        <button type="submit">Save Changes</button>
      </div>
    </form>
  </main>





@endsection
