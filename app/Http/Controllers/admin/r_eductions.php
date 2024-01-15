<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\user_eduction;
use App\Models\user_works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class r_eductions extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function eductions()
    {
        $edu = user_eduction::latest()->paginate(10);
        $edu_cou = user_eduction::count();
        $configs = Configs::pluck('value', 'name');

        return view('admin.eductions', compact('configs', 'edu_cou', 'edu'));
    }

    public function create_eductions(Request $request)
    {
        $data = user_eduction::create(
            [
                'title' => $request->title,
                'uni_title' => $request->uni_title,
                'dec' => $request->dec,
                'time' => $request->time,
            ]
        );

        if ($data) {
            return redirect('admin-panel/eductions')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function show_eductions($id)
    {
        $edu = user_eduction::find($id);
        $configs = Configs::pluck('value', 'name');

        return view('admin.editedu', compact('configs', 'edu'));
    }

    public function edit_eductions($id, Request $request)
    {
        $edu = user_eduction::find($id);
        $edu->update(
            [
                'title' => $request->title,
                'uni_title' => $request->inu_title,
                'dec' => $request->dec,
                'time' => $request->time,
            ]
        );


        if ($edu) {
            return redirect('admin-panel/eductions')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function delate_eductions($id)
    {
        $edu = user_eduction::find($id);
        $edu->delete();

        if ($edu) {
            return redirect('admin-panel/eductions')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }
}
