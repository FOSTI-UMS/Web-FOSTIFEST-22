<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WebinarController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ParticipantController;

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

Route::get('/', [WebinarController::class, 'landing'])->name('landing-page');
Route::get('/download-rulebook', [CompetitionController::class, 'downloadRule'])->name('downloadRules');

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login-page')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->name('authenticate')->middleware('guest');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin
Route::get('/dashboard', [AdminController::class, 'index'])->name('admin-page')->middleware('auth', 'checkAdmin');
Route::get('/peserta-webinar', [AdminController::class, 'webinar'])->name('pesertaWebinar')->middleware('auth', 'checkAdmin');
Route::post('/peserta-webinar/sendEmail/{webinar}', [AdminController::class, 'sendMailUser'])->name('sendEmailUser')->middleware('auth', 'checkAdmin');
Route::get('/peserta-lomba', [AdminController::class, 'lomba'])->name('pesertaLomba')->middleware('auth', 'checkAdmin');
Route::get('/peserta-lomba-notverified', [AdminController::class, 'notverified'])->name('notVerified')->middleware('auth', 'checkAdmin');
Route::get('/form-verification/{competition}', [AdminController::class, 'formVerification'])->name('formVerification')->middleware('auth', 'checkAdmin');
Route::put('/peserta-lomba-notverified/{competition}', [AdminController::class, 'verifCompetition'])->name('verificationComp')->middleware('auth', 'checkAdmin');
Route::get('/peserta-lomba-verified', [AdminController::class, 'verified'])->name('verified')->middleware('auth', 'checkAdmin');
Route::delete('/peserta-webinar/{webinar}', [AdminController::class, 'destroyWebinar'])->name('deleteWebinar')->middleware('auth', 'checkAdmin');
Route::get('/peserta-webinar-export', [WebinarController::class, 'export'])->name('exportExcelWeb')->middleware('auth', 'checkAdmin');
Route::get('/peserta-lomba-export', [ParticipantController::class, 'export'])->name('exportExcelMem')->middleware('auth', 'checkAdmin');
Route::get('/tim-lomba-export', [CompetitionController::class, 'export'])->name('exportExcelTeam')->middleware('auth', 'checkAdmin');

// Webinar
Route::get('/webinar', [WebinarController::class, 'index'])->name('webinar');
Route::post('/webinar', [WebinarController::class, 'store'])->name('registrationWebinar');

// Competition
Route::get('/competition', [CompetitionController::class, 'index'])->name('competition');
Route::post('/competition', [CompetitionController::class, 'store'])->name('registrationComp');

// Dashboard Peserta
Route::get('/dashboard-peserta', [ParticipantController::class, 'dashboard'])->name('dashboardCompetition')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/tim', [ParticipantController::class, 'team'])->name('team')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/ketua', [ParticipantController::class, 'teamLeader'])->name('leaderTeam')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/anggota', [ParticipantController::class, 'teamMember'])->name('memberTeam')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/guideline', [ParticipantController::class, 'guideline'])->name('guidelineTeam')->middleware('auth', 'checkParticipant');
Route::post('/dashboard-peserta/ketua', [ParticipantController::class, 'storeLeader'])->name('storeLeader')->middleware('auth', 'checkParticipant');
Route::post('/dashboard-peserta/anggota/1', [ParticipantController::class, 'storeMember1'])->name('storeMember1')->middleware('auth', 'checkParticipant');
Route::post('/dashboard-peserta/anggota/2', [ParticipantController::class, 'storeMember2'])->name('storeMember2')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/ketua/edit/{leader}', [ParticipantController::class, 'showEditLeader'])->name('showEditLeader')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/anggota/1/edit/{member1}', [ParticipantController::class, 'showEditMember1'])->name('showEditMember1')->middleware('auth', 'checkParticipant');
Route::get('/dashboard-peserta/anggota/2/edit/{member2}', [ParticipantController::class, 'showEditMember2'])->name('showEditMember2')->middleware('auth', 'checkParticipant');
Route::put('/dashboard-peserta/ketua/edit/{leader}', [ParticipantController::class, 'editLeader'])->name('editLeader')->middleware('auth', 'checkParticipant');
Route::put('/dashboard-peserta/anggota/1/edit/{member1}', [ParticipantController::class, 'editMember1'])->name('editMember1')->middleware('auth', 'checkParticipant');
Route::put('/dashboard-peserta/anggota/2/edit/{member2}', [ParticipantController::class, 'editMember2'])->name('editMember2')->middleware('auth', 'checkParticipant');
