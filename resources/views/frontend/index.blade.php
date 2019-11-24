@extends('layouts/layout')
@section('content')
<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-resume"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Search Millions of Jobs</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-collaboration"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Easy To Manage Jobs</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-promotions"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Top Careers</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block">
          <div class="icon"><span class="flaticon-employee"></span></div>
          <div class="media-body">
            <h3 class="heading mb-3">Search Expert Candidates</h3>
            <p>A small river named Duden flows by their place and supplies.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- <section class="ftco-section ftco-counter">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Categories work wating for you</span>
        <h2 class="mb-4"><span>Current</span> Job Posts</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Web Development <span class="number" data-number="1000">0</span></a></li>
          <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
          <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
          <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
          <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
          <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
          <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
          <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
          <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
          <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
        </ul>
      </div>
      <div class="col-md-3 ftco-animate">
        <ul class="category">
          <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
          <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
          <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
          <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
        </ul>
      </div>
    </div>
  </div>
</section> --}}
<section class="ftco-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <span class="subheading">Recently Added Jobs</span>
        <h2 class="mb-4"><span>Recent</span> Jobs</h2>
      </div>
    </div>
    <div class="row">
      @foreach ($all_jobs as $job)
        <div class="col-md-12 ftco-animate">
        <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">
          <div class="mb-4 mb-md-0 mr-5">
            <div class="job-post-item-header d-flex align-items-center">
              <h2 class="mr-3 text-black h3"><a href="" class="nav-link" style="color: #000">{{ $job->job_title }}</a></h2>
              <div class="badge-wrap">
                <span class="bg-primary text-white badge py-2 px-3"></span>
              </div>
            </div>
            <div class="job-post-item-body d-block d-md-flex">
              <div class="mr-3"><span class="icon-layers"></span> <a href="#">{{ $job->rtu->business_name }}</a></div>
              <div><span class="icon-my_location"></span> <span>{{ $job->location }}, {{ $job->country }}</span></div>
            </div>
          </div>
          <div class="ml-auto d-flex">
            <a href="{{ url('apply') }}/{{ $job->id }}" class="btn btn-primary py-2 mr-1">Apply Job</a>
            <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
              <span class="icon-heart"></span>
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    </div> <!-- end -->
  </div>
  <div class="row mt-5">
    <div class="col text-center">
      <div class="block-27">
        <ul>
          <li><a href="#">&lt;</a></li>
          <li class="active"><span>1</span></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">&gt;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>

<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="row">
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="{{ count($all_jobs) }}">0</strong>
              <span>Jobs</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="{{ count($users) }}">0</strong>
              <span>Members</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="{{ count($users=['resume']) }}">0</strong>
              <span>Resume</span>
            </div>
          </div>
        </div>
        <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
          <div class="block-18 text-center">
            <div class="text">
              <strong class="number" data-number="{{ count($users) }}">0</strong>
              <span>Company</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="ftco-section testimony-section">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 text-center heading-section ftco-animate">
      <span class="subheading">Testimonial</span>
      <h2 class="mb-4"><span>Happy</span> Clients</h2>
    </div>
  </div>
  <div class="row ftco-animate">
    <div class="col-md-12">
      <div class="carousel-testimony owl-carousel ftco-owl">
        <div class="item">
          <div class="testimony-wrap py-4 pb-5">
            <div class="user-img mb-4" style="background-image: url({{ url('frontend/images/person_1.jpg') }})">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Roger Scott</p>
              <span class="position">Marketing Manager</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4 pb-5">
            <div class="user-img mb-4" style="background-image: url({{ url('frontend/images/person_2.jpg') }}">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Roger Scott</p>
              <span class="position">Interface Designer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4 pb-5">
            <div class="user-img mb-4" style="background-image: url({{ url('frontend/images/person_3.jpg') }})">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Roger Scott</p>
              <span class="position">UI Designer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4 pb-5">
            <div class="user-img mb-4" style="background-image: url({{ url('frontend/images/person_1.jpg') }})">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Roger Scott</p>
              <span class="position">Web Developer</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="testimony-wrap py-4 pb-5">
            <div class="user-img mb-4" style="background-image: url({{ url('frontend/images/person_1.jpg') }})">
              <span class="quote d-flex align-items-center justify-content-center">
                <i class="icon-quote-left"></i>
              </span>
            </div>
            <div class="text">
              <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <p class="name">Roger Scott</p>
              <span class="position">System Analyst</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<section class="ftco-section bg-light">
<div class="container">
  <div class="row justify-content-center mb-5 pb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <span class="subheading">Our Blog</span>
      <h2><span>Recent</span> Blog</h2>
    </div>
  </div>
  <div class="row d-flex">
    <div class="col-md-3 d-flex ftco-animate">
      <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20" style="background-image: url({{ url('frontend/images/image_1.jpg') }});">
        </a>
        <div class="text mt-3">
          <div class="meta mb-2">
            <div><a href="#">December 2, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias architecto enim non iste maxime optio, ut com</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex ftco-animate">
      <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20" style="background-image: url({{ url('frontend/images/image_1.jpg') }});">
        </a>
        <div class="text mt-3">
          <div class="meta mb-2">
            <div><a href="#">December 2, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet nobis natus incidunt officia assumenda.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex ftco-animate">
      <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20" style="background-image: url({{ url('frontend/images/image_3.jpg') }});">
        </a>
        <div class="text mt-3">
          <div class="meta mb-2">
            <div><a href="#">December 2, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi obcaecati praesentium,</p>
        </div>
      </div>
    </div>
    <div class="col-md-3 d-flex ftco-animate">
      <div class="blog-entry align-self-stretch">
        <a href="blog-single.html" class="block-20" style="background-image: url({{ url('frontend/images/image_4.jpg') }});">
        </a>
        <div class="text mt-3">
          <div class="meta mb-2">
            <div><a href="#">December 2, 2018</a></div>
            <div><a href="#">Admin</a></div>
            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
          </div>
          <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor minima, dolores quis, dolorum accusamu</p>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<section class="ftco-section-parallax">
<div class="parallax-img d-flex align-items-center">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
        <h2>Subcribe to our Newsletter</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
        <div class="row d-flex justify-content-center mt-4 mb-4">
          <div class="col-md-8">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
@endsection