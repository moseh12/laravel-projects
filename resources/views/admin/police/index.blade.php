@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
        </a>
    </div>


              <div class="container mt-5">
        <!-- Form Heading -->
        <div class="text-center mb-4">
            <h1 class="h3 text-primary">Report a Case</h1>
            <p class="text-muted">Please fill in the details below to report your case.</p>
        </div>

        <!-- Report Case Form -->
        <div class="card shadow">
            <div class="card-body">
                <form action="/submit_case" method="POST">
                    <!-- Personal Information Section -->
                    <h5 class="text-primary mb-3">Personal Information</h5>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="contactNumber" class="form-label">Contact Number</label>
                            <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter your contact number" required>
                        </div>
                    </div>

                    <!-- Case Details Section -->
                    <h5 class="text-primary mb-3">Case Details</h5>
                    <div class="mb-3">
                        <label for="caseType" class="form-label">Case Type</label>
                        <select class="form-select" id="caseType" name="caseType" required>
                            <option value="" disabled selected>Select case type</option>
                            <option value="theft">Theft</option>
                            <option value="assault">Assault</option>
                            <option value="fraud">Fraud</option>
                            <option value="property_damage">Property Damage</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="incidentDate" class="form-label">Incident Date</label>
                        <input type="date" class="form-control" id="incidentDate" name="incidentDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="location" class="form-label">Incident Location</label>
                        <input type="text" class="form-control" id="location" name="location" placeholder="Enter location of incident" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Detailed Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="Provide a detailed description of the incident" required></textarea>
                    </div>

                    <!-- File Upload Section -->
                    <h5 class="text-primary mb-3">Attachments (Optional)</h5>
                    <div class="mb-3">
                        <label for="evidence" class="form-label">Upload Evidence</label>
                        <input type="file" class="form-control" id="evidence" name="evidence">
                    </div>

                    <!-- Submit Button -->
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Submit Case</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
               <!-- Footer -->





@endsection
