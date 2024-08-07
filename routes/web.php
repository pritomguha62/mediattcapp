<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginoutController;
use App\Http\Controllers\PubController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;



// public page routes 


Route::get('/home', [PubController::class, 'home']
)->name('home');

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/single_course/{course_id}', [CourseController::class, 'single_course']
)->name('single_course');

Route::get('/single_course/{course_id}', [CourseController::class, 'single_course']
)->name('single_course');

Route::get('/all_courses', [CourseController::class, 'all_courses']
)->name('all_courses');

Route::get('/contact_us', [PubController::class, 'contact_us']
)->name('contact_us');

Route::post('/contact_message', [PubController::class, 'contact_message']
)->name('contact_message');

Route::get('/admission', [PubController::class, 'admission']
)->name('admission');

Route::post('/admission_apply', [PubController::class, 'admission_apply']
)->name('admission_apply');

Route::get('/result', [PubController::class, 'result']
)->name('result');

Route::post('/result_check', [PubController::class, 'result_check']
)->name('result_check');

Route::get('/institution_result_course', [PubController::class, 'institution_result_course']
)->name('institution_result_course');

Route::get('/institution_result/{course_id}', [PubController::class, 'institution_result']
)->name('institution_result');

Route::get('/all_galleries_document', [GalleryController::class, 'all_galleries_document']
)->name('all_galleries_document');


// login logout 

Route::get('/login', function () {
    return view('public_view.login');
})->name('login');

Route::post('/check_login', [LoginoutController::class, 'check_login']
)->name('check_login');

Route::get('/logout', [LoginoutController::class, 'logout']
)->name('logout');



// admin_panel routes


Route::get('/admin_panel/admin_register', [AdminUserController::class, 'admin_register']
)->name('admin_register');

Route::post('/admin_panel/admin_register_apply', [AdminUserController::class, 'admin_register_apply']
)->name('admin_register_apply');

Route::get('/admin_panel/verify_token', [AdminUserController::class, 'verify_token']
)->name('verify_token');

Route::get('/admin_panel/token_verification', [AdminUserController::class, 'token_verification']
)->name('token_verification');

Route::prefix('/admin_panel')->middleware('admin_teacher')->group(function () {
    
    Route::get('/dashboard', [AdminUserController::class, 'dashboard']
    )->name('dashboard')->middleware('email_verified');
    
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });


    // courses route 

    Route::get('/all_admin_courses', [AdminUserController::class, 'all_admin_courses']
    )->name('all_admin_courses');
    

    Route::get('/add_courses', [CourseController::class, 'add_courses']
    )->name('add_courses');
    

    Route::post('/add_courses_info', [CourseController::class, 'add_courses_info']
    )->name('add_courses_info');
    
    Route::get('/delete_courses_info/{course_id}', [CourseController::class, 'delete_courses_info']
    )->name('delete_courses_info');
    
    
    Route::get('/update_courses/{course_id}', [CourseController::class, 'update_courses']
    )->name('update_courses');
    
    
    Route::post('/update_courses_info', [CourseController::class, 'update_courses_info']
    )->name('update_courses_info');

    

    // students route 

    
    Route::get('/add_students_manually', [StudentController::class, 'add_students_manually']
    )->name('add_students_manually');
    
    
    Route::get('/add_students_course_manually/{course_id}', [StudentController::class, 'add_students_course_manually']
    )->name('add_students_course_manually');
    
    
    Route::post('/add_students_manually_info', [StudentController::class, 'add_students_manually_info']
    )->name('add_students_manually_info');
    
    
    Route::get('/all_active_students', [StudentController::class, 'all_active_students']
    )->name('all_active_students');
    
    
    Route::get('/all_deactive_students', [StudentController::class, 'all_deactive_students']
    )->name('all_deactive_students');
    
    
    Route::get('/activate_student/{student_id}', [StudentController::class, 'activate_student']
    )->name('activate_student');
    
    
    Route::get('/deactivate_student/{student_id}', [StudentController::class, 'deactivate_student']
    )->name('deactivate_student');
    
    
    Route::get('/delete_student/{student_id}', [StudentController::class, 'delete_student']
    )->name('delete_student');
        
    Route::get('/admin_update_student/{student_id}', [StudentController::class, 'admin_update_student']
    )->name('admin_update_student');
    
        
    Route::post('/admin_update_student_info', [StudentController::class, 'admin_update_student_info']
    )->name('admin_update_student_info');

    
    Route::get('/view_course_students/{course_id}', [StudentController::class, 'view_course_students']
    )->name('view_course_students');
    
    
    
    // admin gallery routes 
    
    Route::get('/all_admin_document', [GalleryController::class, 'all_admin_document']
    )->name('all_admin_document');
    
    
    Route::get('/add_document', [GalleryController::class, 'add_document']
    )->name('add_document');
    
    Route::post('/add_document_info', [GalleryController::class, 'add_document_info']
    )->name('add_document_info');

    Route::get('/update_document/{doc_id}', [GalleryController::class, 'update_document']
    )->name('update_document');
    
        
    Route::post('/update_document_info', [GalleryController::class, 'update_document_info']
    )->name('update_document_info');

    Route::get('/delete_document/{doc_id}', [GalleryController::class, 'delete_document']
    )->name('delete_document');
        
    
    
    
    // admin control routes 
    
    
    
        
    // Route::get('/test_mail', [AdminUserController::class, 'test_mail']
    // )->name('test_mail');
    
    Route::middleware('admin')->group(function (){
        Route::get('/all_admins', [AdminUserController::class, 'all_admins']
        )->name('all_admins');
        
            
        Route::post('/update_admin', [AdminUserController::class, 'update_admin']
        )->name('update_admin');
        
            
        Route::get('/delete_admin/{admin_id}', [AdminUserController::class, 'delete_admin']
        )->name('delete_admin');
    });
    



});



