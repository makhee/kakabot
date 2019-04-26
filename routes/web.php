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

Route::get('/todo', function () {
    return view('todolist');
});

Route::get('botmsg/{msg}/{sender}', function($msg, $sender){
    $cmd_selector = new CmdSelector;
    $result = $cmd_selector->selector($msg, $sender);

    return '<p>' . $result . '</p>';
});