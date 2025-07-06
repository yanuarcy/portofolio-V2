<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;
use App\Models\Personal;
use Filament\Facades\Filament;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/project', ProjectController::class)->only(['index', 'show']);
Route::resource('/blog', BlogController::class)->only(['index', 'show']);

Route::get('/admin/users', function () {
    return redirect()->route('filament.admin.resources.users.edit', ['record' => auth()->user()->id]);
})->name('filament.admin.resources.users.index');

Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');
