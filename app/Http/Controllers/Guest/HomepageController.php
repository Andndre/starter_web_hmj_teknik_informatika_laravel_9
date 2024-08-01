<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class HomepageController extends Controller
{
    public function index(): View
    {
        return view('guest.pages.landing.index');
    }
}
