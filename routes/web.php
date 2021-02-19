<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes(['register'=>false,'reset'=>false]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/my-profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('user.profile');

//*************************************admin routes*******************************************//
Route::resource('/colleges',App\Http\Controllers\CollegeController::class);
Route::resource('/departments',App\Http\Controllers\DepartmentController::class);
Route::resource('/programs',App\Http\Controllers\ProgramController::class);
Route::resource('/academic_years',App\Http\Controllers\AcademicYearController::class);
Route::resource('/roles',App\Http\Controllers\RoleController::class);
Route::resource('/users',App\Http\Controllers\UserController::class);
Route::resource('/panels',App\Http\Controllers\PanelController::class);
Route::resource('/announcements',App\Http\Controllers\AnnouncementController::class);
Route::resource('/resources',App\Http\Controllers\ResourceController::class);
Route::resource('/project_categories',App\Http\Controllers\ProjectCategoryController::class);
Route::resource('/project_platforms',App\Http\Controllers\ProjectPlatformController::class);
Route::resource('/project_statuses',App\Http\Controllers\ProjectStatusController::class);
Route::resource('/projects',App\Http\Controllers\ProjectController::class);
Route::resource('/concept_notes',App\Http\Controllers\ConceptNoteController::class);
Route::resource('/consultations',App\Http\Controllers\ConsultationController::class);
Route::resource('/report_types',App\Http\Controllers\ReportTypeController::class);
Route::resource('/report_statuses',App\Http\Controllers\ReportStatusController::class);
Route::resource('/reports',App\Http\Controllers\ReportController::class);