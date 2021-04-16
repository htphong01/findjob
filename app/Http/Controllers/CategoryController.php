<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Auth;
use App\Category;
use App\Job;
use App\Job_Detail;
use App\Employer;
use App\Candidate;
use App\City;
use App\Help;
use App\Revenue;
use DateTime;
use Session;
if(!isset($_SESSION)) { 
    session_start(); 
}

class CategoryController extends Controller
{

    public function category() {
        $category = Category::paginate(10);
        return view('admin.category', compact('category'));
    }

    public function add_category(Request $req) {
        $data = $req->validate([
            'category_name' => 'required',
            'category_slug' => ''
        ]);

        $result = Category::where('category_name', '=' ,$data['category_name'])->first();
        
        if($result == null) {
            $category = new Category();
            $category->category_name = $data['category_name'];
            $category->category_slug = Str::slug($data['category_name'], "-");
            $category->save();
    
            return redirect('admin/category')->with('success', 'Thêm ngành nghề thành công');
        } else {
            return redirect('admin/category')->with('error', 'Ngành nghề đã tồn tại');
        }    
    }

    public function edit_category($slug, Request $req) {
        $category = Category::all();
        $category_edit = Category::where('category_slug', '=' ,$slug)->first();
        return view('admin.edit_category')->with(compact('category_edit'));
    }

    public function update_category($slug, Request $req) {
        $data = $req->validate([
            'category_name' => 'required',
            'category_slug' => '',
        ]);

        $category = Category::where('category_slug', '=' ,$slug)->first();
        $category->category_name = $data['category_name'];
        $category->category_slug = Str::slug($data['category_name'], "-");
        $category->save();
        return redirect('admin/category')->with('success', 'Cập nhật ngành nghề thành công');
    }

    public function delete_category($slug) {
        $category = Category::where('category_slug', '=' ,$slug)->first();
        $category->delete();

        return redirect('admin/category')->with('success', 'Xóa ngành nghề thành công');
    }

    public function jobs_statistic() {
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $categories = Category::all();
        $user = Auth::user();
        $cities = City::all();
        $categories_pag = Category::orderBy('category_total_job', 'desc')->paginate(15);

        $top7Categories = Category::orderby('category_total_job', 'desc')
                            ->take(7)->get()->toArray();
        $categories_name = [];
        $categories_total_job = [];
        $categories_salary = [];
        for($i = 0;$i < 7; $i++) {
            array_push($categories_name, $top7Categories[$i]['category_name']);
            array_push($categories_total_job, $top7Categories[$i]['category_total_job']);
            array_push($categories_salary, $top7Categories[$i]['average_salary']);
        }

        $jobs = Job::all();
        $job_details = Job_Detail::all();
        $employers = Employer::all();
        
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(9)->get();

        return view('main.statistic_category', compact('cities', 'categories_pag', 'employers', 'jobs_deadline', 'job_details', 'jobs', 'customer', 'user', 'categories'))
        ->with('categories_name', json_encode($categories_name))
        ->with('categories_total_job', json_encode($categories_total_job))
        ->with('categories_salary', json_encode($categories_salary));
    }

}
