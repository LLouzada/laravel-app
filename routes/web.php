<?php

use Barryvdh\Debugbar\Facades\Debugbar;
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

    // Print a message to the debugbar
    // Debugbar::info('Hello World');
    // Debugbar::error('Error!');
    // Debugbar::warning('Watch out…');
    // Debugbar::addMessage('Another message', 'mylabel');

    // Measure the execution time of some code
    // Debugbar::startMeasure('render','Time for rendering the page');

    // Trhow an exception
    // try {
    //     throw new Exception('Try message');
    // } catch (Exception $e) {
    //     Debugbar::addThrowable($e);
    // }

    $name = "LLouzada";

    return view('welcome', [
        'name' => $name
    ]);
});
