<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('index', [HomeController::class, 'index'])->name('pages.index');
Route::get('about', [HomeController::class, 'about'])->name('pages.about');
Route::get('contact', [HomeController::class, 'contact'])->name('pages.contact');
Route::get('branchsuzuki', [HomeController::class, 'branchsuzuki'])->name('pages.branchsuzuki');
Route::get('branchhonda', [HomeController::class, 'branchhonda'])->name('pages.branchhonda');
Route::get('branchhyundai', [HomeController::class, 'branchhyundai'])->name('pages.branchhyundai');
Route::get('services', [HomeController::class, 'services'])->name('pages.services');
Route::get('bookservice', [HomeController::class, 'bookservice'])->name('pages.bookservice');
Route::get('testdrive', [HomeController::class, 'testdrive'])->name('pages.testdrive');
Route::get('sparepart', [HomeController::class, 'sparepart'])->name('pages.sparepart');
Route::get('bodypaint', [HomeController::class, 'bodypaint'])->name('pages.bodypaint');
Route::get('customercare', [HomeController::class, 'customercare'])->name('pages.customercare');



