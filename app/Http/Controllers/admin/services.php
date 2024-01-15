<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\services as service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class services extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function services()
    {
        $services = service::latest()->paginate(10);
        $service_cou = service::count();
        $configs = Configs::pluck('value', 'name');

        if ($service_cou == 0) {
            $show_service_list = false;
        } else {
            $show_service_list = true;
        }
        return view('admin.services', compact('configs', 'service_cou', 'show_service_list', 'services'));
    }

    public function create_services(Request $request)
    {
        $data = service::create(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'icon' => $request->icon,
                'active' => "1",
            ]
        );

        if ($data) {
            return redirect('admin-panel/services')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function show_services($id)
    {
        $service = service::find($id);
        $configs = Configs::pluck('value', 'name');

        return view('admin.editService', compact('configs', 'service'));
    }

    public function edit_services($id, Request $request)
    {
        $services = service::find($id);
        $services->update(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'icon' => $request->icon,
                'active' => "1",
            ]
        );


        if ($services) {
            return redirect('admin-panel/services')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function delate_services($id)
    {
        $services = service::find($id);
        $services->delete();

        if ($services) {
            return redirect('admin-panel/services')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }
}
