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
use App\Models\Profil;

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
        $profils = Profil::all();
        


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
           'profils',
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

    public function ppids(Request $request)
{
    $service = Service::all();
    $contact = Contact::first();
    
    $query = Ppid::query();

    if ($request->has('search')) {
        $searchTerm = '%' . $request->input('search') . '%';
        $query->where('title', 'like', $searchTerm)
        ->orWhere('file', 'like', $searchTerm);
    }

    $ppids = $query->get();

    return view('home.services', compact('service', 'contact', 'ppids'));
}

    public function showSejarah()
    {
        $contact = Contact::first();

        return view('home.sejarah', compact('contact'));
    }

    public function showPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $contact = Contact::first(); // Pastikan Anda memiliki Contact model dan data
    
        return view('home.portfolio-details', compact('portfolio', 'contact'));
    }

    public function showteam($id)
    {
        $team = Team::findOrFail($id);
        $contact = Contact::first(); // Pastikan Anda memiliki Contact model dan data
    
        return view('home.team-details', compact('team', 'contact'));
    }

    
}
