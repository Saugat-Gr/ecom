 <nav class="text-white navbar navbar-expand-lg bg-dark  p-3">
     <div class="container-fluid text-primary d-flex justify-content-around ">
         <div>
             <a class="navbar-brand  text-white" href="#">{{ config('app.name') }}</a>
             <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                 aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon text-white"></span>

             </button>
         </div>
         <div class="d-flex justify-content-around" id="navbarNav">
             @auth
                 <div class="dropdown bg-transparent">
                     <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                         aria-expanded="false">
                         Dropdown button
                     </button>
                     <ul class="dropdown-menu">
                         <li><a class="dropdown-item" href="#">Action</a></li>
                         <li><a class="dropdown-item" href="#">Another action</a></li>
                         <li><a class="dropdown-item" href="#">Something else here</a></li>
                     </ul>
                 </div>
             </div>
         @endauth
     </div>
 </nav>
