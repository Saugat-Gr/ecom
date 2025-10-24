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
             <div class="dropdown bg-transparent">
                 <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown"
                     aria-expanded="false">
                     <i class="fa fa-user-circle me-2"> </i> {{ auth('cms')->user()->name }}
                 </button>
                 <ul class="dropdown-menu">
                     <li>

                         <form action="{{ route('back.profile.edit') }}" method="GET">
                             @csrf

                             <button class="btn btn-link dropdown-item rounded-0" type="Submit"> <i
                                     class="fa fa-pencil me-2"></i>Edit Profile</button>
                         </form>

                     </li>
                     <li><a class="dropdown-item" href="{{ route('back.password.edit') }}">
                             <i class="fa fa-asterisk me-2"></i>
                             Change Password</a></li>
                     <li>

                         <form action="{{ route('back.logout') }}" method="POST">
                             @csrf

                             <button class="btn btn-link dropdown-item rounded-0 border-top" type="submit">
                                 <i class="fa fa-sign-out me-2"></i>
                                 Logout
                             </button>

                         </form>

                     </li>
                 </ul>
             </div>
         </div>
     </div>
 </nav>
