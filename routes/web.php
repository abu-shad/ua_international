<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\JobController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\CareerController;
use App\Http\Controllers\Backend\MarqueController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\EmployerController;
use App\Http\Controllers\Backend\IndustryController;
use App\Http\Controllers\Backend\PresenceController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\JobSeekerController;

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
Route::get('/subscribe', [HomeController::class, 'subscriber'])->name('subscribe');
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
    Route::get('/career-search/{id}', [ContactController::class, 'careerSearch'])->name('career.search');
    Route::post('/create-career-detail', [ContactController::class, 'createCareerDetail'])->name('create.career.detail');
    Route::get('/global-presence', [ContactController::class, 'globalPresence'])->name('global.presence');
    Route::post('/employer-create', [ContactController::class, 'creatEemployer'])->name('employer.create');
    Route::post('/job-seeker-create', [ContactController::class, 'creatJobSeeker'])->name('job.seeker.create');
    Route::post('/apply-create', [ContactController::class, 'creatApplyJob'])->name('job.apply');
});

Route::prefix('industry')->controller(App\Http\Controllers\Frontend\IndustryController::class)->group(function () {
    Route::get('/healthcare',  'healthcare')->name('healthcare');
    Route::get('/construction',  'construction')->name('construction');
    Route::get('/hospitality',  'hospitality')->name('hospitality');
    Route::get('/oil-and-gas',  'oilAndGas')->name('oil.and.gas');
    Route::get('/fmcg',  'fmcg')->name('fmcg');
    Route::get('/information-technologies',  'informationTechnologies')->name('information-technologies');
    Route::get('/automobiles',  'automobiles')->name('automobiles');
});

Route::prefix('service')->controller(App\Http\Controllers\Frontend\ServiceController::class)->group(function () {
    Route::get('/overseas-recruitment-service',  'overseasRecruitmentService')->name('overseas.recruitment.service');
    Route::get('/digital-marketing',  'digitalMarketing')->name('digital.marketing');
    Route::get('/document-attestation',  'documentAttestation')->name('document.attestation');
    Route::get('/global-executive-search',  'globalExecutiveSearch')->name('global.executive.search');
    Route::get('/skill-training-testing',  'skillTrainingTesting')->name('skill.training.testing');
    Route::get('/travel-tourism',  'travelTourism')->name('travel.tourism');
    Route::get('/umrah',  'umrah')->name('umrah');
    Route::get('/web-app-development',  'webAppDevelopment')->name('web.app.development');
});

Route::prefix('client')->controller(App\Http\Controllers\Frontend\ClientController::class)->group(function () {
    Route::get('/saudi-arabia',  'saudiArabia')->name('saudi.arabia');
    Route::get('/uae',  'uae')->name('uae');
    Route::get('/qatar',  'qatar')->name('qatar');
    Route::get('/kingdom-of-bahrain',  'KingdomOfBahrain')->name('kingdom.of.bahrain');
    Route::get('/oman',  'oman')->name('oman');
});

Route::prefix('client')->controller(App\Http\Controllers\Frontend\GalleryController::class)->group(function () {
    Route::get('/photo-gallery',  'photoGallery')->name('photo.gallery');
    Route::get('/technical-trade',  'technicalTrade')->name('technical.trade');
});

Route::prefix('client')->controller(App\Http\Controllers\Frontend\JobController::class)->group(function () {
    Route::get('/jobs-list',  'jobsList')->name('jobs.list');
    Route::get('/jobs-list-search/{id}',  'jobsListSearch')->name('jobs.list.search');
    Route::get('/jobs-grid',  'jobsGrid')->name('jobs.grid');
    Route::get('/jobs-grid-search/{id}',  'jobsGridSearch')->name('jobs.grid.search');

    Route::get('/job-detail/{id}',  'jobDetail')->name('job.detail');
    Route::post('/create-job-detail',  'createJobDetail')->name('create.job.detail');
});


Route::prefix('blog')->controller(App\Http\Controllers\Frontend\BlogController::class)->group(function () {
    Route::get('/blog-details/{id}',  'blogDetails')->name('blog.details');

});

Route::prefix('blog')->controller(App\Http\Controllers\Frontend\MoreController::class)->group(function () {
    Route::get('/help-desk',  'helpDesk')->name('help.desk');
    Route::get('/terms-conditions',  'termsConditions')->name('terms.conditions');
    Route::get('/privacy-policy',  'privacyPolicy')->name('privacy.policy');
    Route::post('/help-create',  'helpDeskCreate')->name('help.create');

});



