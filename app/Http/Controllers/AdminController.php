<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Employer;
use App\Candidate;
use App\Job;
use App\User;
use App\Job_Detail;
use App\City;
use App\Category;
use App\Gender;
use App\Article;
use App\Help;
use App\Revenue;
use App\Comment;
use App\Models\Privacy;
use DateTime;
use Session;
session_start();

class AdminController extends Controller
{
    public function show_dashboard() {
        $jobs = Job::all();
        $employers = Employer::all();
        $candidates = Candidate::all();
        $articles = Article::all();
        $categories = Category::orderby('category_total_job', 'desc')->take(7)->get()->toArray();
        $revenue = Revenue::orderby('date', 'desc')->take(7)->get()->toArray();

        $categories_name = [];
        $categories_total_job = [];
        $revenue_date = [];
        $revenue_revenue = [];
        for($i = 0;$i < 7; $i++) {
            array_push($categories_name, $categories[$i]['category_name']);
            array_push($categories_total_job, $categories[$i]['category_total_job']);
            $revenue[6-$i]['date'] = date("d-m-Y", strtotime($revenue[6-$i]['date']));
            array_push($revenue_date, $revenue[6-$i]['date']);
            array_push($revenue_revenue, $revenue[6-$i]['revenue']);
        }

        return view('admin.dashboard', compact('jobs', 'employers', 'candidates', 'articles'))
                ->with('categories_name', json_encode($categories_name))
                ->with('categories_total_job', json_encode($categories_total_job))
                ->with('revenue_date', json_encode($revenue_date))
                ->with('revenue_revenue', json_encode($revenue_revenue));

    }

    public function dashboard(Request $req) {
        $email = $req->email;
        $password = md5($req->password);

        $result = User::where('email', $email)->where('password', $password)->where('privacy', 0)->first();
        if(isset($result)) {
            Auth::login($result);
            $jobs = Job::all();
            $employers = Employer::all();
            $candidates = Candidate::all();
            $articles = Article::all();
            $categories = Category::orderby('category_total_job', 'desc')->take(7)->get()->toArray();
            $revenue = Revenue::orderby('date', 'desc')->take(7)->get()->toArray();


            $categories_name = [];
            $categories_total_job = [];
            $revenue_date = [];
            $revenue_revenue = [];
            for($i = 0;$i < 7; $i++) {
                array_push($categories_name, $categories[$i]['category_name']);
                array_push($categories_total_job, $categories[$i]['category_total_job']);
                $revenue[6-$i]['date'] = date("d-m-Y", strtotime($revenue[6-$i]['date']));
                array_push($revenue_date, $revenue[6-$i]['date']);
                array_push($revenue_revenue, $revenue[6-$i]['revenue']);
            }

            Session::put('noti', '');
            return view('admin.dashboard', compact('jobs', 'employers', 'candidates', 'articles'))->with('categories_name', json_encode($categories_name))
            ->with('categories_total_job', json_encode($categories_total_job))
            ->with('revenue_date', json_encode($revenue_date))
            ->with('revenue_revenue', json_encode($revenue_revenue));
        } else {
            Session::put('noti', 'Email hoặc mật khẩu không đúng');
            return redirect('/admin');
        }
        
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();

        return redirect('/user/login');
    }

    public function show_helps() {
        $helps = Help::orderBy('id','desc')->paginate(10);
        return view('admin.show_helps', compact('helps'));
    }

    public function help_infor($id) {
        $help = Help::find($id);
        $users = User::all();
        return view('admin.help_infor', compact('help', 'users'));
    }

    public function reply_help($id, Request $req) {
        $help = Help::find($id);
        $help->reply = $req->content;
        $help->status = 1;
        $help->save();

        return redirect('/admin/show-helps');
    }

    public function change_password() {
        return view('admin.change_password');
    }

    public function change_password_confirm(Request $req) {
        $user = Auth::user();
        if(md5($req->oldPassword) == $user->password) {
            $user->password = md5($req->newPassword);
            $user->save();
            return redirect('/admin/change-password')->with('success', 'Thay đổi mật khẩu thành công');
        }
        return redirect('/admin/change-password')->with('success', 'Mật khẩu cũ không đúng');
    }

    public function user() {
        Session::put('name', Auth::user()->name);
        $users = User::withTrashed()
                ->join('privacy', 'users.privacy', 'privacy.id')
                ->where('users.id', '!=', '1')
                ->where('users.id', '!=', '2')
                ->select('users.id', 'users.name', 'privacy.role', 'users.deleted_at', 'users.privacy', 'users.old_role')
                ->paginate(10);
        $privacies = Privacy::all();
        return view('admin.user', compact('users', 'privacies'));
    }

    public function change_state_user($id) {
        $user = User::withTrashed()->where('id', '=', $id)->first();
        if($user->trashed()) {
            $user->restore();
        } else {
            $user->delete();
        }
        return redirect('admin/user');
    }

    public function comments() {
        $comments = Comment::withTrashed()->orderBy('id','desc')->join('articles','articles.id','comments.article_id')->select('comments.id','comments.content','comments.user_id','comments.article_id','comments.parent_id','comments.deleted_at', 'comments.report','articles.name')->paginate(10);
        return view('admin.comments', compact('comments'));
    }

    public function reply_comment($parentID, Request $req) {
        $comment = new Comment();
        $comment->content = $req->admin_reply_comment;
        $comment->article_id = $req->articleID;
        $comment->user_id = Auth::user()->id;
        $comment->parent_id = $parentID;
        $comment->save();
        return redirect()->back();
    }

    public function change_role(Request $req, $id) {
        $user = User::withTrashed()->find($id);
        $user->old_role = $user->privacy;
        $user->privacy = $req->admin_user_role;
        $user->save();
        return redirect()->back();
    }

    public function comment_change_state($id) {
        $comment = Comment::withTrashed()->where('id', '=', $id)->first();
        if($comment->trashed()) {
            $comment->restore();
        } else {
            $comment->delete();
        }
        return redirect('admin/comments');
    }
    
}
