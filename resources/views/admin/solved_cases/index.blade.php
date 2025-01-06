@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="container mt-5">
        <!-- Page Header -->
        <div class="text-center mb-4">
            <h1 class="h3 text-primary">Solved Cases</h1>
            <p class="text-muted">A summary of all resolved cases.</p>
        </div>

        <!-- Solved Cases Table -->
        <div class="card shadow">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List of Solved Cases</h6>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Case ID</th>
                            <th>Case Type</th>
                            <th>Description</th>
                            <th>Resolved By</th>
                            <th>Resolution Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#00123</td>
                            <td>Theft</td>
                            <td>Stolen vehicle recovered from downtown.</td>
                            <td>Officer James Smith</td>
                            <td>2025-01-01</td>
                            <td><span class="badge badge-success">Solved</span></td>
                        </tr>
                        <tr>
                            <td>#00124</td>
                            <td>Fraud</td>
                            <td>Fraudulent activity tracked and stopped.</td>
                            <td>Officer Emily Davis</td>
                            <td>2025-01-02</td>
                            <td><span class="badge badge-success">Solved</span></td>
                        </tr>
                        <tr>
                            <td>#00125</td>
                            <td>Assault</td>
                            <td>Perpetrator arrested and victim compensated.</td>
                            <td>Officer Michael Brown</td>
                            <td>2025-01-03</td>
                            <td><span class="badge badge-success">Solved</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

               <!-- Footer -->



@endsection
