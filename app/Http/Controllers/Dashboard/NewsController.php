<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\News;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function listNews(Request $request)
    {
        if($request->ajax()){
        }
            $news = News::with(['category', 'author'])->orderByDesc('id')->get();
            return response(['data' => $news]);
    }

    public function addArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
           'id' => 'required'
        ]);

        if ($validator->fails()) {
            $response = ['message' => 'You must select at least 1 category', 'status' => 'error'];
            return back()->with($response);
        }
        $categoryName = $request->input('categoryName');
        $categoryId = $request->input('id');
        return view('dashboard.news.add-news_s2', compact(['categoryName', 'categoryId']));
    }

    public function reviewToPublishArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            $response = ['message' => 'You must select category, fill title and content', 'status' => 'error'];
            return back()->with($response);
        }
        $categoryName = $request->input('categoryName');
        $categoryId = $request->input('id');
        $title = $request->input('title');
        $content = $request->input('content');

        return view('dashboard.news.add-news_s3', compact(['categoryName', 'categoryId', 'title', 'content']));
    }

    public function publishArticle(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'category_id' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        if ($validator->fails()) {
            $response = ['message' => 'You must select category, fill title and content', 'status' => 'error'];
            return view('dashboard.news.add-news_s1')->with($response);
        }
        $request->merge(['author_id' => $request->user()->id]);
        News::create($request->all());
        $response = ['message' => 'Created news successfully', 'status' => 'success'];
        return redirect(route('show_list_news'))->with($response);
    }
}
