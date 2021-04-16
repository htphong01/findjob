<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Category;
use App\Job;
use App\Job_Detail;
use App\Employer;
use App\City;
use App\Candidate_Job;
use App\Help;
use App\Revenue;
use DateTime;
use Auth;
use Session;
if(!isset($_SESSION)) { 
    session_start(); 
}


class JobController extends Controller
{
    public function show_job(Request $req) {
        $category = $req->query('category');
        $row = $req->query('row');
        if(!$row) {
            $row = 10;
        }
        if ($category != 0) {
            $jobs = Job::latest()->where('category_id', $category)->paginate($row)->withQueryString();
        } else {
            $jobs = Job::latest()->paginate($row)->withQueryString();
        }

        $categories = Category::all();
        
        $job_detail = Job_Detail::all();
        $size = sizeof($job_detail);
        Session::put('name', Auth::user()->name);
        return view('admin.job', compact('jobs', 'job_detail', 'size', 'categories', 'category', 'row'));
    }

    public function add_job() {
        $category = Category::all();
        $employer = Employer::all();
        $city = City::all();
        return view('admin.add_job', compact('category', 'employer', 'city'));
    }

    public function insert_job(Request $req) {
        $data = $req->validate([
            'employer_id' =>'required',
            'job_name' => 'required',
            'category_id' => 'required',
            'job_address' => 'required',
            'job_description' => '',
            'job_require' => '',
            'job_benefit' => '',
            'job_deadline' => 'required',
            'job_salary' => 'required'
        ]);

        $job = new Job();
        $job_detail = new Job_Detail();
        $category = Category::where('category_id', $data['category_id'])->first();
        $employer = Employer::where('employer_id', $data['employer_id'])->first();

        $job->job_name = $data['job_name'];
        $job->job_slug = Str::slug($data['job_name'], "-");
        $job->category_id = $data['category_id'];
        $job->employer_id = $data['employer_id'];
        $job->job_address = $data['job_address'];
        $job->save();

        $job->job_slug = Str::slug($req->job_name) ."-" .$job->job_id;
        $job->save();

        $job_detail->job_id = $job->job_id;
        $job_detail->job_description = $data['job_description'];
        $job_detail->job_require = $data['job_require'];
        $job_detail->job_benefit = $data['job_benefit'];
        $job_detail->job_deadline = $data['job_deadline'];
        $job_detail->job_salary = $data['job_salary'];
        $job_detail->save();

        $category->category_total_job = $category->category_total_job + 1;
        $category->save();

        $employer->employer_total_job = $employer->employer_total_job + 1;
        $employer->save();

        return redirect('admin/add-job')->with('success', 'Thêm tin tuyển dụng thành công');
    }

    public function edit_job($id) {
        $job = Job::find($id);
        $job_detail = Job_detail::find($id);
        $category = Category::all();
        $employer = Employer::all();
        $city = City::all();
        return view('admin.edit_job', compact('job', 'job_detail', 'category', 'employer', 'city'));
    }

    public function update_job(Request $req, $id) {
        $data = $req->validate([
            'employer_id' => 'required',
            'job_name' => 'required',
            'category_id' => 'required',
            'job_address' => 'required',
            'job_description' => '',
            'job_require' => '',
            'job_benefit' => '',
            'job_deadline' => 'required',
            'job_salary' => 'required'
        ]);

        $job = Job::find($id);
        $job_detail = Job_Detail::find($id);

        $job->job_name = $data['job_name'];
        $job->job_slug = Str::slug($data['job_name'], "-") ."-" .$job->job_id;
        $job->category_id = $data['category_id'];
        $job->employer_id = $data['employer_id'];
        $job->job_address = $data['job_address'];
        $job->save();

        $job_detail->job_description = $data['job_description'];
        $job_detail->job_require = $data['job_require'];
        $job_detail->job_benefit = $data['job_benefit'];
        $job_detail->job_deadline = $data['job_deadline'];
        $job_detail->job_salary = $data['job_salary'];
        $job_detail->save();

        return redirect('admin/edit-job/' .$id)->with('success', 'Cập nhật tin tuyển dụng thành công');
    }

    public function delete_job($id) {
        $job = Job::find($id);
        $job_detail = Job_Detail::find($id);
        $category = Category::find($job->category_id);
        $employer = Employer::find($job->employer_id);

        $job->delete();
        $job_detail->delete();
        $category->category_total_job = $category->category_total_job - 1;
        $category->save();

        $employer->employer_total_job = $employer->employer_total_job - 1;
        $employer->save();

        return redirect('admin/show-job')->with('success', 'Xóa tin tuyển dụng thành công!');
    }

    public function job_details($slug) {
        $job = Job::where('job_slug', '=', $slug)->first();
        $job_detail = Job_Detail::find($job->job_id);
        $employer = Employer::find($job->employer_id);
        $category = Category::find($job->category_id);
        $categories = Category::all();
        $cities = City::all();
        $job_city = City::find($job->job_address);
        $job_example = Job::where('category_id', '=' , $job->category_id)->take(6)->get();
        $employer_all = Employer::all();
        $user = Auth::user();
        $candidate_job = Candidate_Job::where('job_id', '=', $job->job_id)->where('candidate_id', '=', $user->id)->first();        
        return view('main.job_details', compact('cities', 'candidate_job', 'user','categories', 'job_city', 'job', 'job_detail', 'employer', 'category', 'job_example', 'employer_all'));
    }

    public function filter_job(Request $req) {
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $categories = Category::all();
        $cities = City::all();
        $user = Auth::user();
        $all_details = Job_Detail::all();
        $employers = Employer::all();
        $all_jobs = Job::all();
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();

        if($req->query('filter_city') == 0 && $req->query('filter_category') == '') {
            $jobs = Job::where('job_name', 'like', '%' .$req->query('filter_jobName') .'%')->orderBy('job_id', 'desc')->paginate(10);
        } else if($req->query('filter_category') == '') {
            $jobs = Job::where('job_name', 'like', '%' .$req->query('filter_jobName') .'%')
                        ->where('job_address', '=', $req->query('filter_city'))
                        ->orderBy('job_id', 'desc')->paginate(10);
        } else if($req->query('filter_city') == 0) {
            $jobs = Job::where('job_name', 'like', '%' .$req->query('filter_jobName') .'%')
                        ->where('category_id', '=', $req->query('filter_category'))
                        ->orderBy('job_id', 'desc')->paginate(10);
        } else {
            $jobs = Job::where('job_name', 'like', '%' .$req->query('filter_jobName') .'%')
            ->where('category_id', '=', $req->query('filter_category'))
            ->where('job_address', '=', $req->query('filter_city'))
            ->orderBy('job_id', 'desc')->paginate(10);
        }

        return view('main.filter_job', compact('all_jobs', 'jobs_deadline', 'employers', 'all_details', 'user', 'cities', 'categories', 'jobs'));

    }
}
