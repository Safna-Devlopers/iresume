<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\publicController::class, 'index'])->name('index');
Route::get('/resume', [App\Http\Controllers\publicController::class, 'resume'])->name('resume');
Route::get('/works', [App\Http\Controllers\publicController::class, 'works'])->name('works');
Route::get('/works/{id}', [App\Http\Controllers\publicController::class, 'show_work'])->name('show_work');
Route::get('/contact-us', [App\Http\Controllers\publicController::class, 'contact'])->name('contact');

Auth::routes([
    'register' => false,
    'login' => true,
    'logout' => true,
    'verify' => false
]);
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::post('xhr/{type}', [App\Http\Controllers\XhrController::class, 'main'])->name('xhr');

// Admin Panel
Route::get('admin-panel/', [App\Http\Controllers\admin\dashboard::class, 'dashborad'])->name('Dashborad');
Route::get('admin-panel/dashborad', [App\Http\Controllers\admin\dashboard::class, 'dashborad'])->name('a_Dashborad');

Route::get('admin-panel/resume', [App\Http\Controllers\admin\dashboard::class, 'resume'])->name('a_resume');

Route::any('admin-panel/projects', [App\Http\Controllers\admin\projects::class, 'projects'])->name('a_Projects');
Route::any('admin-panel/projects/{id}', [App\Http\Controllers\admin\projects::class, 'show_projects'])->name('a_Show_Projects');
Route::post('admin-panel/edit-projects/{id}', [App\Http\Controllers\admin\projects::class, 'edit_projects'])->name('a_Edit_Projects');
Route::get('admin-panel/create-projects', [App\Http\Controllers\admin\projects::class, 'create_projects'])->name('a_Create_Projects');
Route::post('admin-panel/create-projects', [App\Http\Controllers\admin\projects::class, 'create_projects_post'])->name('a_Create_Projects_Post');
Route::get('admin-panel/d_project/{id}', [App\Http\Controllers\admin\projects::class, 'delate_project'])->name('a_d_project');
Route::post('admin-panel/add_project_photo/{project_id}', [App\Http\Controllers\admin\projects::class, 'add_project_photo'])->name('add_project_photo');
Route::post('admin-panel/delete_project_photo/{photo_id}', [App\Http\Controllers\admin\projects::class, 'delete_project_photo'])->name('delete_project_photo');

Route::get('admin-panel/services', [App\Http\Controllers\admin\services::class, 'services'])->name('a_services');
Route::post('admin-panel/delate-services/{id}', [App\Http\Controllers\admin\services::class, 'delate_services'])->name('a_delate_services');
Route::get('admin-panel/edit-services/{id}', [App\Http\Controllers\admin\services::class, 'show_services'])->name('a_show_services');
Route::post('admin-panel/editservices/{id}', [App\Http\Controllers\admin\services::class, 'edit_services'])->name('a_edit_services');
Route::post('admin-panel/create-services', [App\Http\Controllers\admin\services::class, 'create_services'])->name('a_create_services');

Route::get('admin-panel/works', [App\Http\Controllers\admin\r_works::class, 'works'])->name('a_works');
Route::post('admin-panel/delate-works/{id}', [App\Http\Controllers\admin\r_works::class, 'delate_works'])->name('a_delate_works');
Route::get('admin-panel/edit-works/{id}', [App\Http\Controllers\admin\r_works::class, 'show_works'])->name('a_show_works');
Route::post('admin-panel/editworks/{id}', [App\Http\Controllers\admin\r_works::class, 'edit_works'])->name('a_edit_works');
Route::post('admin-panel/create-works', [App\Http\Controllers\admin\r_works::class, 'create_works'])->name('a_create_works');

Route::get('admin-panel/eductions', [App\Http\Controllers\admin\r_eductions::class, 'eductions'])->name('a_eductions');
Route::post('admin-panel/delate-eductions/{id}', [App\Http\Controllers\admin\r_eductions::class, 'delate_eductions'])->name('a_delate_eductions');
Route::get('admin-panel/edit-eductions/{id}', [App\Http\Controllers\admin\r_eductions::class, 'show_eductions'])->name('a_show_eductions');
Route::post('admin-panel/editeductions/{id}', [App\Http\Controllers\admin\r_eductions::class, 'edit_eductions'])->name('a_edit_eductions');
Route::post('admin-panel/create-eductions', [App\Http\Controllers\admin\r_eductions::class, 'create_eductions'])->name('a_create_eductions');

Route::get('admin-panel/settings', [App\Http\Controllers\admin\dashboard::class, 'settings'])->name('a_Settings');
Route::get('admin-panel/social', [App\Http\Controllers\admin\dashboard::class, 'social'])->name('a_social');
Route::post('admin-panel/update-settings/{type}', [App\Http\Controllers\admin\dashboard::class, 'update_settings'])->name('a_Update_Settings');
Route::get('admin-panel/securety', [App\Http\Controllers\admin\dashboard::class, 'securety'])->name('a_Securety');
