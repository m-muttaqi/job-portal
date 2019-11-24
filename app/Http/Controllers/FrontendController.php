<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\User;
use App\Application;
use Auth;
use Carbon\Carbon;

class FrontendController extends Controller
{
    function home()
    {
    	$all_jobs = Job::orderBy('id', 'desc')->get();
    	$users = User::all();
        return view('frontend/index', compact('all_jobs', 'users'));
    }

    function newPost(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$request->validate([
    			'user_id' => 'required',
	    		'job_title' => 'required',
	    		'job_description' => 'required',
	    		'salary' => 'required|numeric',
	    		'location' => 'required',
	    		'country' => 'required',
    		]);
    		Job::insert([
    			'user_id' => $request->user_id,
	    		'job_title' => $request->job_title,
	    		'job_description' => $request->job_description,
	    		'salary' => $request->salary,
	    		'location' => $request->location,
	    		'country' => $request->country,
	    		'created_at' => Carbon::now(),
	    	]);
	    	return back()->with('alert-success', 'Job Posted Successfully!');
    	}
    	$auth_id = Auth::user()->id;
    	return view('frontend/new-post', compact('auth_id'));
    }

    function editProfile(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$id = Auth::user()->id;
    		if ($request->hasFile('picture')) {
    			if (Auth::user()->picture == 'default.jpg') {
    				$photo_to_upload = $request->picture;
	    			$extension = $photo_to_upload->getClientOriginalExtension();
	    			$filename = date('Y-m-d h-i-s').'.'.$extension;
	    			$photo_to_upload->move(public_path('uploads/images'), $filename);
	    			User::where('id', $id)->update([
	    				'picture' => $filename,
	    			]);
    			}
    			else {
    				#delete the old picture
    				$old_image = Auth::user()->picture;
    				unlink('uploads/images/'.$old_image);
    				#upload new picture
    				$photo_to_upload = $request->picture;
	    			$extension = $photo_to_upload->getClientOriginalExtension();
	    			$filename = date('Y-m-d h-i-s').'.'.$extension;
	    			$photo_to_upload->move(public_path('uploads/images'), $filename);
	    			User::where('id', $id)->update([
	    				'picture' => $filename,
	    			]);
    			}
    			
    		}
    		if ($request->hasFile('resume')) {
    			if (Auth::user()->resume == null) {
    				$resume = $request->resume;
	    			$pdf_extension = $resume->getClientOriginalExtension();
	    			$pdf_filename = date('Y-m-d h-i-s').'.'.$pdf_extension;
	    			$resume->move(public_path('uploads/resumes'), $pdf_filename);
	    			User::where('id', $id)->update([
	    				'resume' => $pdf_filename,
	    			]);
    			} else {
    				#delete old file
    				$old_file = Auth::user()->resume;
    				unlink('uploads/resumes/'.$old_file);
    				#upload new file
    				$resume = $request->resume;
	    			$pdf_extension = $resume->getClientOriginalExtension();
	    			$pdf_filename = date('Y-m-d h-i-s').'.'.$pdf_extension;
	    			$resume->move(public_path('uploads/resumes'), $pdf_filename);
	    			User::where('id', $id)->update([
	    				'resume' => $pdf_filename,
	    			]);
    			}
    			// $resume = $request->resume;
    			// $pdf_extension = $resume->getClientOriginalExtension();
    			// $pdf_filename = date('Y-m-d h-i-s').'.'.$pdf_extension;
    			// $resume->move(public_path('uploads/resumes'), $pdf_filename);
    			// User::where('id', $id)->update([
    			// 	'resume' => $pdf_filename,
    			// ]);
    		}
    		User::where('id', $id)->update([
    			'first_name' => $request->first_name,
    			'last_name' => $request->last_name,
    			'business_name' => $request->business_name,
    			'skills' => $request->skills
    		]);
    		return back()->with('alert-success', 'Profile updated successfully!');
    	}
    	$user = Auth::user();
    	return view('frontend/edit-profile', compact('user'));
    }

    function viewProfile()
    {
    	$user = Auth::user();
    	return view('frontend/view-profile', compact('user'));
    }

    function jobs()
    {
    	$all_jobs = Job::orderBy('created_at', 'desc')->get();
    	return view('frontend/jobs', compact('all_jobs'));
    }

    function about()
    {
    	$users = User::all();
    	$jobs = Job::all();
    	return view('frontend/about', compact('users', 'jobs'));
    }

    function applications()
    {
    	$id = Auth::user()->id;
    	$applications = Application::where('company_id', $id)->get();
    	return view('frontend/applications', compact('applications'));
    }

    function apply($id)
    {
    	if (Auth::user()->resume == null or Auth::user()->skills == null) {
    		return redirect('edit-profile')->with('alert-danger', 'Upload your resume and skills to apply for job');
    	}
    	Application::insert([
    		'job_id' => Job::find($id)->id,
    		'company_id' => Job::find($id)->user_id,
    		'name' => Auth::user()->first_name." ".Auth::user()->last_name,
    		'job_title' => Job::find($id)->job_title,
    		'email' => Auth::user()->email,
    		'resume' => Auth::user()->resume,
    		'picture' => Auth::user()->picture,
    		'skills' => Auth::user()->skills,
    		'created_at' => Carbon::now()
    	]);
    	return redirect('jobs')->with('alert-success', 'Applications sent successfully!');
    }

}
