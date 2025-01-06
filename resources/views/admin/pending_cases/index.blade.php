@extends('layouts.admin')


@section('content')

<div class="container-fluid">

    <div class="container mt-5">
       <!-- Page Header -->
       <div class="text-center mb-4">
           <h1 class="h3 text-danger">Pending Cases</h1>
           <p class="text-muted">A list of cases awaiting resolution.</p>
       </div>

       <!-- Pending Cases Table -->
       <div class="card shadow">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-danger">List of Pending Cases</h6>
           </div>
           <div class="card-body">
               <table class="table table-striped">
                   <thead>
                       <tr>
                           <th>Case ID</th>
                           <th>Case Type</th>
                           <th>Description</th>
                           <th>Assigned To</th>
                           <th>Reported Date</th>
                           <th>Status</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>#00234</td>
                           <td>Robbery</td>
                           <td>Reported robbery at the local bank.</td>
                           <td>Officer Sarah Johnson</td>
                           <td>2025-01-01</td>
                           <td><span class="badge badge-warning">Pending</span></td>
                       </tr>
                       <tr>
                           <td>#00235</td>
                           <td>Vandalism</td>
                           <td>Damaged public property in the city park.</td>
                           <td>Officer Mark Wilson</td>
                           <td>2025-01-02</td>
                           <td><span class="badge badge-warning">Pending</span></td>
                       </tr>
                       <tr>
                           <td>#00236</td>
                           <td>Cybercrime</td>
                           <td>Unauthorized access to private systems.</td>
                           <td>Officer Anna Thompson</td>
                           <td>2025-01-03</td>
                           <td><span class="badge badge-warning">Pending</span></td>
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
