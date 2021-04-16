<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Employer;
use App\Candidate;
use App\Job;
use App\User;
use App\Job_Detail;
use App\City;
use App\Category;
use App\Article;
use App\Gender;
use App\Help;
use App\Revenue;
use Mail;
use Auth;
use DateTime;
use Session;

class CustomerController extends Controller
{

    public function login(Request $req) {
        $previousPath =  str_replace(url('/'), '', url()->previous());
        if(strpos($previousPath, 'forgot-password-update')) {
            Session::put('previousURL', '/');
        } else {
            Session::put('previousURL', url()->previous());
        }
        if(Auth::check()) {
            return redirect('/');
        } else {
            $categories = Category::all();
            $cities = City::all();
            Session::put('infor', '<button>Đăng nhập</button>');
            return view('user.login', compact('categories', 'cities'));
        }
    }

    public function loginHome(Request $req) {
        $data = $req->validate([
            'customer_username' => 'required',
            'customer_password' => 'required'
        ]);

        $customer = User::withTrashed()->where('email', $data['customer_username'])->where('password', md5($data['customer_password']))->first();
        if(isset($customer)) {
            if($customer->trashed()) {
                Session::put('noti', 'Tài khoản của bạn đã bị khóa');
                return redirect('/user/login');
            } else {
                Auth::login($customer);
                if($customer->privacy == 1) {
                    $user = Employer::find($customer->id);
                    $name = $user->employer_name;
                } else if($customer->privacy == 2) {
                    $user = Candidate::find($customer->id);
                    $name = $user->candidate_name;
                } else {
                    return redirect('/admin/dashboard');
                }
                $jobs = Job::orderBy('job_id', 'desc')->take(8)->get();
                $all_jobs = Job::all();
                $dt = new DateTime();
                $now = $dt->format('Y-m-d');
                $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
                $employers = Employer::all();
                $cities = City::all();
                $category = Category::all();
                $user_id = Auth::user()->id;
                $articles = Article::latest()->take(3)->get();
                $all_details = Job_Detail::all();
                $users = User::all();
                return redirect(Session::get('previousURL'))->with(compact('users', 'articles', 'all_details', 'user_id','category', 'cities', 'user', 'jobs', 'employers', 'jobs_deadline', 'all_jobs'));
            }
        } else {
            Session::put('noti', 'Tên đăng nhập hoặc mật khẩu không đúng');
            return redirect('/user/login');
        }
    }

    public function register() {
        if(Auth::check()) return redirect('/');
        $categories = Category::all();
        $cities = City::all();
        return view('user.register', compact('cities', 'categories'));
    }

    public function registerConfirm(Request $req) {
        $data = $req->validate([
            'customer_name' => 'required',
            'customer_username' => 'required',
            'customer_password' => 'required',
            'customer_privacy' => 'required',
        ]);

        $result = User::where('email', '=' ,$data['customer_username'])->first();
        if($result == null) {
            $customer = new User();
            $customer->name = $data['customer_name'];
            $customer->email = $data['customer_username'];
            $customer->password = md5($data['customer_password']);
            $customer->privacy = $data['customer_privacy'];
            $customer->save();

            $customer->slug = Str::slug($customer->name) ."-" .$customer->id;
            $customer->save();
            
            if($data['customer_privacy'] == 1) {
                $employer = new Employer();
                $employer->employer_id = $customer->id;
                $employer->employer_name = $data['customer_name'];
                $employer->save();
            } else {
                $candidate = new Candidate();
                $candidate->candidate_id = $customer->id;
                $candidate->candidate_name = $data['customer_name'];
                $candidate->save();
            }
            return redirect('user/register')->with('success', 'Đăng ký tài khoản thành công');
        } else {
            return redirect('user/register')->with('success', 'Email đã được sử dụng');
        }
        
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

    public function user_information($id) {
        $user = Auth::user();
        $categories = Category::all();
        $cities = City::all();
        $genders = Gender::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
            return view('main.employer_infor', compact('cities','customer', 'user', 'categories'));
        } else {
            $customer = Candidate::find($user->id);
            return view('main.user_infor', compact('cities', 'genders', 'customer', 'user', 'categories'));
        }
       
    }

