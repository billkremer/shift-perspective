<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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


Route::get('/',[HomeController::class, 'index'])->name('questionnaire');
Route::post('/results',[HomeController::class, 'results'])->name('results');


Route::any('/{x}/{y?}/{z?}', function () {
	return redirect('/'); // if someone tries something else it redirects to /.
}); 
