<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use App\Models\project_slider;
use App\Models\Projects as Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class projects extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function setlang()
    {
        if (Auth::check()) {
            if (Auth::user()->language == "en") {
                app()->setLocale('en');
                return true;
            } elseif (Auth::user()->language == "fa") {
                app()->setLocale('fa');
                return true;
            } else {
                app()->setLocale('en');
                return true;
            }
        } else {
            return true;
        }
    }
    public function projects()
    {
        $this->setlang();

        $projects_cou = Project::count();
        $projects = Project::paginate(10);
        $configs = Configs::pluck('value', 'name');
        return view('admin.projects', compact('configs', 'projects', 'projects_cou'));
    }
    public function show_projects($id)
    {
        $this->setlang();
        $project = Project::find($id);
        $sliders = project_slider::where('project_id', $id)->get();
        $configs = Configs::pluck('value', 'name');
        return view('admin.showproject', compact('configs', 'project','sliders'));
    }
    public function create_projects(Request $request)
    {
        //        dd($request);
        $date = $request->finish_date;
        $time = $request->finish_time;
        $all_time = $date . " " . $time;
        $finish_date = \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y/m/d H:i', $all_time)->getTimestamp();
        $validatedData = $request->validate([
            'title' => 'required',
            'dec' => 'required',
            'finish_date' => 'required',
            'finish_time' => 'required',
            'user_id_create' => 'required',
            'customer_id' => 'required',
            'progress' => 'required',
            'active' => 'required',
            'status' => 'required',
        ]);

        $project = Project::create(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'finish_date' => $finish_date,
                'user_id_create' => $request->user_id_create,
                'customer_id' => $request->customer_id,
                'progress' => $request->progress,
                'active' => $request->active,
                'status' => $request->status,
            ]
        );


        //        return response()->json(
        //            ['success' => 'عملیات با موفقیت انجام شد']
        //        );

        return redirect('admin-panel/projects');
    }
    public function edit_projects($id, Request $request)
    {
        $project = Project::find($id);
        $date = $request->finish_date;
        $time = $request->finish_time;
        $all_time = $date . " " . $time;
        $finish_date = \Morilog\Jalali\CalendarUtils::createCarbonFromFormat('Y/m/d H:i', $all_time)->getTimestamp();
        $project->update(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'finish_date' => $finish_date,
                'user_id_create' => $request->user_id_create,
                'customer_id' => $request->customer_id,
                'progress' => $request->progress,
                'active' => $request->active,
                'status' => $request->status,
            ]
        );

        if ($project) {
            return response()->json(['success' => 'عملیات با موفقیت انجام شد']);
        } else {
            return response()->json(['error' => 'عملیات با موفقیت انجام نشد']);
        }
    }
    public function delate_project($id)
    {
        $project = Project::find($id);
        $project->delete();

        if ($project) {
            return redirect('admin-panel/projects');
        } else {
            return redirect('admin-panel/dashboard');
        }
    }

    public function add_project_photo(Project $project_id, Request $request)
    {
        $user_id = Auth::user()->id;
        $imgname = "ps-" . $project_id->id . "-" . rand(1000, 50000) . ".jpg";

        $request->file('photo')->storeAs('projectsfile/slider', $imgname);


        $data = project_slider::create(
            [
                'photo_url' => $imgname,
                'user_id' => $user_id,
                'project_id' => $project_id->id,
            ]
        );


        return redirect('admin-panel/projects/' . $project_id->id);
    }

    public function delete_project_photo($photo_id, Request $request)
    {
        $project = $request->p_id;
        $slider = project_slider::find($photo_id);

        $imgname = $slider->photo_url;

        $path = "projectsfile/slider/" . $imgname;
        $del = Storage::delete($path);

        $slider->delete();


        return redirect('admin-panel/projects/' . $project);
    }
}
