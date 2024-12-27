<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\BranchhondaController;
use App\Http\Controllers\BranchsuzukiController;
use App\Http\Controllers\BranchhyundaiController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index');
});

Route::get('index', [HomeController::class, 'index'])->name('pages.index');
Route::get('contact', [ContactController::class, 'index'])->name('pages.contact');
Route::get('about', [AboutController::class, 'index'])->name('pages.about');
Route::get('branchsuzuki', [BranchsuzukiController::class, 'index'])->name('pages.branchsuzuki');
Route::get('branchhonda', [BranchhondaController::class, 'index'])->name('pages.branchhonda');
Route::get('branchhyundai', [BranchhyundaiController::class, 'index'])->name('pages.branchhyundai');
Route::get('services', [ServicesController::class, 'index'])->name('pages.services');


