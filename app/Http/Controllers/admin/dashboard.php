<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Configs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function dashborad()
    {
        return view('admin.dashborad');
    }

    public function resume()
    {
        return view('admin.resume');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function update_settings($type, Request $request)
    {
        if ($type == "resume"){
            DB::table('configs')->where('name', 'r_name')->update(['value' => $request->name]);
            DB::table('configs')->where('name', 'r_work')->update(['value' => $request->work]);
            DB::table('configs')->where('name', 'r_info')->update(['value' => $request->info]);
            DB::table('configs')->where('name', 'r_enter')->update(['value' => $request->enter]);
            DB::table('configs')->where('name', 'r_age')->update(['value' => $request->age]);
            DB::table('configs')->where('name', 'r_freelancer')->update(['value' => $request->freelancer]);
            DB::table('configs')->where('name', 'r_country')->update(['value' => $request->country]);
            DB::table('configs')->where('name', 'r_work_houses')->update(['value' => $request->work_houses]);
            DB::table('configs')->where('name', 'r_archivment')->update(['value' => $request->archivment]);
            DB::table('configs')->where('name', 'r_acomplate_project')->update(['value' => $request->complate_project]);

            if ($request->hasFile('avatar')) {
                $file = $request->file('avatar');
                $file_name = "main.jpg";
                Storage::putFileAs('upload/', $file, $file_name);
            }

            if ($request->hasFile('pdf')) {
                $file = $request->file('pdf');
                $file_name = "resume.pdf";
                Storage::putFileAs('upload/', $file, $file_name);
            }

            return redirect('admin-panel/resume')->with('success', 'موفقیت آمیز');

        } else if ($type == "settings"){
            DB::table('configs')->where('name', 'site_name_fa')->update(['value' => $request->site_name_fa]);
            DB::table('configs')->where('name', 'domin')->update(['value' => $request->domin]);
            DB::table('configs')->where('name', 'site_keywords')->update(['value' => $request->site_keywords]);
            DB::table('configs')->where('name', 'site_desc')->update(['value' => $request->site_desc]);
            DB::table('configs')->where('name', 'social_telegram')->update(['value' => $request->social_telegram]);
            DB::table('configs')->where('name', 'social_instagram')->update(['value' => $request->social_instagram]);
            DB::table('configs')->where('name', 'social_whatsapp')->update(['value' => $request->social_whatsapp]);
            DB::table('configs')->where('name', 'site_email')->update(['value' => $request->site_email]);
            DB::table('configs')->where('name', 'site_phone')->update(['value' => $request->site_phone]);
            DB::table('configs')->where('name', 'google_tag_id')->update(['value' => $request->google_tag_id]);


            return redirect('admin-panel/settings')->with('success', 'موفقیت آمیز');

        }
    }
}
