<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        //SEO
        $meta_desc = "Công ty TNHH Giải pháp Công Nghệ IT-Global";
        $meta_title = "Công ty TNHH Giải pháp Công Nghệ IT-Global";
        $url_canonical = $request->url();
        //---------------

        return \view('pages.home')->with(\compact('meta_desc', 'meta_title', 'url_canonical'));
    }

    public function aboutUs(Request $request)
    {
        //SEO
        $meta_desc = "Về chúng tôi - IT Global";
        $meta_title = "Về chúng tôi - IT Global";
        $url_canonical = $request->url();
        //---------------

        return \view('pages.about')->with(\compact('meta_desc', 'meta_title', 'url_canonical'));
    }

    public function faq(Request $request)
    {
        //SEO
        $meta_desc = "Hỏi đáp & Quy trình làm việc";
        $meta_title = "Hỏi đáp & Quy trình làm việc";
        $url_canonical = $request->url();
        //---------------

        return \view('pages.faq')->with(\compact('meta_desc', 'meta_title', 'url_canonical'));
    }

    public function contact(Request $request)
    {
        //SEO
        $meta_desc = "Liên hệ với chúng tôi";
        $meta_title = "Liên hệ với chúng tôi";
        $url_canonical = $request->url();
        //---------------

        return \view('pages.contact')->with(\compact('meta_desc', 'meta_title', 'url_canonical'));
    }

    public function project(Request $request)
    {
        //SEO
        $meta_desc = "Dự án của IT-Global";
        $meta_title = "Dự án của IT-Global";
        $url_canonical = $request->url();
        //---------------

        return \view('pages.project')->with(\compact('meta_desc', 'meta_title', 'url_canonical'));
    }
}
