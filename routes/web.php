<?php

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

use App\Http\Controllers\CmdSelector as CmdSelector;

Route::get('/', function () {
    return view('welcome');
});


Route::get('botmsg/{msg}', function($msg){
    $cmd_selector = new CmdSelector;
    $result = $cmd_selector->selector($msg);

    return '<p>' . $result . '</p>';
});