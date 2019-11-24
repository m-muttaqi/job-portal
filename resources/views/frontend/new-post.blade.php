@extends('layouts/layout')
@section('content')
<div class="ftco-section bg-light">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-lg-8 mb-5">
        
        <form method="post" action="{{ url('job_post') }}" class="p-5 bg-white">
          @csrf

          @if (session('alert-success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>    {{ session('alert-success') }}
            </div>
          @endif

          @if (session('alert-danger'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>    {{ session('alert-danger') }}
            </div>
          @endif

          @if ($errors->all())
          @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">×</button>    {{ $error }}
            </div>
          @endforeach
          @endif

          <input type="hidden" name="user_id" value="{{ $auth_id }}">
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Job Title</label>
              <input type="text" name="job_title" class="form-control" placeholder="eg. Web Developer/Graphic Designer" value="{{ old('job_title') }}">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Job Description</label>
              <textarea name="job_description" class="form-control" id="" cols="30" rows="5" placeholder="Enter Job Description">{{ old('job_description') }}</textarea>
            </div>
          </div>
          <div class="row form-group mb-4">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Salary</label>
              <input type="text" class="form-control" placeholder="Enter Salary" name="salary" value="{{ old('salary') }}">
            </div>
          </div>
          <div class="row form-group mb-4">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Location</label>
              <input type="text" class="form-control" placeholder="eg. Mohammadpur, Dhaka" name="location"  value="{{ old('location') }}">
            </div>
          </div>
          <div class="row form-group mb-4">
            <div class="col-md-12 mb-3 mb-md-0">
              <label class="font-weight-bold" for="fullname">Country</label>
              <input type="text" class="form-control" placeholder="eg. Bangladeh, Norway" name="country"  value="{{ old('country') }}">
            </div>
          </div>
          <div class="row form-group">
            <div class="col-md-12">
              <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
            </div>
          </div>
        </form>

      </div>
      <div class="col-lg-4">
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">Contact Info</h3>
          <p class="mb-0 font-weight-bold">Address</p>
          <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>
          <p class="mb-0 font-weight-bold">Phone</p>
          <p class="mb-4"><a href="#">+1 232 3235 324</a></p>
          <p class="mb-0 font-weight-bold">Email Address</p>
          <p class="mb-0"><a href="#"><span class="__cf_email__" data-cfemail="671e081215020a060e0b2703080a060e094904080a">[email&#160;protected]</span></a></p>
        </div>
        
        <div class="p-4 mb-3 bg-white">
          <h3 class="h5 text-black mb-3">More Info</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur</p>
          <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

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