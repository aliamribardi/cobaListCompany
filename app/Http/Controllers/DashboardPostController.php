<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/dashboard/create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request['category_id'] == 'lainnya'){
            $validatedData = $request->validate([
            'category' => 'required'
        ]);   
            $category = new Category;
            $category->name = $request['category'];
            $category->slug = Str::slug($request['category']);
            $category->save();
            $data = $category->id;

           $request['category_id'] = $data;
        }
        
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'category_id' => 'required',
        ]);

        Post::create($validatedData);

        return redirect('/admin')->with('success', 'Berhasil Di Tambah!');
        
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
    public function edit(Post $dashboard)
    {
        return view('/dashboard/edit', [
            'post' => $dashboard,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $dashboard)
    {
         if($request['category_id'] == 'lainnya'){
             $validatedData = $request->validate([
            'category' => 'required',
        ]);
            $category = new Category;
            $category->name = $request['category'];
            $category->slug = Str::slug($request['category']);
            $category->save();
            $data = $category->id;

           $request['category_id'] = $data;
        }
         $validatedData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'category_id' => 'required',
        ]);


        Post::where('id', $dashboard->id)
            ->update($validatedData);

        return redirect('/admin')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $dashboard)
    {
        // Post::where('id', $id)->delete();
        // $post->delete();

        Post::destroy($dashboard->id);

        return redirect('/admin')->with('success', 'Berhasil di Hapus');
    }
}
