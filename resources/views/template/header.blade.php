<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <!-- Header Section Start -->
    <header id="home" class="hero-area">    
      <div class="overlay">
        <span></span>
        <span></span>
      </div>
      @include("template.navbar")
      <div class="container">      
        <div class="row space-100">
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="contents">
              <h2 class="head-title">Gamatechno Technical Equipment Monitoring System</h2>
              <p>Let's monitor your office facilities so that employees always feel comfortable</p>
              <div class="header-button">
                <a href="#" class="btn btn-border-filled">Login Admin</a>
                <a href="{{ route('login') }}" class="btn btn-border page-scroll">Login User</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 p-0">
            <div class="intro-img">
              <img src="{{ asset('gtems') }}/img/intro.png" alt="">
            </div>            
          </div>
        </div> 
      </div>             
    </header>
    <!-- Header Section End --> 
</body>
</html>