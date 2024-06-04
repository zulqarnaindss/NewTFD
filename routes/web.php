<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);
Route::get('/web-development-services', [FrontController::class, 'webDevelopment']);
Route::get('/search-engine-optimization', [FrontController::class, 'seo']);
Route::get('/app-development-services', [FrontController::class, 'appDevelopment']);
Route::get('/blogs', [FrontController::class, 'NewMultipleBlogs']);
Route::get('/case-studies', [FrontController::class, 'NewCaseStudy']);
Route::get('/white-papers', [FrontController::class, 'NewWhitePapers']);
Route::get('/events', [FrontController::class, 'NewEvents']);
Route::get('/podcasts', [FrontController::class, 'NewPodcasts']);
Route::get('/contact-us', [FrontController::class, 'connect']);
Route::get('/privacy-policy', [FrontController::class, 'privacypolicy']);
Route::get('/terms-and-conditions', [FrontController::class, 'termsconditions']);
Route::get('/cookie-policy', [FrontController::class,'cookiepolicy']);
Route::get('/about-us', [FrontController::class, 'aboutus']);
Route::get('/our-portfolio', [FrontController::class, 'portfolio']);

