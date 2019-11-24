@extends('layouts/layout')

@section('content')

	<div class="ftco-section bg-light">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 mb-5">
					<form action="{{ url('edit-profile') }}" method="post" enctype="multipart/form-data">
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

						<div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="first_name">First Name</label>
				              <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $user->first_name }}">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="last_name">Last Name</label>
				              <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $user->last_name }}">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="business_name">Business Name</label>
				              <input type="text" id="business_name" name="business_name" class="form-control" value="{{ $user->business_name }}">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="picture">Profile Picture</label> <br>
				              <img src="{{ asset('uploads/images') }}/{{ $user->picture }}" style="width: 200px; height: 200px; border-radius: 50%;">
				              <input type="file" id="picture" name="picture" class="form-control">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="resume">Resume</label>
				              <embed src="{{ asset('uploads/resumes') }}/{{ $user->resume }}" type="application/pdf" width="100%" height="200px" />
				              <input type="file" id="resume" name="resume" class="form-control" value="{{ $user->resume }}" accept="application/pdf, application/msword">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12 mb-3 mb-md-0">
				              <label class="font-weight-bold" for="skills">Skills</label>
				              <input type="text" id="skills" name="skills" class="form-control" value="{{ $user->skills }}">
				            </div>
				          </div>

				          <div class="row form-group">
				            <div class="col-md-12">
				              <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
				            </div>
				          </div>

					</form>
				</div>
			</div>
		</div>
	</div>

@endsection