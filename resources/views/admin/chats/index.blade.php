@extends('layouts.admin')


@section('content')

<div class="container-fluid">



    <div class="container mt-5">
           <!-- Page Header -->
           <div class="text-center mb-4">
               <h1 class="h3 text-primary">Chats with Businesses</h1>
               <p class="text-muted">Communicate with your preferred businesses here.</p>
           </div>

           <!-- Chat Section -->
           <div class="card shadow">
               <div class="card-header py-3">
                   <h6 class="m-0 font-weight-bold text-primary">Business Name: Example Business</h6>
               </div>
               <div class="card-body d-flex flex-column chat-container">
                   <!-- Example Chat Messages -->
                   <div class="chat-bubble business">
                       Hello! How can we assist you today?
                   </div>
                   <div class="chat-bubble user">
                       Hi! I'd like to inquire about your product pricing.
                   </div>
                   <div class="chat-bubble business">
                       Sure! Which product are you interested in?
                   </div>
               </div>
               <div class="card-footer">
                   <!-- Message Input -->
                   <form class="message-input">
                       <input type="text" class="form-control" placeholder="Type your message here..." required>
                       <button type="submit" class="btn btn-primary">Send</button>
                   </form>
               </div>
           </div>
       </div>

       <!-- Bootstrap JS -->
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


                  <!-- Footer -->


           </div>



@endsection
