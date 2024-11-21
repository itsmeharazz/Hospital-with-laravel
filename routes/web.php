<?php

use App\Http\Controllers\admin\AppointmentController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\DeparmentController;
use App\Http\Controllers\admin\DoctorController;
use App\Http\Controllers\Fronted\ClintControlller;
use App\Http\Controllers\Fronted\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function(){
Route::get('/','index')->name('home');
});
Route::controller(ClintControlller::class)->group(function(){
Route::get('/deparment','deparment')->name('deparment');
Route::get('/deparment-details/{id}/{slug}','deparmentDetails')->name('deparmentDetails');
Route::get('/doctors','doctor')->name('doctor');
Route::get('/doctors-dtails/{id}','doctorDtails')->name('doctorDtails');
Route::get('/contact-us','contact')->name('contact');
Route::get('/appointment','appointment')->name('appointment');
Route::get('/addappointment','addAppointment')->name('addAppointment');
Route::get('/confrom-appointment','confromAppointment')->name('confromAppointment'); //middlewarw role user hobe
Route::get('/user-profile','userProfile')->name('userProfile'); //middlewarw role usen hobe
});
// Only veryfide users can view




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Only Admin can view this pages
Route::middleware(['auth', 'role:admin'])->group(function (){

    Route::get('/home',[dashboardController::class,'index'])->name('adminDashboard'); //middlewarw role admin hobe
   
    // Deparment Controller
    Route::controller(DeparmentController::class)->group(function(){
        Route::get('/admin/add-deparment','addDeparment')->name('addDeparment');
        Route::get('/admin/all-deparment','allDeparment')->name('allDeparment');
        Route::post('/admin/store-deparment','storeDeparment')->name('storeDeparment');
        Route::get('/admin/edite-deparment/{id}','editeDeparment')->name('editeDeparment');
        Route::post('/admin/update-deparment','updateDeparment')->name('updateDeparment');
        Route::get('/admin/delete-deparment/{id}','deleteDeparment')->name('deleteDeparment');
    }); //middlewarw role admin hobe
    
    // Doctors Controller
    Route::controller(DoctorController::class)->group(function(){
        Route::get('/admin/add-doctor','addDoctor')->name('addDoctor');
        Route::get('/admin/all-doctors','allDoctor')->name('allDoctor');
        Route::post('/admin/store-Doctor','storeDoctor')->name('storeDoctor');
        Route::get('/admin/edite-Doctor/{id}','editeDoctor')->name('editeDoctor');
        Route::post('/admin/update-Doctor-Profile','updateDoctor')->name('updateDoctor');
        Route::get('/admin/delete-doctor/{id}','deleteDoctor')->name('deleteDoctor');
    }); //middlewarw role admin hobe
    
    Route::controller(AppointmentController::class)->group(function(){
        Route::get('/admin/delete-deparment/{id}','deleteDeparment')->name('deleteDeparment');
        Route::get('/admin/pending-appointment','pendingappointment')->name('pendingappointment');
        Route::get('/admin/confrom-appointment','confromappointment')->name('confromappointment');
    }); //middlewarw role admin hobe
});

 


require __DIR__.'/auth.php';
