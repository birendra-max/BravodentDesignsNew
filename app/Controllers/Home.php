<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('inc/header') . view('Home') . view('inc/footer');
    }

    public function about()
    {
        return view('inc/header') . view('About') . view('inc/footer');
    }

    public function prodService()
    {
        return view('inc/header') . view('prodservice') . view('inc/footer');
    }

    public function workflow()
    {
        return view('inc/header') . view('workflow') . view('inc/footer');
    }

    public function join_ourtTeam()
    {
        return view('inc/header') . view('join_our_team') . view('inc/footer');
    }

    public function contactUs()
    {
        return view('inc/header') . view('constactUs') . view('inc/footer');
    }

    public function  faq()
    {
        return view('inc/header') . view('faq') . view('inc/footer');
    }

    public function pp()
    {
        return view('inc/header') . view('privacypolicy') . view('inc/footer');
    }

    public function tc()
    {
        return view('inc/header') . view('termsconditions') . view('inc/footer');
    }

    public function blogs()
    {
        return view('inc/header') . view('blogs') . view('inc/footer');
    }
}
