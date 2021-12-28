<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use App\Models\Service;
use App\Models\About;
use App\Models\Portfolio;
use App\Models\Portfolio_cat;
use App\Models\Team;
use App\Models\Contactus;
use App\Models\Hme;
use App\Models\Setup;

class HomeController extends Controller
{
    /**
     * Create a new controller instance. 
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $hme = Hme::first();
        $service_t = Service::first();
        $setups = Setup::get();
        $service = Service::get();
        $about = About::first();
        $portfolio = Portfolio::get(); 
        $portfoliocats = Portfolio_cat::get();
        $team_t = Team::first();
        $team = Team::get();
        $setup = Setup::first();
        $contactus = Contactus::first();
        return view('home',compact('hme','setup','setups','service_t','service','about','portfolio','portfoliocats','team_t','team','contactus'));
    }

   
    
}