Route::group(['prefix' => 'admin'], function () {

    Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


        Route::group(['prefix' => 'profile'], function () {
            Route::get('/show', [ProfileController::class, 'showProfile'])->name('show.profile');
            Route::put('/update/{id}', [ProfileController::class, 'updateProfile'])->name('update.profile');
            Route::post('/change-password', [ProfileController::class, 'changePassword'])->name('change.password');
        });
        Route::group(['prefix' => 'blog'], function () {
            Route::get('/list', [BlogController::class, 'blogList'])->name('blog.list');
            Route::get('/form', [BlogController::class, 'blogForm'])->name('blog.form');
            Route::post('/create', [BlogController::class, 'blogCreate'])->name('blog.create');
            Route::get('/edit/{id}', [BlogController::class, 'blogEdit'])->name('blog.edit');
            Route::put('/update/{id}', [BlogController::class, 'blogUpdate'])->name('blog.update');
            Route::delete('/destroy/{id}', [BlogController::class, 'blogDestroy'])->name('blog.destroy');
        });

        Route::group(['prefix' => 'marque'], function () {
            Route::get('/list', [MarqueController::class, 'marqueList'])->name('marque.list');
            Route::get('/form', [MarqueController::class, 'marqueForm'])->name('marque.form');
            Route::post('/create', [MarqueController::class, 'marqueCreate'])->name('marque.create');
            Route::delete('/destroy/{id}', [MarqueController::class, 'marqueDestroy'])->name('marque.destroy');
        });
        Route::group(['prefix' => 'job'], function () {
            Route::get('/list', [JobController::class, 'jobList'])->name('job.list');
            Route::get('/create-form', [JobController::class, 'createJobForm'])->name('job.form');
            Route::post('/create', [JobController::class, 'createJob'])->name('job.create');
            Route::get('/edit/{id}', [JobController::class, 'editJob'])->name('job.edit');
            Route::put('/update/{id}', [JobController::class, 'updateJob'])->name('job.update');
            Route::delete('/destroy/{id}', [JobController::class, 'destroyJob'])->name('job.destroy');
            Route::delete('/applied-destroy/{id}', [JobController::class, 'destroyAppliedJob'])->name('apply.job.destroy');
            Route::get('/job-list', [JobController::class, 'applyJob'])->name('apply.list');
            Route::get('/applied-resume/{filename}', [JobController::class, 'download'])->name('applied.resume.download');

        });
        Route::group(['prefix' => 'service'], function () {
            Route::get('/list', [ServiceController::class, 'serviceList'])->name('service.list');
            Route::get('/create-form', [ServiceController::class, 'createServiceForm'])->name('service.form');
            Route::post('/create', [ServiceController::class, 'createService'])->name('service.create');
            Route::get('/edit/{id}', [ServiceController::class, 'editService'])->name('service.edit');
            Route::put('/update/{id}', [ServiceController::class, 'updateService'])->name('service.update');
            Route::delete('/destroy/{id}', [ServiceController::class, 'destroyService'])->name('service.destroy');
        });

        Route::group(['prefix' => 'industry'], function () {
            Route::get('/list', [IndustryController::class, 'industryList'])->name('industry.list');
            Route::get('/create-form', [IndustryController::class, 'createIndustryForm'])->name('industry.form');
            Route::post('/create', [IndustryController::class, 'createIndustry'])->name('industry.create');
            Route::get('/edit/{id}', [IndustryController::class, 'editIndustry'])->name('industry.edit');
            Route::put('/update/{id}', [IndustryController::class, 'updateIndustry'])->name('industry.update');
            Route::delete('/destroy/{id}', [IndustryController::class, 'destroyIndustry'])->name('industry.destroy');
        });

        Route::group(['prefix' => 'presence'], function () {
            Route::get('/list', [PresenceController::class, 'presenceList'])->name('presence.list');
            Route::get('/create-form', [PresenceController::class, 'createPresenceForm'])->name('presence.form');
            Route::post('/create', [PresenceController::class, 'createPresence'])->name('presence.create');
            Route::get('/edit/{id}', [PresenceController::class, 'editPresence'])->name('presence.edit');
            Route::put('/update/{id}', [PresenceController::class, 'updatePresence'])->name('presence.update');
            Route::delete('/destroy/{id}', [PresenceController::class, 'destroyPresence'])->name('presence.destroy');
        });

        Route::group(['prefix' => 'employer'], function () {
            Route::get('/list', [EmployerController::class, 'employerList'])->name('employer.list');
            Route::get('/helpdesl-list', [EmployerController::class, 'helpDeskList'])->name('help.list');
            Route::delete('/destroy/{id}', [EmployerController::class, 'destroyEmployer'])->name('employer.destroy');
            Route::delete('/help-destroy/{id}', [EmployerController::class, 'destroyHelp'])->name('help.destroy');
        });

        Route::group(['prefix' => 'job-seekers'], function () {
            Route::get('/seeker-list', [JobSeekerController::class, 'jobSeekerList'])->name('job.seekers.list');
            Route::delete('/destroy/{id}', [JobSeekerController::class, 'destroyJobSeeker'])->name('job.seekers.destroy');
            Route::get('/resume/{filename}', [JobSeekerController::class, 'download'])->name('resume.download');
        });

        Route::group(['prefix' => 'career'], function () {
            Route::get('/career-list', [CareerController::class, 'careerList'])->name('career.list');
            Route::get('/career-create-form', [CareerController::class, 'createCareerForm'])->name('career.form');
            Route::post('/career-create', [CareerController::class, 'createCareer'])->name('career.create');
            Route::get('/career-edit/{id}', [CareerController::class, 'editCareer'])->name('career.edit');
            Route::put('/career-update/{id}', [CareerController::class, 'updateCareer'])->name('career.update');
            Route::delete('/career-destroy/{id}', [CareerController::class, 'destroyCareer'])->name('career.destroy');
            Route::delete('/applied-career-destroy/{id}', [CareerController::class, 'destroyAppliedCareer'])->name('apply.career.destroy');
            Route::get('/apply-career-list', [CareerController::class, 'applyCareer'])->name('apply.career.list');
            Route::get('/applied-career-resume/{filename}', [CareerController::class, 'downloadCareer'])->name('applied.career.resume.download');

        });
        
    });
});
