<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\user_works;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class r_works extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function works()
    {
        $works = user_works::latest()->paginate(10);
        $work_cou = user_works::count();
        $configs = Configs::pluck('value', 'name');

        return view('admin.works', compact('configs', 'work_cou', 'works'));
    }

    public function create_works(Request $request)
    {
        $data = user_works::create(
            [
                'title' => $request->title,
                'work_title' => $request->work_title,
                'dec' => $request->dec,
                'time' => $request->time,
            ]
        );

        if ($data) {
            return redirect('admin-panel/works')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function show_works($id)
    {
        $work = user_works::find($id);
        $configs = Configs::pluck('value', 'name');

        return view('admin.editwork', compact('configs', 'work'));
    }

    public function edit_works($id, Request $request)
    {
        $work = user_works::find($id);
        $work->update(
            [
                'title' => $request->title,
                'work_title' => $request->work_title,
                'dec' => $request->dec,
                'time' => $request->time,
            ]
        );


        if ($work) {
            return redirect('admin-panel/works')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function delate_works($id)
    {
        $work = user_works::find($id);
        $work->delete();

        if ($work) {
            return redirect('admin-panel/works')->with('success', 'موفقیت آمیز');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }
}
