<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $News= News::latest()->get();
        return view("News.news",["News"=> $News]);
    }

    public function create()
    {
        return view("News.news-add");
    }

    public function store(Request $request)
    {
        $News = new News();
        $News->title = request("news_title");
        $News->description = request("news_description");     
    
        if( $request->hasFile('news_image')) {
            $image = $request->file('news_image');
            $path = public_path(). '/assets/images/uploads/';
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);
    
            $News->image = $filename;
        }    
        $News->save();
        return redirect("/news");    
    }
 
    public function edit($id){
        $News = News :: find($id);
        return view("news.news-edit",["News"=> $News]);
    }

    public function update(Request $request,$id){
        $News=News::find($id);
        $News->title = request("news_edit_title");
        $News->description = request("news_edit_description");

        if( $request->hasFile('news_edit_image')) {
            $image = $request->file('news_edit_image');
            $path = public_path(). '/assets/images/uploads/';
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);
    
            $News->image = $filename;
            $News->save();
        }else{
            $News->save();
        } 
        return redirect("/news");
    }
}
