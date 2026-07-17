<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function home()
{
    $profile = [
        'name' => 'Asad Rafeeq',
        'profession' => 'Software Engineer',
        'tagline' => 'Aspiring Laravel Developer and Data Analyst passionate about building scalable web applications and transforming data into business insights.',
        'email' => 'ar2366296@gmail.com',
        'phone' => '0303-3533463',
        'location' => 'Liaquatpur, Rahim Yar Khan'
    ];

   $projects = Project::where('featured', true)
                   ->latest()
                   ->take(3)
                   ->get();

    return view('pages.home', compact('profile', 'projects'));
}

public function contact()
{
    return view('pages.contact');
}

public function projects()
{
    $projects = Project::latest()->get();

    return view('pages.projects', compact('projects'));
}
public function resume()
{
    return view('pages.resume');
}
}
