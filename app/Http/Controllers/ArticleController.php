<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Resources\Comment as CommentResource;
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
use App\Models\Like;
use Auth;
use DateTime;
use Session;

class ArticleController extends Controller
{
    public function article_details($slug) {
        $categories = Category::all();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
        $all_jobs = Job::all();
        $employers = Employer::all();
        $article = Article::where('slug', '=', $slug)->first();
        $article->views += 1;
        $article->save();
        $user = User::find($article->author_id);

        $suggestArticle = Article::inRandomOrder()
                        ->where('id', '!=', $article->id)
                        ->where('status', '=', 1)
                        ->first();

        $comments = Comment::where('article_id', '=', $article->id)
                        ->join('users', 'users.id', 'comments.user_id')
                        ->select('comments.id','comments.user_id','comments.parent_id',      'comments.content', 'comments.liked','comments.created_at', 'users.name', 'users.avatar')
                        ->orderBy('id', 'desc')
                        ->get();
        if(Auth::check()) {
            $likes = Like::where('user_id', Auth::user()->id)->get();
        } else {
            $likes = Like::all();
        }
        return view('main.article_details', compact('suggestArticle', 'user','article', 'employers','all_jobs','jobs_deadline', 'cities', 'jobs', 'employers', 'user', 'categories', 'comments', 'likes'));
    }

    public function articles_show() {
        $categories = Category::all();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
        $all_jobs = Job::all();
        $employers = Employer::all();
        $articles = Article::where('status', 1)->latest()->paginate(5);
        $users = User::all();

        return view('main.articles_show', compact('users','articles', 'employers','all_jobs','jobs_deadline', 'cities', 'jobs', 'employers', 'user', 'categories'));
    }

    public function write_new_article() {
        $categories = Category::all();
        $jobs = Job::latest()->take(5)->get();       
        $employers = Employer::all();
        $cities = City::all();
        $user = Auth::user();
        $dt = new DateTime();
        $now = $dt->format('Y-m-d');
        $jobs_deadline = Job_Detail::where('job_deadline', '>=', $now)->orderBy('job_deadline', 'asc')->take(8)->get();
        $all_jobs = Job::all();
        $employers = Employer::all();

        return view('main.write_new_article', compact('employers','all_jobs','jobs_deadline', 'cities', 'jobs', 'employers', 'user', 'categories'));
    }

    public function add_new_article(Request $req) {
        $article = new Article();
        $article->name = $req->title;
        $article->description = $req->description;
        $article->author_id = Auth::user()->id;
        $article->save();

        if($req->hasFile('articlePath')) {
            $file = $req->articlePath;
            $headFile = Str::slug($article->name) ."-" .$article->id ."-";

            $file->move('articleImages',$headFile .$file->getClientOriginalName());
            $article->images = 'articleImages\\' .$headFile .$file->getClientOriginalName();
        }

        $article->slug = Str::slug($article->name) ."-" .$article->id;
        $article->save(); 

        return redirect('/user/write-advice-article')->with('success', 'Bài viết của bạn đang được duyệt');
    }

    public function manage_article() {
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        Session::put('name', Auth::user()->name);
        return view('admin.show_article', compact('articles'));
    }

    public function manage_article_details($id) {
        $article = Article::find($id);
        $articles = Article::orderBy('id', 'desc')->paginate(10);
        Session::put('name', Auth::user()->name);
        return view('admin.manage_article_details', compact('article'));
    }

    public function accept_article($id) {
        $article = Article::find($id);
        $article->status = 1;
        $article->save();

        return redirect('admin/manage-article-details/' .$id);
    }

    public function delete_article($id) {
        $article = Article::find($id);
        $article->delete();

        return redirect('/admin/show-articles')->with('success', 'Delete article success');
    }

    public function add_comments(Request $req) {
        $comment = new Comment();
        $comment->content = $req->content;
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $req->articleId;
        $comment->parent_id = 0;
        $comment->save();

        return redirect()->back();
    }

    public function report_comments($id) {
        $comment = Comment::find($id);
        $comment->report += 1;
        $comment->save();
        return redirect()->back();
    }

    public function like_comment($commentID) {
        $like = Like::where([
            'comment_id' => $commentID,
            'user_id' => Auth::user()->id,
        ])->first();
        $comment = Comment::find($commentID);
        if($like != null) {
           $like->forceDelete();
           $comment->liked -= 1;
           $comment->save(); 
        } else {
            $like = new Like();
            $like->comment_id = $commentID;
            $like->user_id = Auth::user()->id;
            $like->save();
            $comment->liked += 1;
            $comment->save();
        }
    }
}
