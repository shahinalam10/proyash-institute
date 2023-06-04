<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AboutProyashController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\EduProgramController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DonateController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\NewsTickerController;
use App\Http\Controllers\ImageSliderController;
use App\Http\Controllers\AdminNoticeController;
use App\Http\Controllers\ProyashNewsController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\UploadImgController;
use App\Http\Controllers\AdministrativeController;
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
//frontend controller
Route::get('/',[HomeController::class,'index'])->name('/');
Route::get('student-login',[StudentController::class,'studentLogin'])->name('student-login');
Route::get('student-register',[StudentController::class,'studentRegister'])->name('student-register');

Route::get('/glorious-history',[AboutProyashController::class,'gloriousHistory'])->name('glorious-history');
Route::get('/organiz-structure',[AboutProyashController::class,'organizStructure'])->name('organiz-structure');
Route::get('/education-system',[AboutProyashController::class,'educationSystem'])->name('education-system');
Route::get('/proyash-library',[AboutProyashController::class,'proyashLibrary'])->name('proyash-library');
Route::get('/administrative-body',[AboutProyashController::class,'administrativeBody'])->name('administrative-body');

Route::get('/medical-assessment',[ServiceController::class,'medicalAssessment'])->name('medical-assessment');

Route::get('/childhood-development',[EduProgramController::class,'childhoodDevelopment'])->name('childhood-development');

Route::get('/school-admission',[InformationController::class,'schoolAdmission'])->name('school-admission');

Route::get('/photos-gallery',[ResourceController::class,'photosGallery'])->name('photos-gallery');
Route::get('/video-gallery',[ResourceController::class,'videoGallery'])->name('video-gallery');
Route::get('/proyash-prospectus',[ResourceController::class,'proyashProspectus'])->name('proyash-prospectus');
Route::get('/admission-form',[ResourceController::class,'admissionForm'])->name('admission-form');
Route::get('/go-album',[ResourceController::class,'goAlbum'])->name('go-album');

Route::get('/notice-board',[NoticeController::class,'noticeBoard'])->name('notice-board');

Route::get('/get-in-touch',[ContactUsController::class,'getInTouch'])->name('get-in-touch');

Route::get('/donate-proyash',[DonateController::class,'donateProyash'])->name('donate-proyash');





//admin controller
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {


Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');


Route::get('/add-logo',[LogoController::class,'addLogo'])->name('add-logo');
Route::post('/new-logo',[LogoController::class,'saveNewLogo'])->name('new-logo');
Route::get('/edit-logo/{id}',[LogoController::class,'editLogo'])->name('edit-logo');
Route::post('/update-logo',[LogoController::class,'updateLogo'])->name('update-logo');
Route::post('/delete-logo',[LogoController::class,'deleteLogo'])->name('delete-logo');
Route::get('/manage-logo',[LogoController::class,'manageLogo'])->name('manage-logo');


//Route::get('/add-newsTicker',[NewsTickerController::class,'addNewsTicker'])->name('add-newsTicker');
//Route::get('/manage-newsTicker',[NewsTickerController::class,'manageNewsTicker'])->name('manage-newsTicker');


Route::get('/add-slider',[ImageSliderController::class,'addSlider'])->name('add-slider');
Route::post('/new-slide',[ImageSliderController::class,'newSaveSlide'])->name('new-slide');
Route::get('/edit-slide/{id}',[ImageSliderController::class,'editSlide'])->name('edit-slide');
Route::post('/update-slide',[ImageSliderController::class,'updateSlide'])->name('update-slide');
Route::post('/delete-slider',[ImageSliderController::class,'deleteSlider'])->name('delete-slider');
Route::get('/manage-slide',[ImageSliderController::class,'manageSlide'])->name('manage-slide');


Route::get('/add-notice',[AdminNoticeController::class,'addNotice'])->name('add-notice');
Route::post('/new-notice',[AdminNoticeController::class,'saveNewNotice'])->name('new-notice');
Route::get('/edit-notice/{id}',[AdminNoticeController::class,'editNotice'])->name('edit-notice');
Route::post('/update-notice',[AdminNoticeController::class,'updateNotice'])->name('update-notice');
Route::post('/delete-notice',[AdminNoticeController::class,'deleteNotice'])->name('delete-notice');
Route::get('/manage-notice',[AdminNoticeController::class,'manageNotice'])->name('manage-notice');


Route::get('/proyash-news-slider',[ProyashNewsController::class,'proyashNewsSlider'])->name('proyash-news-slider');
Route::post('/new-proyash-news',[ProyashNewsController::class,'saveProyashNews'])->name('new-proyash-news');
Route::get('/edit-news-slider/{id}',[ProyashNewsController::class,'editNewsSlider'])->name('edit-news-slider');
Route::post('/update-news-slider',[ProyashNewsController::class,'updateNewsSlider'])->name('update-news-slider');
Route::post('/delete-news-slider',[ProyashNewsController::class,'deleteNewsSlider'])->name('delete-news-slider');
Route::get('/manage-news-slider',[ProyashNewsController::class,'manageNewsSlider'])->name('manage-news-slider');


Route::get('/add-service',[AdminServiceController::class,'addService'])->name('add-service');
Route::post('/new-service',[AdminServiceController::class,'saveNewService'])->name('new-service');
Route::get('/edit-service/{id}',[AdminServiceController::class,'editService'])->name('edit-service');
Route::post('/update-service',[AdminServiceController::class,'updateService'])->name('update-service');
Route::post('/delete-service',[AdminServiceController::class,'deleteService'])->name('delete-service');
Route::get('/service-manage',[AdminServiceController::class,'serviceManage'])->name('service-manage');


Route::get('/create-album',[GalleryController::class,'createAlbum'])->name('create-album');
Route::post('/new-album',[GalleryController::class,'newAlbum'])->name('new-album');
Route::get('/edit-album/{id}',[GalleryController::class,'editAlbum'])->name('edit-album');
Route::post('/update-album',[GalleryController::class,'updateAlbum'])->name('update-album');
Route::post('/delete-album',[GalleryController::class,'deleteAlbum'])->name('delete-album');
Route::get('/manage-album',[GalleryController::class,'manageAlbum'])->name('manage-album');

Route::get('/upload-image',[UploadImgController::class,'uploadImage'])->name('upload-image');
Route::post('/new-upload-img',[UploadImgController::class,'newUploadImg'])->name('new-upload-img');
Route::get('/edit-image/{id}',[UploadImgController::class,'editImage'])->name('edit-image');
Route::post('/update-upload-img',[UploadImgController::class,'updateUploadImg'])->name('update-upload-img');
Route::post('/delete-image',[UploadImgController::class,'deleteImage'])->name('delete-image');
Route::get('/manage-image',[UploadImgController::class,'manageImage'])->name('manage-image');


Route::get('/add-person',[AdministrativeController::class,'addPerson'])->name('add-person');
Route::post('/new-person',[AdministrativeController::class,'saveNewPerson'])->name('new-person');
Route::get('/edit-person/{id}',[AdministrativeController::class,'editPerson'])->name('edit-person');
Route::post('/update-person',[AdministrativeController::class,'updatePerson'])->name('update-person');
Route::post('/delete-person',[AdministrativeController::class,'deletePerson'])->name('delete-person');
Route::get('/manage-person',[AdministrativeController::class,'managePerson'])->name('manage-person');



});