    public function user_information_update($id, Request $req) {
        $user = User::find($id);
        $user->name = $req->username;
        $user->slug = Str::slug($user->name) ."-" .$user->id;
        $user->save();
        if($user->privacy == 2) {
            $candidate = Candidate::find($id);
            $candidate->candidate_name = $req->username;
            $candidate->dateOfBirth = $req->dateOfBirth;
            $candidate->gender = $req->gender;
            $candidate->address = $req->address;
            $candidate->save();
        } else {
            $employer = Employer::find($id);
            $employer->employer_name = $req->username;
            $employer->address = $req->address;
            $employer->phoneNumber = $req->phoneNumber;
            $employer->city = $req->city;
            $employer->employer_description = $req->description;
            $employer->save();
        }

        return redirect('/user/information/' .$id)->with('success', 'Cập nhật thông tin tài khoản thành công');
    }

    public function change_phone_number($id) {
        $categories = Category::all();
        $user = Auth::user();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.changeNumber', compact('cities', 'jobs', 'employers', 'customer', 'user', 'categories'));
    }

    public function update_phone_number($id, Request $req) {
        $user = User::find($id);
 
        if($user->privacy==1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }
        $customer->phoneNumber = $req->phoneNumber;
        $customer->save();
        return redirect('change-phone-number/' .$id)->with('success', 'Cập nhật số điện thoại thành công');
    }

    public function change_password() {
        $categories = Category::all();
        $user = Auth::user();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        return view('main.changePassword', compact('cities', 'jobs', 'employers', 'customer', 'user', 'categories'));
    }

    public function update_password($id, Request $req) {
        $user = User::find($id);
        if($user->password == md5($req->oldPassword)) {
            $user->password = md5($req->newPassword);
            $user->save();
            return redirect('user/change-password')->with('success', 'Cập nhật mật khẩu thành công');
        } else {
            return redirect('user/change-password')->with('success', 'Mật khẩu cũ không đúng');
        }
    }

    public function public_candidate_infor($id) {
        $categories = Category::all();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $all_jobs = Job::all();
        $users = User::all();
        $candidate = Candidate::join('users', 'users.id', '=','candidates.candidate_id')
                    ->where('candidate_id', '=', $id)
                    ->select('users.id', 'users.name', 'users.email', 'candidates.address', 'candidates.phoneNumber', 'candidates.gender','candidates.dateOfBirth', 'candidates.candidate_cv', 'candidates.avatar')
                    ->first();

        return view('main.public_candidate_infor', compact('candidate', 'users', 'employers','all_jobs', 'cities', 'jobs', 'employers', 'user', 'categories'));
    }

    public function public_employer_infor($id) {
        $categories = Category::all();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $all_jobs = Job::all();
        $users = User::all();
        $employer = Employer::join('users', 'users.id', '=','employers.employer_id')->where('employer_id', '=', $id)
                    ->select('users.id', 'users.name', 'users.email', 'employers.address', 'employers.phoneNumber', 'employers.employer_description','employers.employer_total_job', 'employers.avatar')
                    ->first();
        
        $employer_jobs = Job::where('employer_id', '=', $id)->orderBy('job_id', 'desc')
                        ->join('job_details', 'jobs.job_id', '=', 'job_details.job_id')
                        ->select('jobs.job_slug', 'jobs.job_id', 'jobs.job_name', 'jobs.job_address' ,'job_details.job_deadline')->take(4)->get();

        return view('main.public_employer_infor', compact('employer_jobs', 'employer', 'users', 'employers','all_jobs', 'cities', 'jobs', 'employers', 'user', 'categories'));
    }

