<?php

namespace App\Http\Controllers;

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
use App\Article;
use App\Customer;
use App\Gender;
use App\Revenue;
use Auth;
use DateTime;
use Session;
if(!isset($_SESSION)) { 
    session_start(); 
}


class HomeController extends Controller
{
    
    public function index() {
        $jobs = Job::orderBy('job_id', 'desc')->take(8)->get();
        $all_jobs = Job::all();
        $all_details = Job_Detail::all();
        $dt = new DateTime();
        $now = $dt->format('d-m-Y');
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
        $employers = Employer::all();
        $cities = City::all();
        $category = Category::all();
        $articles = Article::latest()->where('status', '=', 1)->take(3)->get();
        $users = User::all();

        return view('main.homepage')->with(compact('users', 'articles', 'all_details', 'category', 'cities', 'jobs','employers','jobs_deadline', 'all_jobs'));
    }

    public function new_job(Request $req) {
        $sort = $req->query('sort');
        if(!$sort) {
            $sort = 'desc';
        }
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $jobs = Job::orderBy('job_id', $sort)->paginate(10)->withQueryString();
        $categories = Category::all();
        $cities = City::all();
        $user = Auth::user();
        $all_details = Job_Detail::all();
        $employers = Employer::all();
        $all_jobs = Job::all();
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
        
        return view('main.new_job', compact('all_jobs', 'jobs_deadline', 'employers', 'all_details', 'user', 'cities', 'categories', 'jobs', 'sort'));   
    }

    public function show_help() {
        $categories = Category::all();
        $user = Auth::user();
        $employers = Employer::all();
        $cities = City::all();

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        $helps = Help::where('user_id', '=', $user->id)->take(5)->get();

        return view('main.show_help', compact('helps', 'cities', 'employers', 'customer', 'user', 'categories'));
    }

    public function help_require() {
        $categories = Category::all();
        $user = Auth::user();
        $employers = Employer::all();
        $cities = City::all();

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.help_requires', compact('cities', 'employers', 'customer', 'user', 'categories'));
    }

    public function send_help_require(Request $req) {
        $help = new Help();
        $help->user_id = Auth::user()->id;
        $help->title = $req->title;
        $help->content = $req->content;
        $help->save();

        return redirect('/send-help')->with('success', 'Gữi hỗ trợ thành công');
    }

    public function help_infor($id) {
        $categories = Category::all();
        $user = Auth::user();
        $employers = Employer::all();
        $cities = City::all();
        $help = Help::find($id);

        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.help_infor', compact('help', 'cities', 'employers', 'customer', 'user', 'categories'));
    }
    
}
