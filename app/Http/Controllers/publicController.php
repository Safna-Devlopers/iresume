<?php

namespace App\Http\Controllers;

use App\Models\Configs;
use App\Models\project_slider;
use App\Models\Projects;
use App\Models\services;
use App\Models\user_eduction;
use App\Models\user_works;

class publicController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        $configs = Configs::pluck('value', 'name');
        $services = services::where('active','1')->get();
        return view('public.' . $configs['theme'] . '.index', compact('services'));
    }

    public function resume()
    {
        $configs = Configs::pluck('value', 'name');
        $edus = user_eduction::all();
        $works = user_works::all();
        return view('public.' . $configs['theme'] . '.resume', compact('edus','works'));
    }

    public function works()
    {
        $configs = Configs::pluck('value', 'name');
        $works = Projects::where('active', '1')->with('slider')->latest()->paginate(100);
        return view('public.' . $configs['theme'] . '.works', compact('works'));
    }

    public function show_work($id)
    {
        $configs = Configs::pluck('value', 'name');
        $work = Projects::with('slider')->find($id);
        return view('public.' . $configs['theme'] . '.show_work', compact('work'));
    }

    public function contact()
    {
        $configs = Configs::pluck('value', 'name');
        return view('public.' . $configs['theme'] . '.contact');
    }
}
