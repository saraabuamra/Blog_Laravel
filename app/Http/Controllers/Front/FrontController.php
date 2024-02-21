<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;


class FrontController extends Controller
{
    public function websiteView(): View
    {
        $admins = User::get()->toArray();
        return view('front.index')->with(compact('admins'));
    }
}
