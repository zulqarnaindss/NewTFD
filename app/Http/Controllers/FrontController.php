<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function webDevelopment()
    {
        return view('pages.web_development');
    }
    public function seo(){
        return view('pages.seo');
    }
    public function appDevelopment()
    {
        return view('pages.app_development');
    }
    public function NewMultipleBlogs()
    {
        return view('pages.Resources.new_multiple_blogs');
    }
    public function NewPodcasts()
    {
        return view('pages.Resources.multiple_podcasts');
    }
    public function NewCaseStudy()
    {
        return view('pages.Resources.case_studies');
    }
    public function NewWhitePapers()
    {
        return view('pages.Resources.white_papers');
    }
    public function NewEvents()
    {
        return view('pages.Resources.events');
    }
    public function NewBlogDetailPage()
    {
        
        return view('pages.Resources.new_blog_detail');
    }

    public function NewCaseStudiesDetailPage()
    {
        return view('pages.Resources.case_studies_detail');
    }
    public function NewWhitePaperDetailPage()
    {
        return view('pages.Resources.white_paper_detail');
    }
    public function NewEventsDetailPage()
    {
        return view('pages.Resources.event_detail');
    }
    public function connect()
    {
        return view('pages.connect');
    }
    public function privacypolicy(){
        return view('pages.privacy-policy');
    }
    public function termsconditions()
    {
        return view('pages.terms-and-conditions');
    }
    public function cookiepolicy(){
        return view('pages.cookie-policy');
    }
    public function aboutus()
    {
        return view('pages.about-us');
    }
    public function portfolio()
    {
        return view('pages.portfolio');
    }
}
