<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Frontend\IndustryController;

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

// Route::get('/', function () {
//     return view('backend.dashboard');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'about'], function () {
    Route::get('/why-choose-us', [AboutController::class, 'whyChooseUs'])->name('why.choose.us');
    Route::get('/board-of-directors', [AboutController::class, 'boardOfDirectors'])->name('board.of.directors');
    Route::get('/leadership-team', [AboutController::class, 'leadershipTeam'])->name('leadership.team');
    Route::get('/mission-vission', [AboutController::class, 'missionVission'])->name('mission.vission');

});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/employer', [ContactController::class, 'employer'])->name('employer');
    Route::get('/job-seeker', [ContactController::class, 'jobSeeker'])->name('job.seeker');
    Route::get('/career', [ContactController::class, 'career'])->name('career');
    Route::get('/global-presence', [ContactController::class, 'globalPresence'])->name('global.presence');

});

Route::group(['prefix' => 'industry'], function () {
    Route::get('/healthcare', [IndustryController::class, 'healthcare'])->name('healthcare');
    Route::get('/construction', [IndustryController::class, 'construction'])->name('construction');
    Route::get('/hospitality', [IndustryController::class, 'hospitality'])->name('hospitality');
    Route::get('/oil-and-gas', [IndustryController::class, 'oilAndGas'])->name('oil.and.gas');
    Route::get('/fmcg', [IndustryController::class, 'fmcg'])->name('fmcg');
    Route::get('/information-technologies', [IndustryController::class, 'informationTechnologies'])->name('information-technologies');
    Route::get('/automobiles', [IndustryController::class, 'automobiles'])->name('automobiles');

});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });

});