@extends('layouts.admin')


@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Taxation Settings</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
    }
    header {
      background-color: #343a40;
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
    .setting-group select,
    .setting-group input[type="number"] {
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
      background-color: #343a40;
      color: white;
      border: none;
      padding: 0.8rem 1.5rem;
      cursor: pointer;
      font-size: 1rem;
      border-radius: 4px;
    }
    button:hover {
      background-color: #495057;
    }
  </style>
</head>
<body>
  <header>
    <h1>Taxation Settings</h1>
  </header>
  <main>
    <form action="/update_taxation_settings" method="post">
      <!-- Tax Rate Settings -->
      <section class="setting-group">
        <h2>Tax Rates</h2>
        <label for="defaultTaxRate">Default Tax Rate (%)</label>
        <input id="defaultTaxRate" name="defaultTaxRate" type="number" step="0.01" placeholder="e.g., 18.00" required>

        <label for="regionTaxRate">Tax Rate by Region</label>
        <select id="regionTaxRate" name="regionTaxRate" required>
          <option value="">-- Select a Region --</option>
          <option value="US">United States - 10%</option>
          <option value="EU">European Union - 20%</option>
          <option value="IN">India - 18%</option>
          <option value="other">Other</option>
        </select>

        <label for="customTaxRate">Custom Tax Rate (Optional)</label>
        <input id="customTaxRate" name="customTaxRate" type="number" step="0.01" placeholder="Enter custom rate">
      </section>

      <!-- Tax Rules -->
      <section class="setting-group">
        <h2>Tax Rules</h2>
        <label>
          <input type="checkbox" name="applyTaxOnShipping">
          Apply tax on shipping charges
        </label>
        <label>
          <input type="checkbox" name="roundUpTaxes">
          Round up taxes to the nearest whole number
        </label>
        <label>
          <input type="checkbox" name="enableTaxExempt">
          Allow tax-exempt transactions
        </label>
      </section>

      <!-- Tax Filing and Reporting -->
      <section class="setting-group">
        <h2>Tax Filing & Reporting</h2>
        <label for="taxFilingFrequency">Filing Frequency</label>
        <select id="taxFilingFrequency" name="taxFilingFrequency">
          <option value="monthly">Monthly</option>
          <option value="quarterly">Quarterly</option>
          <option value="annually">Annually</option>
        </select>

        <label for="reportingCurrency">Reporting Currency</label>
        <select id="reportingCurrency" name="reportingCurrency">
          <option value="usd">USD - US Dollar</option>
          <option value="eur">EUR - Euro</option>
          <option value="inr">INR - Indian Rupee</option>
          <option value="gbp">GBP - British Pound</option>
        </select>
      </section>

      <!-- Save Button -->
      <div class="button-container">
        <button type="submit">Save Changes</button>
      </div>
    </form>
  </main>





@endsection
