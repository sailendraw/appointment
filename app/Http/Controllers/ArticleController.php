<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\SiteConfig;


class ArticleController extends Controller
{
    /**
     * @var
     */
    public $article;
    public function __construct(Article $article)
    {
        $this->article=$article;
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleData = $this->article->getAll();
        $site_config_data = SiteConfig::all('id','name','url','slogan')->first();
        return view('article.index',['articleData'=>$articleData,'sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( ArticleRequest $request)
    {
        $articleModel =$this->article->saveArticle($request->all());
        if (!$articleModel) {
            return redirect()->back()->withError('Error while adding ');
        }

        return redirect()->route('article.show', $articleModel->id)->withSuccess(' added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = $this->article->findWithDetail($id);


        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article      = $this->article->findWithDetail($id);


        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $updated = $this->article->updateArticle($id, $request->all());

        if (!$updated) {
            return redirect()->route('article.index')->withError("Article Details Not Updated");
        }

        return redirect()->route('article.show',$id)->withSuccess("Article Details Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $updated = $this->article->deleteArticle($id);

        if (!$updated) {
            return redirect()->route('article.index')->withError("Article Details Not Updated");
        }

        return redirect()->route('article.index')->withSuccess("Article Details Updated Successfully");
    }
}
