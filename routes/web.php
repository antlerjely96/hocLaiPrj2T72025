<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route hien thi danh sach
Route::get('/school-years', [\App\Http\Controllers\SchoolYearController::class, 'index'])
    ->name('school-years.index');
//Route hien thi form them
Route::get('/school-years/create', [\App\Http\Controllers\SchoolYearController::class, 'create'])
    ->name('school-years.create');
//Route luu du lieu them
Route::post('/school-years/create', [\App\Http\Controllers\SchoolYearController::class, 'store'])
    ->name('school-years.store');
//Route hien thi form sua
Route::get('/school-years/{schoolYear}/edit', [\App\Http\Controllers\SchoolYearController::class, 'edit'])
    ->name('school-years.edit');
//Route sua du lieu
Route::put('/school-years/{schoolYear}/edit', [\App\Http\Controllers\SchoolYearController::class, 'update'])
    ->name('school-years.update');
//Route xoa du lieu
Route::delete('/school-years/{schoolYear}', [\App\Http\Controllers\SchoolYearController::class, 'destroy'])
    ->name('school-years.destroy');
