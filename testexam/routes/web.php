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


use App\Models\Student;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/insert',function (){
    DB::insert('insert into student(name,age,address,telephone)values(?,?,?,?)',['Cao Trung Duc',1,'11 Ton That Thuyet','12345672']);
    return 'Done';
});

Route::get('display',function (){
    $student =DB::select('select * from student');
    foreach ($student as $s)
    {
        echo  $s->name. " " . $s->age. " " . $s->address ." " . $s->telephone;
        echo "<br>";
    }
});


