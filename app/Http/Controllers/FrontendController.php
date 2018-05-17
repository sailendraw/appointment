<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Blogs;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Article $articles, Blogs $blogs)
    {
        $this->blogs = $blogs;
        $this->article=$articles;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = $this->article->getAll();
        $blogs = $this->blogs->getAll();
        return view('welcome',['articleData'=>$articles,'blogData'=>$blogs]);

    }

/*$site_config_data = SiteConfig::all('id','name','url','slogan')->first();
return view('home',['sitename'=>$site_config_data->name,'url'=>$site_config_data->url,'slogan'=>$site_config_data->slogan]);*/


    protected function aboutUs(){
        return view('frontend.about');
    }
    public function articleShow($id){
        $articles = $this->article->findWithDetail($id);
        return view('frontend.article',['articleData'=>$articles]);
    }
    public function blogShow($id){
        $blog = $this->blogs->findWithDetail($id);
        return view('frontend.blog',['blogData'=>$blog]);
    }
}
