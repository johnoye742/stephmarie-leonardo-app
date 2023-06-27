<?php

use App\Http\Controllers\AdminFunctions;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Dashboard;
use App\Models\Courses;
use App\Models\Lessons;
use App\Models\UsersCourses;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::get('/', function () {
    return view('index');
}) -> middleware('auth');

Route::get('/login', [AuthController::class, 'showLogin'])
-> name('login');

Route::post('/login', [AuthController::class, 'login'])
-> name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
}) -> name('dashboard');

Route::get('/register', [AuthController::class, 'showSign'])
-> name('register');

Route::post('/register', [AuthController::class, 'signUp'])
-> name('register');

Route::get('/dashboard', [Dashboard::class, 'show'])
-> middleware('auth');

Route::get('/admin/create-course', function () {
    return view('create-course');
});

Route::post('/admin/create-c', [AdminFunctions::class, 'createCourse'])
-> name('create-course');

Route::get('/admin/add-lessons', function() {
    
    return view('add-lessons');
});

Route::post('/admin/add-lessons', function(Request $request) {
    $validatedData = $request -> validate([
        'title' => 'required|max:500',
        'video_url' => 'required',
        'course_id' => 'required',
        'description' => 'required|min:50',
        'parent' => 'required'
    ]);

    $lesson = new Lessons([
        'title' => $validatedData['title'],
        'video_url' => $validatedData['video_url'],
        'course_id' => $validatedData['course_id'],
        'description' => $validatedData['description'],
        'parent' => $validatedData['parent']
    ]);

    if($lesson -> save()) {
        Session::flash('code', 'success');
        return redirect() -> back();
    }

    return '<script>alert("error");</script>';
})
-> name('add-lessons');

Route::get('/courses', function () {
    return view('explore-courses');
})
-> name('courses');

Route::get('/tst', function () {
    return view('tst');
});

Route::post('/free-checkout', [CheckoutController::class, 'free'])
-> middleware('auth');

Route::get('fl', function () {
    $courses = Lessons::all() -> where('course_id', null, 1);
    $course = null;
    $index = 0;
    foreach($courses as $c)  {
        $index ++;
        if($courses[$index] == $courses[1]) {
            $course = $courses[$index + 1];
        }
    }
    
    return $courses -> search($course);
    
});

Route::get('/courses/{name}/{title}', function ($name, $title) {
    $course = Courses::all() -> where('name', null, $name);
    Log::alert($course[0] -> id);
    $formatedTitle = str_ireplace('-', " ", $title);
    $formatedTitle = ucwords($formatedTitle);

    Log::debug($formatedTitle);
    Log::alert($course[0] -> id);
    if($course != null) $id = $course[0] -> id;

    
    $lessons = Lessons::all() -> where("course_id", null, $id);



    $currLess = Lessons::all() -> where("title", null, $formatedTitle);
    $currLesson = null;
    foreach($currLess as $curr) {
        $currLesson = $curr;
    }

    $currIndex = $lessons -> search($currLesson);
    $nextLesson = null;
    $nextIndex = 0;
    $index = 0;
    
/*    foreach($lessons as $l)  {
        $index++;
        if($lessons[$index] == $lessons[$currIndex]) {
            $nextIndex = $lessons[$index + 1];
        }
    }
*/
    Log::debug("count:" . count($currLess));
    Log::debug('lessons: ' . count($lessons));
    Log::debug('index: ' . $currIndex);
    if($currIndex < count($lessons)) {
        $nextLesson = null;
       
    } else { 
       $nextLesson = $lessons[$currIndex + 1];
    }
    
    Log::debug("Next Title: "  . $nextLesson);
    

    
    if($currLesson != null && !empty($currLesson) && $currLesson != []) return view('test-course', ['lessons' => $lessons, 'name' => $name, 'thisLesson' => $currLesson, 'curr' => 'hidden', 'nextLesson' => $nextLesson, 'courseName' => $name]);

    return "404";
    
}) -> name('lesson') -> middleware('auth');

