<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\posts;
use App\Models\comments;

class PostsController extends Controller
{
    /**
     * homepage: all the posts, 8/page
     */
    public function index() {
        return view('/laryblogger/posts', [
            'heading' => 'All blog posts',
            'blogs' => posts::latest()->simplepaginate(8)
        ]);
    }

    /**
     * read: 1 blog (and #TODO its comments)
     */
    // public function show($id) {
        // return view('/laryblogger/post',[
    public function show (posts $post) {
        return view('/laryblogger/post', [
            'blog' => $post
        ]);
    }

    /**
     * write: make a blog post (auth needed)
     */
    public function create() {
        return view('/laryblogger/create');
    }

    /**
     * submit new blog: store, and display
     */
    public function store() {
        //
    }

    /**
     * edit: modify any blog you own
     */
    public function edit() {
        //
    }

    /**
     * submit changes: sure, modify
     */
    public function update() {
        //
    }

    /**
     * delete this blog post
     */
    public function destroy() {
        //
    }

}
