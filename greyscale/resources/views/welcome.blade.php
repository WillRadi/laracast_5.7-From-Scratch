@extends('layout.master')

@section('home_link', '#page-top')

@section('nav_buttons')

  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
      </li>
      <li class="nav-item">
        <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
      </li>
    </ul>
  </div>

@endsection

@section('page_header')

    <h1 class="mx-auto my-0 text-uppercase">W.Skills</h1>
    <h2 class="text-white-50 mx-auto mt-2 mb-5">A list of Will' skills</h2>
    <a href="#about" class="btn btn-primary js-scroll-trigger">Know Will</a>
    
@endsection

@section('content')

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Dilmes ipson</h2>
            <p class="text-white-50">No meu xinélo da humildade eu gostaria muito de ver o Neymar e o Ganso. Por que eu acho que.... 11 entre 10 brasileiros gostariam. Você veja, eu já vi, parei de ver. Voltei a ver, e acho que o Neymar e o Ganso têm essa capacidade de fazer a gente olhar.</p>
          </div>
        </div>
        <img src="img/ipad.png" class="img-fluid" alt="">
      </div>
    </section>

    <!-- Projects Section -->
    <section id="skills" class="projects-section bg-light">
      <div class="container">
        
        <div>
          @yield('skill_block')
        </div>

      </div>
    </section>
@endsection