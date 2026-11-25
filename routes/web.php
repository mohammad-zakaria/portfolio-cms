<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InsightController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\VentureController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/ventures', [VentureController::class, 'index'])->name('ventures.index');
Route::get('/ventures/{venture:slug}', [VentureController::class, 'show'])->name('ventures.show');
Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/research', [ResearchController::class, 'index'])->name('research.index');
Route::get('/insights', [InsightController::class, 'index'])->name('insights.index');
Route::get('/insights/{post:slug}', [InsightController::class, 'show'])->name('insights.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'store'])->middleware('throttle:5,1')->name('contact.store');
Route::get('/p/{page:slug}', [PageController::class, 'show'])->name('pages.show');

Route::get('/sitemap.xml', \App\Http\Controllers\SitemapController::class)->name('sitemap');
