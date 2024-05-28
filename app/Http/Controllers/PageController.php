<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Player;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        $news = News::latest()->limit(3)->get();
        $players = Player::all();
        return view('pages.index',[
            'news' => $news,
            'players' => $players
        ]);
    }

    public function about(){
        return view('pages.about');
    }

    public function news(){

        $news = News::latest()->paginate(6);

        return view('pages.news.index', [
            'items' => $news
        ]);
    }

    public function singleNews($news)
    {
        $item = News::with('user')->findOrFail($news);
        return view('pages.news.single-news', [
            'item' => $item
        ]);
    }

    public function team(){

        $players = Player::all();

        return view('pages.team', [
            'players' => $players
        ]);
    }

    public function singlePlayer(Player $player){

        return view('pages.single-player', [
            'player' => $player
        ]);
    }

}
