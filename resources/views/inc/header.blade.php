  <div class="bg-dark">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark" style="width: 80%; margin:0 10%">

          <!-- Logo -->
          <a class="navbar-brand" href="{{url('/')}}">
              {{-- <img src="your_logo.png" alt="Logo" style="max-height: 40px;"> --}}
              Masum
          </a>

          <!-- Toggler/collapsibe Button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Navbar links -->
          <div class="collapse navbar-collapse contailner" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('/')}}">About Me</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('skills')}}">Skills</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#experience">Experience</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('projects')}}">Projects</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{url('contact')}}">Contact</a>
                  </li>
              </ul>
          </div>
      </nav>
  </div>
