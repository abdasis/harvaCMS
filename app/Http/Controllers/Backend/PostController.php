<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('user')->get();
        return view('backend.pages.post.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->judul_artikel = $request->judul_artikel;
        $post->isi_artikel = $request->isi_artikel;
        $post->status_artikel = $request->status_artikel;
        $post->excerpt_artikel = Str::limit($request->isi_artikel, 80);
        $post->slug = Str::slug($request->judul_artikel, '-');
        if ($request->hasFile('thumbnail_artikel')) {
            $gambar = $request->file('thumbnail_artikel');
            $gambar_name = date('dmyhs-') . Str::slug($request->judul_artikel, '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('thumbnail-artikel'), $gambar_name);
            $post->thumbnail_artikel = $gambar_name;
        }
        $post->user_id = Auth::user()->id;
        $post->jumlah_komentar = 0;
        $post->save();
        if ($post) {
            Session::flash('status', 'Artikel berhasil disimpan');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.pages.post.edit')->withPost($post);
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
        $post = Post::find($id);
        $post->judul_artikel = $request->judul_artikel;
        $post->isi_artikel = $request->isi_artikel;
        $post->status_artikel = $request->status_artikel;
        $post->excerpt_artikel = Str::limit($request->isi_artikel, 80);
        $post->slug = Str::slug($request->judul_artikel, '-');
        if ($request->hasFile('thumbnail_artikel')) {
            if ($post->thumbnail_artikel  && file_exists(public_path('thumbnail-artikel') . '/' . $post->thumbnail_artikel)) {
                File::delete(public_path('thumbnail-artikel') . $post->thumbnail_artikel);
            }
            $gambar = $request->file('thumbnail_artikel');
            $gambar_name = date('dmyhs-') . Str::slug($request->judul_artikel, '-') . '.' . $gambar->getClientOriginalExtension();
            $gambar->move(public_path('thumbnail-artikel'), $gambar_name);
            $post->thumbnail_artikel = $gambar_name;
        }else{
            $post->thumbnail_artikel = $post->thumbnail_artikel;
        }
        $post->user_id = Auth::user()->id;
        $post->jumlah_komentar = 0;
        $post->save();
        if ($post) {
            Session::flash('status', 'Artikel anda berhasil di update');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        Session::flash('status', 'Satu Artikel Berhasil di Hapus');
        return redirect()->back();
    }
}
