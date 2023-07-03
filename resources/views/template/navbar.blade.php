<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="#home" class="navbar-brand"><img src="{{ asset('gtems') }}/img/logo.png" alt=""></a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link page-scroll" href="#business-plan">About</a>
              </li>     
               <li class="nav-item">
                <a class="nav-link page-scroll" href="#services">Feature</a>
              </li> 
              <li class="nav-item">
                <a class="btn btn-singin" href="{{ route('register') }}">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>  