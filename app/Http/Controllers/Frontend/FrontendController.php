<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Post::where('status_artikel', 'Published')->with('user')->orderBy('created_at', 'DESC');
        $recents = Post::orderBy('created_at' , 'DESC')->paginate(5);

        return view('frontend.index')->with([
            'posts' => $posts,
            'recents' => $recents
        ]);
    }

    public function singleArtikel($artikel)
    {
        $post =  Post::where('slug', $artikel)->with('user')->first();
        $recents = Post::orderBy('created_at' , 'DESC')->paginate(5);
        return view('frontend.pages.single-post')->withPost($post)->withRecents($recents);
    }
}
