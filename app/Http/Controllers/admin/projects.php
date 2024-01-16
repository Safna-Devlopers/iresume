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

    public function projects()
    {

        $projects_cou = Project::count();
        $projects = Project::paginate(10);
        $configs = Configs::pluck('value', 'name');
        return view('admin.projects', compact('configs', 'projects', 'projects_cou'));
    }
    public function show_projects($id)
    {
        $project = Project::find($id);
        $sliders = project_slider::where('project_id', $id)->get();
        $configs = Configs::pluck('value', 'name');
        return view('admin.showproject', compact('configs', 'project','sliders'));
    }

    public function create_projects()
    {
        return view('admin.project-create');
    }
    public function create_projects_Post(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'dec' => 'required',
            'finish_date' => 'required',
            'finish_time' => 'required',
            'user_id_create' => 'required',
            'customer' => 'required',
            'active' => 'required',
        ]);

        $project = Project::create(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'finish_date' => $request->finish_date,
                'user_id_create' => $request->user_id_create,
                'customer' => $request->customer,
                'active' => $request->active,
            ]
        );

        if($request->hasFile('img')){
            $user_id = Auth::user()->id;
            $imgname = "ps-" . $project->id . "-" . rand(1000, 50000) . ".jpg";

            $request->file('img')->storeAs('upload/works/', $imgname);


            $data = [
                    'photo_url' => $imgname,
                    'user_id' => $user_id,
                    'project_id' => $project->id,
                ];
            $project->slider()->create($data);

        }
//        return response()->json(['success' => 'عملیات با موفقیت انجام شد']);
      return redirect('admin-panel/projects');
    }
    public function edit_projects($id, Request $request)
    {
        $project = Project::find($id);
        $project->update(
            [
                'title' => $request->title,
                'dec' => $request->dec,
                'finish_date' => $request->finish_date,
                'user_id_create' => $request->user_id_create,
                'customer' => $request->customer,
                'active' => $request->active,
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

        $request->file('photo')->storeAs('upload/works/', $imgname);


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

        $path = "upload/works/" . $imgname;
        $del = Storage::delete($path);

        $slider->delete();


        return redirect('admin-panel/projects/' . $project);
    }
}
