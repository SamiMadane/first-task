<?php

use Illuminate\Support\Facades\DB;
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

// استدعاء الصفحة
Route::get('about', function () {
    $name = 'Sami';
    return view('about', compact('name'));
});

// عند الضغط على الزر 
Route::post('about', function () {
    $name = 'Sami';
    if (isset($_POST['name']))
        $name = $_POST['name'];
    return view('about', compact('name'));
});

/*
Route::get('tasks', function () {
    $tasks = ['task1','task2','task3'];
    return view('tasks',compact('tasks'));
});
*/
Route::get('tasks', function () {
    $tasks = DB::table('tasks')->get();
   // return $tasks;
    return view('tasks',compact('tasks'));
});