<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Demo\DemoController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Port\PersonalDetailController;
use App\Http\Controllers\Port\HomeController;
use App\Http\Controllers\Port\AboutController;
use App\Http\Controllers\Port\SkillController;
use App\Http\Controllers\Port\ResumeController;
use App\Http\Controllers\Port\WorkExperienceController;
use App\Http\Controllers\Port\ContactController;
use App\Http\Controllers\Port\EducationController;
use App\Http\Controllers\Port\LanguageController;
use App\Http\Controllers\Port\ReferenceController;
// use App\Http\Controllers\Port\PdfController;


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

// Route::get('/', function () {
//     return view('frontend.index');
// });

Route::get('/', function () {
    return auth()->check() ? redirect('/dashboard') : redirect('/login');
});


Route::middleware(['auth'])->group(function () {

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

    /* Personal Detail */
    Route::controller(PersonalDetailController::class)->group(function(){
        Route::get('/personal-detail/setup/', 'show')->name('personal-detail.setup');
        Route::post('/personal-detail', 'store')->name('personal-detail.store');
    });

    /* Skills */
    Route::controller(SkillController::class)->group(function(){
        Route::get('/skill/setup', 'setup')->name('skill.setup');
        Route::get('/skill/show', 'show')->name('skill.show');
        Route::post('/skill/store', 'store')->name('skill.store');
        Route::get('/skill/edit/{id}', 'edit')->name('skill.edit');
        Route::put('/skill/update/{id}', 'update')->name('skill.update');
        Route::delete('/skill/delete/{id}', 'destroy')->name('skill.delete');

        /* Display Frontend */
        Route::get('/front/skill', 'FrontSkill')->name('front.skill');
    });

    /* Work Experience */
    Route::controller(WorkExperienceController::class)->group(function(){
        Route::get('/work-experience/setup', 'setup')->name('work-experience.setup');
        Route::get('/work-experience/show', 'show')->name('work-experience.show');
        Route::post('/work-experience/store', 'store')->name('work-experience.store');
        Route::get('/work-experience/edit/{id}', 'edit')->name('work-experience.edit');
        Route::put('/work-experience/update/{id}', 'update')->name('work-experience.update');
        Route::delete('/work-experience/delete/{id}', 'destroy')->name('work-experience.delete');
    });

    /* Education */
    Route::controller(EducationController::class)->group(function(){
        Route::get('/education/setup', 'setup')->name('education.setup');
        Route::get('/education/show', 'show')->name('education.show');
        Route::post('/education/store', 'store')->name('education.store');
        Route::get('/education/edit/{id}', 'edit')->name('education.edit');
        Route::put('/education/update/{id}', 'update')->name('education.update');
        Route::delete('/education/delete/{id}', 'destroy')->name('education.delete');
    });

    /* Languages */
    Route::controller(LanguageController::class)->group(function(){
        Route::get('/language/setup', 'setup')->name('language.setup');
        Route::get('/language/show', 'show')->name('language.show');
        Route::post('/language/store', 'store')->name('language.store');
        Route::get('/language/edit/{id}', 'edit')->name('language.edit');
        Route::put('/language/update/{id}', 'update')->name('language.update');
        Route::delete('/language/delete/{id}', 'destroy')->name('language.delete');
    });

    /* References */
    Route::controller(ReferenceController::class)->group(function(){
        Route::get('/reference/setup', 'setup')->name('reference.setup');
        Route::get('/reference/show', 'show')->name('reference.show');
        Route::post('/reference/store', 'store')->name('reference.store');
        Route::get('/reference/edit/{id}', 'edit')->name('reference.edit');
        Route::put('/reference/update/{id}', 'update')->name('reference.update');
        Route::delete('/reference/delete/{id}', 'destroy')->name('reference.delete');
    });

    /* Contact */
    Route::controller(ContactController::class)->group(function(){
        Route::get('/contact/setup', 'setup')->name('contact.setup');
        Route::post('/contact/store', 'store')->name('contact.store');
    });

    /* PDF */
    Route::controller(ResumeController::class)->group(function(){
        Route::get('/resume/view', 'view')->name('resume.view');   
        Route::get('/resume/download', 'download')->name('resume.download');
        Route::get('/resume/showcase', 'showcase')->name('resume.showcase');
    });

});



Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth','verified'])->name('dashboard');

require __DIR__.'/auth.php';
