<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\Portfolio;
use App\Models\Client;
use App\Models\Team;
use App\Models\Ppid;
use App\Models\Ifografi;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $services = Service::all();
        $portfolios = Portfolio::all();
        $latestPortfolios = Portfolio::latest()->take(3)->get();
        $clients = Client::all();
        $contact = Contact::first();
        $ppids = Ppid::all();
        $ifografis = Ifografi::all();
        


        return view('home.index', compact(
           'sliders', 
           'about', 
           'services', 
           'portfolios', 
           'latestPortfolios',
           'clients',
           'contact',
           'ppids',
           'ifografis',
        ));
    }

    public function about()
    {   
        $about = About::first();
        $clients = Client::all();
        $teams = Team::all();
        $contact = Contact::first();

        return view('home.about', compact(
            'about', 
            'clients', 
            'teams', 
            'contact', 
         ));
    }

    public function team()
    {
        $teams = Team::all();
        $contact = Contact::first();
        $service = Service::all();

        return view('home.team', compact('teams', 
        'contact'));
    }
    
    public function portfolio()
    {
        $portfolios = Portfolio::all();
        $contact = Contact::first();
        $service = Service::all();

        return view('home.portfolios', compact('portfolios', 
        'contact'));
    }

    public function contact()
    {
        $contact = Contact::first();
        $service = Service::all();

        return view('home.contact', compact('contact'));
    }
    
    public function testimonials()
    {
        $testimonial = Testimonial::all();
        $contact = Contact::first();

        return view('home.testimonials', compact('testimonial', 
        'contact'));
    }

    public function services()
    {
        $service = Service::all();
        $contact = Contact::first();
        $ppids = Ppid::all();

        return view('home.services', compact('service', 
        'contact', 'ppids'));
    }

    public function showSejarah()
    {
        $contact = Contact::first();

        return view('home.sejarah', compact('contact'));
    }

}
