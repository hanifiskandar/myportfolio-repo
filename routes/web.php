<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Port\HomeController;
use App\Http\Controllers\Port\AboutController;
use App\Http\Controllers\Port\SkillController;
use App\Http\Controllers\Port\ResumeController;
use App\Http\Controllers\Port\WorkController;
use App\Http\Controllers\Port\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Route::controller(DemoController::class)->group(function(){
    Route::get('/about', 'Index')->name('about.page')->middleware('check');
    Route::get('/contact', 'ContactMethod')->name('contact.page');
});

/* Admin All Route */
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin/logout', 'destroy')->name('admin.logout');
    Route::get('/admin/profile', 'Profile')->name('admin.profile');
    Route::get('/edit/profile', 'EditProfile')->name('edit.profile');
    Route::post('/store/profile', 'StoreProfile')->name('store.profile');
    Route::get('/change/password', 'ChangePassword')->name('change.password');
    Route::post('/update/password', 'UpdatePassword')->name('update.password');
});

/* Home */
Route::controller(HomeController::class)->group(function(){
    Route::get('/home/setup', 'HomeSetup')->name('home.setup');
    Route::post('/store/home', 'StoreHome')->name('store.home');
   
 
});
/* About */
Route::controller(AboutController::class)->group(function(){
    Route::get('/about/setup', 'AboutSetup')->name('about.setup');
    Route::post('/store/about', 'StoreAbout')->name('store.about');
   
 
});

/* Skills */
Route::controller(SkillController::class)->group(function(){
    Route::get('/skill/setup', 'SkillSetup')->name('skill.setup');
    Route::get('/skill/all', 'SkillAll')->name('skill.all');
    Route::post('/store/skill', 'StoreSkill')->name('store.skill');
    Route::get('/skill/edit/{id}', 'SkillEdit')->name('skill.edit');
    Route::post('/update/skill', 'UpdateSkill')->name('update.skill');
    Route::get('/skill/delete/{id}', 'SkillDelete')->name('skill.delete');

    /* Display Frontend */
    Route::get('/front/skill', 'FrontSkill')->name('front.skill');
 
});

/* Resume */
Route::controller(ResumeController::class)->group(function(){
    Route::get('/resume/setup', 'ResumeSetup')->name('resume.setup');
    Route::post('/store/resume', 'StoreResume')->name('store.resume');
    Route::get('/resume/all', 'ResumeAll')->name('resume.all');
    Route::get('/resume/edit/{id}', 'ResumeEdit')->name('resume.edit');
    Route::post('/update/resume', 'UpdateResume')->name('update.resume');
    Route::get('/resume/delete/{id}', 'ResumeDelete')->name('resume.delete');
    
});

/* Work */
Route::controller(WorkController::class)->group(function(){
    Route::get('/work/setup', 'WorkSetup')->name('work.setup');
    Route::post('/store/work', 'StoreWork')->name('store.work');
    Route::get('/work/all', 'WorkAll')->name('work.all');
    Route::get('/work/edit/{id}', 'WorkEdit')->name('work.edit');
    Route::post('/update/work', 'UpdateWork')->name('update.work');
    Route::get('/work/delete/{id}', 'WorkDelete')->name('work.delete');
    Route::get('/work/detail/{id}', 'WorkDetail')->name('work.details');
    
    
});

/* Contact */
Route::controller(ContactController::class)->group(function(){
    // Route::get('/contact', 'Contact')->name('contact.me');
    Route::get('/contact/all', 'ContactAll')->name('contact.all');
    Route::post('/store/contact', 'StoreContact')->name('store.contact');
    Route::get('/contact/delete/{id}', 'ContactDelete')->name('contact.delete');

   
    
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
