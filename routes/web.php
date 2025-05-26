<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RecruiterController;
use App\Http\Controllers\RecruiterLoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\tableUserController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\HttpController;
use App\Models\Author;
use App\Models\Detail;
use Illuminate\Support\Facades\Route;

// Home and Job Listings
Route::get('/', [JobController::class, 'showJobs'])->name('home');
Route::get('/job/{id}', [JobController::class, 'show'])->name('job.show');

Route::get('create-user', [UserController::class, 'create'])->name('users.create');
Route::post('store-user', [UserController::class, 'store'])->name('users.store');
Route::get('list-users', [UserController::class, 'index'])->name('users.index');

Route::get('recruiter/register', [RecruiterController::class, 'showForm'])->name('recruiter.register.form');
Route::post('recruiter/register', [RecruiterController::class, 'register'])->name('recruiter.register.submit');
Route::get('recruiter/login', [RecruiterLoginController::class, 'showLoginForm'])->name('recruiter.login.form');
Route::post('recruiter/login', [RecruiterLoginController::class, 'login'])->name('recruiter.login.submit');

Route::get('/dashboard', [JobController::class, 'landing'])->name('dashboard.landing');
Route::resource('jobs', JobController::class);


Route::get('/dashboard/index', function () {
  return view('/dashboard/index');
})->name('index');
Route::get('/dashboard/create', function () {
  return view('/dashboard/create');
})->name('create');


//6th january
Route::get('csrf', [JobListingController::class, 'csrf']);

Route::post('csrfPage', [JobListingController::class, 'csrfPage']);


//Table & restriction (CLASS WORK)
Route::get('details/index', [DetailController::class, 'index']);


Route::get('/form', [PageController::class, 'form']);




Route::post('/submit', [PageController::class, 'checkRestrictions']); // Handle form submission

Route::get('/page1', [PageController::class, 'page1'])->middleware('age.restrict');
Route::get('/page2', [PageController::class, 'page2'])->middleware('year.restrict');
Route::get('/page3', [PageController::class, 'page3'])->middleware('name.restrict');


//.csv excel record (ASSIGNMENT)
Route::get('/upload', [UploadController::class, 'showUploadForm']);
Route::post('/upload', [UploadController::class, 'handleFileUpload']);

//api access, fetch abd display(ASSIGNMENT)
Route::get('/users', [tableUserController::class, 'fetchAndDisplay'])->name('users');
Route::post('/users/save', [tableUserController::class, 'saveToDatabase'])->name('users.save');


Route::get('/http', [HttpController::class, 'index'])->name('http.index');
Route::post('/http/save', [HttpController::class, 'save'])->name('http.save');


//Image upload(ASSIGNMENT)
/*Route::get('/uploadImage', function () {
  return view('Image');
})->name('image.form');*/

Route::get('/uploadImage', [ImageUploadController::class, 'Imageform'])->name('image.form');
Route::post('/uploadImage', [ImageUploadController::class, 'Image'])->name('image.upload');

// two tables with one model(ASSIGNMENT)
Route::get('/author', [AuthorController::class, 'show'])->name('author');