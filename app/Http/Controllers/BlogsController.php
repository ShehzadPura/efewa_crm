<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogAuthor;
use App\Models\BlogTag;
use Illuminate\Support\Facades\DB; 

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $pageTitle = 'Blogs';
        
        /*Blog Query*/
         $blogQuery = Blog::query();
        // Paginate the results
        $blogs = $blogQuery->paginate(20);

        return view('blogs.index',compact('blogs','pageTitle'));        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $pageTitle = "Add";

        /*Blog Categories*/
        $blogCategories = BlogCategory::all()->where('active',true);
        $blogCategoryList = $blogCategories->pluck('name','id');

        /*Blog Author*/
        $blogAuthors = BlogAuthor::all()->where('active',true);
        $blogAuthorList = $blogAuthors->pluck('author_name','id');
        

        /*Blog Tags*/
        $blogTags = BlogTag::all()->where('active',true);
        $blogTagList = $blogTags->pluck('name','id');

         return view('blogs.create',compact('pageTitle','blogCategoryList','blogAuthorList','blogTagList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
