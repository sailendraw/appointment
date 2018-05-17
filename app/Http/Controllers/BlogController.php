<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blogs;
use App\SiteConfig;

class BlogController extends Controller
{
    /**
     * @var
     */
    public $blog;
    public function __construct(Blogs $blog)
    {
        $this->blog = $blog;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogData = $this->blog->getAll();
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();
        return view('blog.index',['blogData'=>$blogData,'sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( BlogRequest $request)
    {
        $blogModel =$this->blog->saveBlog($request->all());
        if (!$blogModel) {
            return redirect()->back()->withError('Error while adding ');
        }

        return redirect()->route('blog.show', $blogModel->id)->withSuccess(' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = $this->blog->findWithDetail($id);


        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog      = $this->blog->findWithDetail($id);


        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, $id)
    {
        dd('aa');
        $updated = $this->blog->updateBlog($id, $request->all());

        if (!$updated) {
            return redirect()->route('blog.index')->withError("Blogs Details Not Updated");
        }

        return redirect()->route('blog.show',$id)->withSuccess("Blogs Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $updated = $this->blog->deleteBlog($id);

        if (!$updated) {
            return redirect()->route('blog.index')->withError("Blogs Details Not Updated");
        }

        return redirect()->route('blog.index')->withSuccess("Blogs Details Updated Successfully");
    }
}
