@extends('welcome')

@section('skill_block')

  @foreach ($skills as $s)

    @if ($s->main)
    
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <a href="skills/{{ $s->name }}"><img class="img-fluid mb-3 mb-lg-0" src="img/bg-masthead.jpg" alt=""></a>
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <a href="skills/{{ $s->name }}"><h4>To {{ $s->label }}</h4></a>
            <p class="text-black-50 mb-0">{{ $s->description }}</p>
          </div>
        </div>
      </div>

    @endif

  @endforeach
          
  @foreach ($skills as $s)

    @if (!$s->main)
          
      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <a href="skills/{{ $s->name }}"><img class="img-fluid" src="img/demo-image-01.jpg" alt=""></a>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <a href="skills/{{ $s->name }}"><h4 class="text-white">To {{ $s->label }}</h4></a>
              <p class="mb-0 text-white-50">{{ $s->description }}</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>
    
    @endif

  @endforeach

      {{-- <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <a href="skills/play"><img class="img-fluid" src="img/demo-image-02.jpg" alt=""></a>
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <a href="skills/play"><h4 class="text-white">To Play</h4></a>
                <p class="mb-0 text-white-50">A única área que eu acho, que vai exigir muita atenção nossa, e aí eu já aventei a hipótese de até criar um ministério. É na área de... Na área... Eu diria assim, como uma espécie de analogia com o que acontece na área agrícola.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div> --}}
        
@endsection