    public function add_coins() {
        $categories = Category::all();
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $users = User::all();

        return view('main.add_coins', compact('users', 'employers', 'cities', 'employers', 'user', 'categories'));
    }

    public function insert_coin_bank() {
        $user = Auth::user();
        $user->coin += 50;
        $user->save();
        return redirect('user/add-coins')->with('success', 'Tài khoản của bạn đã được cộng thêm 50 xu');
    }

    public function insert_coin_card(Request $req) {
        if($req->cardNumber == 'hothanhphong') {
            $user = Auth::user();
            $user->coin += 50;
            $user->save();
            $dt = new DateTime();
            $now = $dt->format('Y-m-d');
            $revenue = Revenue::where('date', '=' , $now)->first();
            if($revenue == null) {
                $newRevenue = new Revenue();
                $newRevenue->date = $now;
                $newRevenue->revenue = 50;
                $newRevenue->save();
            } else {
                $revenue->revenue += 50;
                $revenue->save();
            }

            return redirect('user/add-coins')->with('success', 'Tài khoản của bạn đã được cộng thêm 50 xu');
        }
        return redirect('user/add-coins')->with('success', 'Mã số thẻ cào không đúng');
    }

    public function forgot_password() {
        $categories = Category::all();
        $cities = City::all();
        return view('user.forgot_password', compact('cities', 'categories'));
    }

    public function update_new_password(Request $req) {
        $email = $req->useremail;
        $user = User::where('email', '=', $email)->first();
        if($user == null) {
            return redirect('/forgot-password')->with('success', 'Địa chỉ email chưa được sử dụng');
        } else {
            $code = rand(100000,999999);
            $user->code = $code;
            $data = [
                'name' => $user->name,
                'code' => $code,
                'email' => $email
            ];
            $user->save();

            Mail::send('user.sendEmail', $data, function ($message) use($data) {
                $message->from('cty.hotjob2020@gmail.com', 'Công ty HOTJOB')
                        ->to($data['email'])
                        ->subject('Mã xác nhận');
            });

            return redirect('/confirm-code/' .$user->id);
        }
    }

    public function confirm_code_view($id) {
        $categories = Category::all();
        $cities = City::all();
        $email = User::find($id)->email;
        return view('user.confirm_code', compact('cities', 'categories', 'email', 'id'));
    }

    public function confirm_code_forgot($id, Request $req) {
        $user= User::find($id);
        $inputcode = $req->confirm_code;
        if($user->code == $inputcode) {
            $user->code = null;
            $user->save();
            $categories = Category::all();
            $cities = City::all();
            return view('user.new_password', compact('cities', 'categories', 'id'));
        } else {
            return redirect('/confirm-code/' .$id)->with('error', 'Mã xác nhận không chính xác');
        }
    }

    public function forgor_password_update(Request $req, $id) {
        $user = User::find($id);
        $user->password = md5($req->forgot_password);
        $user->save();
        $categories = Category::all();
        $cities = City::all();
        return view('user.completed_forgot_password', compact('cities', 'categories'));
    }

    public function change_avatar(Request $req) {
        $user = Auth::user();
        if($user->privacy == 1) {
            $customer = Employer::find($user->id);
        } else {
            $customer = Candidate::find($user->id);
        }

        if($req->hasFile('userAvatar')) {
            $file = $req->userAvatar;
            $headFile = Str::slug($user->name) ."-" .$user->id ."-";

            $file->move('avatar', $headFile .$file->getClientOriginalName());
            $customer->avatar = 'avatar\\' .$headFile .$file->getClientOriginalName();
            $user->avatar = 'avatar\\' .$headFile .$file->getClientOriginalName();
            $user->save();
            $customer->save();
        }
        return redirect('/user/information/' .$user->id);
    }

    public function my_articles() {
        $categories = Category::all();
        $cities = City::all();
        $articles = Article::where('author_id', '=',Auth::user()->id)->paginate(10);

        return view('main.my_articles', compact('categories', 'cities', 'articles'));
    }
}
