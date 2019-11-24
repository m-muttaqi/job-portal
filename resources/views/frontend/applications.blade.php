@extends('layouts/layout')
@section('content')
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">Applications</span>
            <h2 class="mb-4"><span>Recent</span> Applications</h2>
          </div>
        </div>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th scope="col">Sl No.</th>
						<th scope="col">Name</th>
						<th scope="col">Job Title</th>
						<th scope="col">Email</th>
						<th scope="col">Picture</th>
						<th scope="col">Resume</th>
						<th scope="col">Skills</th>
						<th scope="col">Applied at</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($applications as $application)
						<tr>
							<th>{{ $loop->index + 1 }}</th>
							<td>{{ $application->name }}</td>
							<td>{{ $application->job_title }}</td>
							<td>{{ $application->email }}</td>
							<td><img src="{{ asset('uploads/images') }}/{{ $application->picture }}" alt="" width="50px"></td>
							<td><a href="{{ asset('uploads/resumes') }}/{{ $application->resume }}" class="nav-link">Resume</a></td>
							<td>{{ $application->skills }}</td>
							<td>{{ $application->created_at }}</td>
						</tr>
						@empty
							<td colspan="8" class="text-center">
								<div class="alert alert-danger">
									<h4>Nothing found</h4>
								</div>
							</td>
					@endforelse
				</tbody>
			</table>
	</div>
</section>
@endsection