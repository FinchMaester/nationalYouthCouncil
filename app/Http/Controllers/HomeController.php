<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Post;
use App\Models\Team;
use App\Models\About;
use App\Models\Image;
use App\Models\Other;
use App\Models\Video;
use App\Models\MyImage;
use App\Models\Document;


use App\Models\OtherPost;
use App\Models\CoverImage;
use App\Models\Information;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    //
    public function index(Request $req){

        $coverimages = CoverImage::latest()->get()->take(5);
        $links = Link::latest()->get()->take(5);
        $images = MyImage::latest()->get()->take(6);
        $teams = Team::where('role', 'Administrative Chief')
                        ->orWhere('role', 'Information Officer')->get()->take(2);
        
        // $suchana = Team::where('position', 'Information Officer')->get()->take(1);
        $about = About::first();
        $videos = Video::latest()->get()->take(4);
        $posts = Post::latest()->get()->take(6);
        $sitesetting = SiteSetting::first();
        $notices = Information::whereType('notice')->latest()->get()->take(5);
        $publications = Document::whereType('publication')->latest()->get()->take(5);
        $press = Information::whereType('pressrelease')->latest()->get()->take(5);
        $news = Information::whereType('news')->latest()->get()->take(5);
        $noticepop = Information::whereType('notice')->latest()->first();

        return view('portal.index', [
            'coverimages' => $coverimages,
            'links' => $links,
            'images' => $images,
            'teams' => $teams,
            'about' => $about,
            'videos' => $videos,
            'posts' => $posts,
            'sitesetting' => $sitesetting,
            'notices' => $notices,
            'publications' => $publications,
            'press' => $press,
            // 'suchana'=> $suchana,
            'news' => $news,
            'noticepop' => $noticepop,

        ]);

    }

}
