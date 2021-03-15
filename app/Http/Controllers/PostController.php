<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function addPost() {
        $post = new Post();
        $post->title = "Second Post";
        $post->body = "Second Post description";
        $post->save();
        return "Post has been created";
    }


    public function addComment($id) {
        $post = Post::find($id);
        $comment = new Comment();
        $comment->comment = "This is the Second  comment for the First post.";
        $post->comments()->save($comment);
        return "Commment has been posted";
    }

    public function getCommentByPost($id){
        $comments = Post::find($id)->comments;
        return $comments;
    }
    
}
