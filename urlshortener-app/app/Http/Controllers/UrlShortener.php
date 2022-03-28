<?php

namespace App\Http\Controllers;

use App\Models\UrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Auth\Events\Validated;

class UrlShortener extends Controller
{
    const url1 = "url1";
    const url2 = "url2";
    const url3 = "url3";
    const url4 = "url4";

    public function index()
    {
        $array = ['data'];
        json_encode($array);

        $url1 = self::url1;
        $url2 = self::url2;
        $url3 = self::url3;
        $url4 = self::url4;
    }

    public function index2()
    {
        echo "index2";
    }
    public function urlshortener(Request $request)
    {

        self::url;

        $array = [1, 2, 3, 4, 5];
        $url = $request->url;
        $url = $this->urlshortener();
        $urlshortener = Arr::random($array);
        $request->get('url');

        $url = new UrlModel();
        $url->url = "url";
        $url->link = "link";
        $url->password = "password";
        $url->save();

        redirect("https://www.google.com/");

    }

    public function urlsgenerator(){

        return view("shorturl");
    }

    public function geturl(){

        return view('');
    }
}
