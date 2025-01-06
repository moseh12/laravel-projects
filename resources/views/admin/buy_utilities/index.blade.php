@extends('layouts.admin')


@section('content')

  <!-- Begin Page Content -->
  <div class="container-fluid">

    <div class="container mt-5">

       <!-- Page Header -->
       <div class="text-center mb-4">
           <h1 class="h3 text-primary">Buy Utilities</h1>
           <p class="text-muted">Purchase your desired utilities easily.</p>
       </div>

       <!-- Utilities Options -->
       <div class="row">
           <div class="col-lg-4 mb-4">
               <div class="card shadow">

                   <div class="card-body text-center">
                        <i class="fas fa-bolt fa-3x text-warning mb-3"></i>
                       <h5 class="card-title text-primary">Electricity Tokens</h5>
                       <p class="text-muted">Top up your electricity tokens instantly.</p>
                       <a href="#" class="btn btn-primary">Buy Now</a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 mb-4">
               <div class="card shadow">

                   <div class="card-body text-center">
                        <i class="fas fa-tint fa-3x text-info mb-3"></i>
                       <h5 class="card-title text-primary">Water Bills</h5>
                       <p class="text-muted">Pay your water bills securely.</p>
                       <a href="#" class="btn btn-primary">Pay Now</a>
                   </div>
               </div>
           </div>
           <div class="col-lg-4 mb-4">
               <div class="card shadow">

                   <div class="card-body text-center">
                       <i class="fas fa-wifi fa-3x text-success mb-3"></i>
                       <h5 class="card-title text-primary">Internet Subscriptions</h5>
                       <p class="text-muted">Stay connected with affordable packages.</p>
                       <a href="#" class="btn btn-primary">Subscribe</a>
                   </div>
               </div>
           </div>
       </div>

       <!-- Utility History -->
       <div class="card shadow mt-4">
           <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-primary">Utility Purchase History</h6>
           </div>
           <div class="card-body">
               <table class="table table-striped">
                   <thead>
                       <tr>
                           <th>Utility</th>
                           <th>Amount</th>
                           <th>Date</th>
                           <th>Status</th>
                       </tr>
                   </thead>
                   <tbody>
                       <tr>
                           <td>Electricity Tokens</td>
                           <td>$50</td>
                           <td>01/01/2025</td>
                           <td><span class="badge badge-success">Successful</span></td>
                       </tr>
                       <tr>
                           <td>Water Bills</td>
                           <td>$20</td>
                           <td>02/01/2025</td>
                           <td><span class="badge badge-warning">Pending</span></td>
                       </tr>
                       <tr>
                           <td>Internet Subscription</td>
                           <td>$30</td>
                           <td>03/01/2025</td>
                           <td><span class="badge badge-success">Successful</span></td>
                       </tr>
                   </tbody>
               </table>
           </div>
       </div>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>




@endsection
