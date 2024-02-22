<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artical;
use App\Models\Certificate;
use App\Models\Experience;
use App\Models\Qualification;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\View\View;


class FrontController extends Controller
{
    public function index(): View
    {
        Session::put('page','index');
        $admins = User::get()->toArray();
        $qualifications = Qualification::get()->toArray();
        $experiences = Experience::get()->toArray();
        return view('front.pages.index')->with(compact('admins','qualifications','experiences'));
    }

    public function cv(): View
    {
        Session::put('page','cv');
         $articals = Artical::get()->toArray();
        $admins = User::get()->toArray();
        return view('front.pages.artical')->with(compact('articals','admins'));
    }

    public function cvArtical(): View
    {
        Session::put('page','cv_artical');
        $articals = Artical::get()->toArray();
        $admins = User::get()->toArray();
        return view('front.pages.artical')->with(compact('articals','admins'));
    }

    public function cvPoem(): View
    {
        Session::put('page','cv_poem');
        return view('front.pages.poem');
    }

    public function cvQualification(): View
    {
        Session::put('page','cv_qualification');
        $qualifications = Qualification::get()->toArray();
        $certificates = Certificate::get()->toArray();
        return view('front.pages.qualification')->with(compact('qualifications','certificates'));
    }
    
    public function cvExperience(): View
    {
        Session::put('page','cv_experience');
        $experiences = Experience::get()->toArray();
        return view('front.pages.experience')->with(compact('experiences'));
    }


    public function cvChannel(): View
    {
        Session::put('page','cv_channel');
        return view('front.pages.channel');
    }

    public function cvImage(): View
    {
        Session::put('page','cv_image');
        return view('front.pages.image');
    }

    public function cvDesign(): View
    {
        Session::put('page','cv_design');
        return view('front.pages.design');
    }

    public function cvFile(): View
    {
        Session::put('page','cv_file');
        return view('front.pages.file');
    }
    
}
