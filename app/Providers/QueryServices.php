<?php

namespace App\Providers;

use App\Article;
use DB;

class QueryServices
{
    public static function listArticles(){
        try{
           return $articles = DB::table('articles')->simplePaginate(5);
        } catch (\Exception $e){
           echo 'Unfortunately there was a problem with finding the articles :(';
        }
    }

    public static function sortedArticles(){
        try{
            return $articles = Article::orderByRaw('created_at DESC')->simplePaginate(5);
        } catch(\Exception $e){
            echo 'Couldn\'t get the sorted list of aricles :(';
        }
    }

    public static function mostWords(){
        try{
            return $mostWords = Article::select('id as Cikk_azonosito')
                ->orderBy('description', 'DESC')
                ->first();
        } catch (\Exception $e) {
            echo 'I can\'t currently show you which article has the most words :(';
        }
    }

    public static function dailyAvgChars(){
        try{
            return $dailyAvgChars = DB::table('articles')
                ->selectRaw('avg(Char_Length(description)) as Atlaghossz ')
                ->get();
        } catch (\Exception $e) {
            echo 'I can\'t currently show you what the avarage character count per day is :(';
        }
    }

    public static function articlesPerDay(){
        try{
            return $articlesPerDay = DB::table('articles')
                ->selectRaw('count(id) as Cikkek_szama, Date(created_at) as Keszites_datuma')
                ->groupByRaw('Date(created_at)')
                ->get();
        } catch (\Exception $e) {
            echo 'I can\'t currently show you how many articles were updatet per day :(';
        }
    }
}