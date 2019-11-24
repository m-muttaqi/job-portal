@extends('layouts/layout')
@section('content')
<div class="ftco-section bg-light">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-md-4">
				<img src="{{ asset('uploads/images') }}/{{ $user->picture }}" alt="Not Found" width="100%">
			</div>
			<div class="col-md-8">
				<a class="btn btn-info ml-3" href="{{ url('edit-profile') }}" role="button">Edit Profile</a>
				<div class="card-body">

					<label>Name</label>
					<h3 class="card-title">{{ $user->first_name }} {{ $user->last_name }}</h3>
					<label>Company</label>
					<h5>{{ $user->business_name }}</h5>
					<label>Email</label>
					<h5>{{ $user->email }}</h5>
					<label>Resume</label>
					<embed src="{{ asset('uploads/resumes') }}/{{ $user->resume }}" type="application/pdf" width="100%" height="200px" />
					@if (isset($user->skills))
						<label>Skills</label>
						<h5>{{ $user->skills }}</h5>
					@endif
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection