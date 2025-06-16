<?php

//backend
use App\Http\Controllers\backend\AdminLoginController;
use App\Http\Controllers\backend\AdminHomeController;
use App\Http\Controllers\backend\AdminProjectsController;
use App\Http\Controllers\backend\TeamMemberController;
use App\Http\Controllers\backend\AdminFaqsController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/projects', [ProjectsController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'submitMessage'])->name('contact.store');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

Route::get('/index', function () {
    return view('index');
})->name('index');


// Backend
//Login Page
Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::get('/admin/login', function(){
    if(session()->has('email')){
        return redirect('/admin');
    } else{
        return view('backend.login');
    }

});
Route::post('/admin/login', [AdminLoginController::class, 'onLogin']);
Route::get('/admin/logout', [AdminLoginController::class, 'logoutAdmin']);

Route::get('/admin', [AdminHomeController::class, 'index']);
// Route::get('/admin', function(){
//     if(session()->has('email')){
//         return redirect('/admin');
//     } else{
//         return view('backend.login');
//     }

// });


//Admin Management
Route::get('/admin/register', [AdminHomeController::class, 'registerAdmin'])->name('admin.create');
Route::post('/admin/register', [AdminHomeController::class, 'submitAdminRecord']);
Route::get('/admin/admins-list', [AdminHomeController::class, 'showAdminRecord'])->name('admin.show');
Route::get('/admin/delete/{id}', [AdminHomeController::class, 'deleteAdminRecord'])->name('admin.delete');
Route::get('/admin/edit/{id}', [AdminHomeController::class, 'editAdminRecord'])->name('admin.edit');
Route::get('/admin/update/{id}', [AdminHomeController::class, 'updateAdminRecord'])->name('admin.update');


// Team Management
Route::get('/admin/team', [TeamMemberController::class, 'index'])->name('team.show');
Route::get('/admin/team-member-details/{id}', [TeamMemberController::class, 'showTeamMember'])->name('team.details');
Route::get('/admin/team-add', [TeamMemberController::class, 'registerTeam'])->name('team.add');
Route::post('/admin/team-add', [TeamMemberController::class, 'submitTeamRecord']);
Route::get('/admin/team-edit/{id}', [TeamMemberController::class, 'editTeam'])->name('team.edit');
Route::put('/admin/team-edit/{id}', [TeamMemberController::class, 'updateTeam'])->name('team.update');
Route::delete('/admin/team-delete/{id}', [TeamMemberController::class, 'deleteTeam'])->name('team.delete');

// FAQs Management
Route::get('/admin/faqs', [AdminFaqsController::class, 'index'])->name('faq.show');
Route::get('/admin/faq-add', [AdminFaqsController::class, 'addFAQ'])->name('faq.add');
Route::post('/admin/faq-add', [AdminFaqsController::class, 'submitFaqRecord']);
Route::get('/admin/faq-edit/{id}', [AdminFaqsController::class, 'editFAQ'])->name('faq.edit');
Route::put('/admin/faq-edit/{id}', [AdminFaqsController::class, 'updateFAQ'])->name('faq.update');
Route::delete('/admin/faq-delete/{id}', [AdminFaqsController::class, 'deleteFAQ'])->name('faq.delete');

// Project Management
Route::get('/admin/projects', [AdminProjectsController::class, 'index'])->name('project.add');
Route::get('/admin/project-add', [AdminProjectsController::class, 'addProject'])->name('project.add');
Route::post('/admin/project-add', [AdminProjectsController::class, 'submitProjectRecord']);
Route::get('/admin/project-edit/{id}', [AdminProjectsController::class, 'editProject'])->name('project.edit');
Route::put('/admin/project-edit/{id}', [AdminProjectsController::class, 'updateProject'])->name('project.update');
Route::delete('/admin/project-delete/{id}', [AdminProjectsController::class, 'deleteProject'])->name('project.delete');


Route::get('admin/logout', function(){
    if(session()->has('email')){
        session()->pull('id', null);
        session()->pull('first_name', null);
        session()->pull('last_name', null);
        session()->pull('email', null);
    }
        return redirect('/admin/login');
});



