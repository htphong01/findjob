<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Candidate;
use App\Candidate_Job;
use App\Job;
use App\Job_Detail;
use App\Category;
use App\City;
use App\Help;
use App\Employer;
use App\Revenue;
use App\User;
use Mail;
use Session;
use Auth;
if(!isset($_SESSION)) { 
    session_start(); 
}

class EmployerController extends Controller
{
    public function show_employer() {
        $employers = Employer::paginate(10);
        return view('admin.employer', compact('employers'));
    }

    public function posted_job() {
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();
        $jobs = Job::where('employer_id', '=', $user->id)
                    ->orderBy('job_id','desc')
                    ->paginate(10);
        $job_details = Job_Detail::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.posted_job', compact('cities', 'job_details', 'jobs', 'customer', 'user', 'categories'));
    }

    public function add_job() {
        $categories = Category::all();
        $user = Auth::user();
        $employers = Employer::all();
        $cities = City::all();

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.add_job', compact('cities', 'employers', 'customer', 'user', 'categories'));
    }

    public function employer_insert_job(Request $req) {
        $user = Auth::user();
        if($user->coin >= 50) {
            $job = new Job();
            $job_detail = new Job_Detail();
            $category = Category::where('category_id', $req->category_id)->first();
            $employer = Employer::find(Auth::user()->id);

            $job->job_name = $req->job_name;
            $job->job_slug = Str::slug($req->job_name);
            $job->job_address = $req->job_address;
            $job->category_id = $req->category_id;
            $job->employer_id = $employer->employer_id;
            $job->save();

            $job->job_slug = Str::slug($req->job_name) ."-" .$job->job_id;
            $job->save();
        
            $job_detail->job_id = $job->job_id;
            $job_detail->job_description = $req->job_description;
            $job_detail->job_require = $req->job_require;
            $job_detail->job_benefit = $req->job_benefit;
            $job_detail->job_deadline = $req->job_deadline;
            $job_detail->job_salary = $req->job_salary;
            $job_detail->save();

            $category->category_total_job += 1;
            $category->save();

            $employer->employer_total_job += 1;
            $employer->save();

            $user->coin -= 50;
            $user->save();

            return redirect('employer/add-job')->with('success', 'Thêm tin tuyển dụng thành công');
        }
        return redirect('employer/add-job')->with('success', 'Số dư của bạn không đủ. Vui lòng nạp thêm');
    }

    public function employer_edit_job($id) {
        $job = Job::find($id);
        $job_detail = Job_Detail::find($id);
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.edit_job', compact('user', 'job', 'job_detail', 'categories', 'cities'));
    }

    public function employer_update_job($id, Request $req) {
        $job = Job::find($id);
        $job_detail = Job_Detail::find($id);

        $job->job_name = $req->job_name;
        $job->job_slug = Str::slug($req->job_name) ."-" .$id;
        $job->job_address = $req->job_address;
        $job->category_id = $req->category_id;
        $job->save();
    
        $job_detail->job_id = $job->job_id;
        $job_detail->job_description = $req->job_description;
        $job_detail->job_require = $req->job_require;
        $job_detail->job_benefit = $req->job_benefit;
        $job_detail->job_deadline = $req->job_deadline;
        $job_detail->job_salary = $req->job_salary;
        $job_detail->save();

        return redirect('employer/edit/' .$id)->with('success', 'Cập nhật tin tuyển dụng thành công');
    }

    public function employer_delete_job($id) {
        $job = Job::find($id);
        $job_detail = Job_Detail::find($id);
        $category = Category::find($job->category_id);
        $employer = Employer::find($job->employer_id);
        $candidate_job = Candidate_Job::where('job_id', '=', $job->job_id)->take(1000);
        $job->delete();
        $job_detail->delete();

        $category->category_total_job -= 1;
        $category->save();

        $employer->employer_total_job -= 1;
        $employer->save();

        if(isset($candidate_job)) {
            $candidate_job->delete();
        }
        return redirect('/employer/posted-job')->with('success', 'Xoá tin tuyển dụng thành công');
    }
    
    public function candidate_posted_job() {
        $categories = Category::all();
        $user = Auth::user();
        $employers = Employer::all();
        $cities = City::all();

        $candidate_jobs = Candidate_Job::join('jobs', 'candidate_jobs.job_id', '=', 'jobs.job_id')
                        ->orderby('candidate_jobs.id', 'desc')
                        ->join('candidates', 'candidate_jobs.candidate_id', '=', 'candidates.candidate_id')
                        ->where('candidate_jobs.employer_id', '=07', $user->id)
                        ->where('candidate_jobs.isApproved', 1)
                        ->select('candidates.candidate_id','candidates.candidate_name', 'jobs.job_name' ,'jobs.job_id','jobs.job_slug')->paginate(10);

        $customer = Employer::find($user->id);

        return view('main.candidate_posted_job', compact('candidate_jobs', 'cities', 'employers', 'customer', 'user', 'categories'));
    }

    public function respond_job(Request $req) {
        $status = $req->query('status');
        $jobID = $req->query('job');
        $candidateID = $req->query('candidate');
        $candidate_job = Candidate_job::where('job_id', $jobID)
                            ->where('candidate_id', $candidateID)->first();
        $job = Job::find($jobID);
        $employer = User::find($candidate_job->employer_id);
        $candidate = User::find($candidateID);

        $data = [
            'name' => $candidate->name,
            'email' => $candidate->email,
            'job_name' => $job->job_name,
            'employer' => $employer->name,
        ];

        if($status == 2) {
            Mail::send('user.jobAcceptedMail', $data, function ($message) use($data) {
                $message->from('cty.hotjob2020@gmail.com', 'Công ty HOTJOB')
                        ->to($data['email'])
                        ->subject('Thông báo vị trí tuyển dụng');
            });
        }
        $candidate_job->isApproved = $status;
        $candidate_job->save();
        return redirect('/user/candidate-posted-job');
    }

    public function business_paper() {
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();

        $customer = Employer::find($user->id);

        if(Auth::check()) {
            $user_id = Auth::user()->id;
            Session::put('infor', '<div class="customer_name">' .Auth::user()->name. '</div>');
        } else {
            Session::put('infor', '<button>Đăng nhập</button>');
            $user_id = '';
            Session::put('login','Đăng nhập để xem chi tiết');
        }

        return view('main.employer_business_paper', compact('cities', 'customer', 'user', 'categories'));
    }

    public function update_business_paper(Request $req) {
        $employer = Employer::find(Auth::user()->id);
        if($req->hasFile('businessPaperPath')) {
            $file = $req->businessPaperPath;

            $file->move('businessPaper', $file->getClientOriginalName());
            $employer->business_paper = 'businessPaper\\' .$file->getClientOriginalName();
            $employer->save();
        }
        return redirect('/user/business-paper');
    }

    public function delete_business_paper() {
        $employer = Employer::find(Auth::user()->id);
        $employer->business_paper = null;
        $employer->save();
        return redirect('/user/business-paper');

    }
}
