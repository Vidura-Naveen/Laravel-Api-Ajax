<?php

use Illuminate\Support\Facades\Route;

Route::get('/ajax-example', function () {
    return view('Ajax');
});
Route::get('/get-data', [App\Http\Controllers\AjaxController::class, 'getData'])->name('get.data');
Route::get('/get-data-two', [App\Http\Controllers\AjaxController::class, 'getDataTwo'])->name('get.data.two');



// Route::get('/manualbycontroller-example', function () {
//     return view('Manualbycontroller');
// });
Route::get('/manualbycontroller-example', [App\Http\Controllers\ManualWithControllerController::class, 'index'])->name('filter.data');
Route::get('/filter-data', [App\Http\Controllers\ManualWithControllerController::class, 'filterData'])->name('filter.data');


Route::get('/', function () {
    return view('welcome');
});

