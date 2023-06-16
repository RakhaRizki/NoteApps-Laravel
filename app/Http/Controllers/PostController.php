<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = post::get();

        $data = [
            'post' => $post
        ];
        
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //untuk mengirim request input data ke table yang ada di database

        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        post::create([
            'judul' => $judul,
            'deskripsi' => $deskripsi
        ]);

        return redirect('note');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // "SELECT * FROM posts WHERE id = $id"
        $selengkapnya = Post::where('id',$id)->first();
//
        $data = [
            'post' => $selengkapnya,

        ];


        return view('posts.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        // mengambil data siswa dari tabel siswa pada database berdasarkan id tertentu. //
        $data_post = post::where('id', $id)->first();

        // menyiapkan data yang akan dikirimkan ke view untuk ditampilkan. //
        $data  = [
          'post' => $data_post
        ];

        return view('posts.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');

        // meng-update data pada tabel post pada database. //

        post::where('id', $id)->update([
            'judul' => $judul,
            'deskripsi' => $deskripsi
        ]);

        return redirect("/note");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        post::find($id)->delete();

        return redirect('/note');
    }
}
