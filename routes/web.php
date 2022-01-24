<?php

use Illuminate\Support\Facades\Input;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BrowseController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;




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
//     return view('welcome');
// });
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/contact', function () {
return view('contact');
});
Route::get('/terms', function () {
return view('terms');
});
Route::get('/privacy', function () {
return view('privacy');
});

Route::get('/faq', function () {
return view('faq');
});
// Route::get('/test', function(){
// 	$test = Review::where('user_id', 1)->get();
// 	dd($test);
// });


Route::get('/browse', [BrowseController::class, 'index'])->name('browse');

Route::get('/details/{movieid}', [BrowseController::class, 'show'])->name('show.movie');//movie id is pulled which gets sent to browsecontroller

Route::get ('/search ', [BrowseController::class, 'search']);


Route::get ('/filter ', [BrowseController::class, 'filter']);

Route::get('/reviewshow', [BrowseController::class, 'reviewshow']);



Route::get('/details/{moviesid}', [HomeController::class, 'show'])->name('show.movie');


Route::post('/review/store', [ReviewController::class, 'store'])->name('review.add');

Route::DELETE('details/{id}/destroy', [ReviewController::class, 'destroy'])->name('review.delete');

Route::post('/reply/store', [ReviewController::class, 'replyStore'])->name('reply.add');


Auth::routes();



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/about', [AboutController::class, 'index']);

Route::get('/details', [DetailsController::class, 'getData']);

// Route::get('/admin', [AdminController::class, 'index']);
// Route::post('/admin/login', [AdminController::class, 'login']);
// Route::get('/adminpanel', [AdminController::class, 'adminpanel']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});



//Search Function

// Route::post('search', function(){
//     $q = Input::get('q');
//     if ($q != '') {
//         $user = User::where('name', 'LIKE', '%' . $q . '%')
//             ->orWhere('username', 'LIKE', '%' . $q . '%')
//             ->orWhere('email', 'LIKE', '%' . $q . '%')
//             ->get();
//         if (count($user) > 0) {
//             return view('dashboard.searches/search')->withDetails($user)->withQuery($q);
//         }
//     }

//     return view('dashboard.searches/search')->withMessage("No user found!");
//     // dd($q);
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
