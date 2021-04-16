<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Http\Request;
use App\Candidate;
use App\Candidate_Job;
use App\Job;
use App\Job_Detail;
use App\Category;
use App\City;
use App\Employer;
use App\Suitable_Job;
use App\Help;
use App\User;
use App\Revenue;
use Session;
use Auth;
if(!isset($_SESSION)) { 
    session_start(); 
}

class CandidateController extends Controller
{
    public function show_candidate() {
        $candidate = Candidate::paginate(10);
        $size = sizeof($candidate);
        Session::put('name', Auth::user()->name);
        return view('admin.candidate', compact('candidate', 'size'));
    }

    public function apply_job($job_id, $user_id) {
        $user = User::find($user_id);
        $job = Job::find($job_id);
        $candidate_job = Candidate_job::withTrashed()->where('job_id', $job_id)->first();
        if($candidate_job && $candidate_job->trashed()) {
            $candidate_job->restore();
            $job->job_total_candidate += 1;
            $job->save();
            return redirect('career/' .$job->job_slug);
        } else {
            if($user->coin >= 10) {
                $user->coin -= 10;
                $user->save();

                $job->job_total_candidate += 1;
                $job->save();

                $candidate = new Candidate_Job();
                $candidate->candidate_id = $user_id;
                $candidate->job_id = $job_id;
                $candidate->employer_id = $job->employer_id;
                $candidate->save();
                return redirect('career/' .$job->job_slug);
            }
        }
        return redirect('career/' .$job->job_slug)->with('success', 'Số dư của bạn không đủ. Vui lòng nạp thêm');
    }

    public function applied_job() {
        $categories = Category::all();
        $user = Auth::user();
        $candidate_jobs = Candidate_Job::join('job_applied_status', 'job_applied_status.id',    'candidate_jobs.isApproved')
                        ->where('candidate_id', '=' , $user->id)
                        ->paginate(10);
        $cities = City::all();

        $jobs = Job::all();
        $job_details = Job_Detail::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.applied_job', compact('cities', 'job_details', 'jobs', 'candidate_jobs', 'customer', 'user', 'categories'));
    }

    public function deleted_job() {
        $categories = Category::all();
        $cities = City::all();
        $user = Auth::user();
        $candidate_jobs = Candidate_Job::onlyTrashed()
                        ->join('jobs', 'jobs.job_id', 'candidate_jobs.job_id')
                        ->join('job_details', 'jobs.job_id', 'job_details.job_id')
                        ->select('jobs.job_name', 'jobs.job_slug','jobs.job_id', 'job_details.job_deadline')
                        ->where('candidate_jobs.candidate_id', Auth::user()->id)
                        ->paginate(10);

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.deleted_job', compact('cities', 'candidate_jobs', 'customer', 'user', 'categories'));
    }

    public function delete_applied_job($id) {
        $candidate_job = Candidate_Job::where('job_id',$id)->first();
        $candidate_job->delete();

        $job = Job::find($id);
        $job->job_total_candidate -= 1;
        $job->save();

        return redirect('/user/applied-job');
    }

    public function show_cv($id) {
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();

        $jobs = Job::all();
        $job_details = Job_Detail::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.show_cv', compact('cities', 'job_details', 'jobs', 'customer', 'user', 'categories'));
    }

    public function update_cv($id, Request $req) {
        $candidate = Candidate::find($id);
        if($req->hasFile('cvPath')) {
            $file = $req->cvPath;

            $file->move('CV', $file->getClientOriginalName());
            $candidate->candidate_cv = 'CV\\' .$file->getClientOriginalName();
            $candidate->save();
        }
        return redirect('/user/show-cv/' .Auth::user()->id);
    }

    public function delete_cv() {
        $candidate = Candidate::find(Auth::user()->id);
        $candidate->candidate_cv = null;
        $candidate->save();
        return redirect('/user/show-cv/' .Auth::user()->id);
    }

    public function suitable_job() {
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();

        $jobs = Job::all();
        $job_details = Job_Detail::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }
        $suitable_categories = Suitable_Job::where('candidate_id', '=', Auth::user()->id)
                        ->join('categories','suitable_jobs.category_id', '=','categories.category_id')
                        ->select('categories.category_name', 'categories.category_id')
                        ->take(3)->get();

        if(count($suitable_categories) > 0) {
            $suitable_jobs = Job::where('category_id', '=',$suitable_categories[0]->category_id)
                             ->orWhere('category_id', '=',$suitable_categories[1]->category_id)
                             ->orWhere('category_id', '=',$suitable_categories[2]->category_id)
                             ->orderBy('category_id', 'desc')
                             ->take(5)->get();
        } else {
            $suitable_jobs = Job::latest()->take(5)->get();
        }

        $employers = Employer::all();

        return view('main.candidate_suitable_job', compact('employers', 'suitable_jobs','suitable_categories','cities', 'job_details', 'jobs', 'customer', 'user', 'categories'));
        
    }

    public function update_suitable_category(Request $req) {
        $suitable_categories = Suitable_Job::where('candidate_id', '=', Auth::user()->id)
                                ->take(3)->get();
        if(count($suitable_categories) > 0) {
            $suitable_categories[0]->category_id = $req->category1;
            $suitable_categories[1]->category_id = $req->category2;
            $suitable_categories[2]->category_id = $req->category3;
            $suitable_categories[0]->save();
            $suitable_categories[1]->save();
            $suitable_categories[2]->save();
        } else {
                $suitable_category1 = new Suitable_Job();
                $suitable_category2 = new Suitable_Job();
                $suitable_category3 = new Suitable_Job();
                $suitable_category1->candidate_id = Auth::user()->id;
                $suitable_category2->candidate_id = Auth::user()->id;
                $suitable_category3->candidate_id = Auth::user()->id;
                $suitable_category1->category_id = $req->category1;
                $suitable_category2->category_id = $req->category2;
                $suitable_category3->category_id = $req->category3;

                $suitable_category1->save();
                $suitable_category2->save();
                $suitable_category3->save();
        }
        return redirect('user/suitable-job');
    }
}
