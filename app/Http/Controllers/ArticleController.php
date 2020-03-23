<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use DB;
use App\Providers\QueryServices;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = QueryServices::listArticles();
        return view('articles.index', compact('articles'));
    }

    public function sorted()
    {
        $articles = QueryServices::sortedArticles();
        return view('articles.sorted', ['articles' => $articles]);
    }

    public function statistics()
    {
        $mostWords = QueryServices::mostWords();
        $dailyAvgChars = QueryServices::dailyAvgChars();
        $articlesPerDay = QueryServices::articlesPerDay();
        
        return view('articles.statistics', ['mostWords' => $mostWords, 'articlesPerDay' => $articlesPerDay, 'dailyAvgChars' => $dailyAvgChars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try{
            $title = $request->input("title");
            $description = $request->input("description");
            $lables = $request->input("lables");
            $created_at = date('Y-m-d H:i:s');

            $data = array("title"=>$title, "description"=>$description, "lables"=>$lables, "created_at"=>$created_at);

            DB::table('articles')->insert($data);

            DB::commit();
            return redirect('articles/create');
        } catch(\Exception $e){
            DB:rollback();
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
        try{
            $article = Article::find($id);
        } catch(\Exception $e){
            echo 'There was an error gettint this article. We are working on the fix. Maybe readd an other article in the meantime? :)';
        }
        return view('articles.show', ['article' => $article]);
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
