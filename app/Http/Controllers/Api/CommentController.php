<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
use Auth;
use App\Http\Resources\Comment as CommentResource;
use Illuminate\Database\Eloquent\SoftDeletes;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Comment::withTrashed()
            ->join('users', 'users.id', 'comments.user_id')
            ->select('comments.id','comments.user_id','comments.parent_id', 'comments.content', 'comments.liked', 'comments.created_at','comments.deleted_at', 'users.name', 'users.avatar')
            ->orderBy('id', 'desc')
            ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $comment = new Comment();
        $comment->content = $req->content;
        $comment->user_id = Auth::user()->id;
        $comment->article_id = $req->article_id;
        $comment->parent_id = $req->parent_id;

        $comment->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Comment::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return response()->json($comment);
    }
}
