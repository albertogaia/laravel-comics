<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $menu_links = config('menu-links');
    $data = [
        'links' => $menu_links
    ];

    $current_series = config('comics');
    $comics = [
        'comics' => $current_series
    ];
    return view('home', $data, $comics);
})->name('homepage');
